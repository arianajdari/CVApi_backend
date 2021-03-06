<?php

namespace App\Http\Controllers;

use App\App as UserApp;
use App\Log as UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ApiController extends Controller
{
    protected $imagePath;
    protected $tempImagePath = '/home/vagrant/www/laravel_api/storage/app/';
    protected $pythonPath = "cd /home/vagrant/www/laravel_api/python && python ";

    public function __construct()
    {
        $this->imagePath = storage_path() . '/app';
    }

    public function processRequest(Request $request)
    {  	
        $userApp = UserApp::where('public_key', $request->public_key)->get();

        $public_key = $userApp[0]->public_key;
        $secret_key = $userApp[0]->secret_key;
        $password = $userApp[0]->password;

        if($public_key === $request->public_key and $secret_key === $request->secret_key and $password === $request->password) {
            if ($request->file('image')) {
                $image = $request->file('image');
                $options = $request->options;
                $image_name = uniqid() . '.png';
                $image->move($this->imagePath, $image_name);
                return $this->processFile($options, $this->tempImagePath ,$image_name, $userApp[0]);          
            } 
            else
                return response()->json(['message' => 'No request was received'], 200);
        }        
    }

    protected function processFile($options, $tempImagePath ,$image_name, $userApp)
    {
        $options = explode('|', $options);
        unset($options[count($options) - 1]);

        for ($i = 0; $i < count($options); $i++) {
            $parametres = explode(':', $options[$i]);
            $options[$parametres[0]] = $parametres;
            unset($options[$i]);
        }

        foreach ($options as $key => $value) {
            unset($options[$key][0]);
        }

        foreach ($options as $key => $option) {
            $execution_script = $this->pythonPath . $key. '.py ' . $tempImagePath . $image_name . ' ';
            if (count($option) > 0) 
                for ($i = 1; $i <= count($option); $i++) 
                    $execution_script .= $option[$i] . ' ';    
            \Log::info($execution_script);
            exec($execution_script);
            
            $userLog = new UserLog;
            $userLog->process = $execution_script;
            $userLog->user_id = $userApp->user->id;
            $userLog->app_id =  $userApp->id;
            $userLog->save();
        }
        $file = base64_encode(File::get(storage_path() . '/app/' . $image_name));
        File::delete(storage_path() . '/app/' . $image_name);
        return ["photo" => $file];
    }

    public function testApp(Request $request)
    {
        $userApp = UserApp::where('public_key', $request->public_key)->get();

        if(!(count($userApp) > 0))
            return response()->json(['message' => 'Looks like you have a problem to access CVApi. Please check your credentials!']);

        $public_key = $userApp[0]->public_key;
        $secret_key = $userApp[0]->secret_key;
        $password = $userApp[0]->password;

        if($public_key === $request->public_key and $secret_key === $request->secret_key and $password === $request->password)
            return response()->json(['message' => 'You were successfully authenticated! You can now access full functionality of CVApi'], 200);
        else
            return response()->json(['message' => 'Looks like you have a problem to access CVApi. Please check your credentials!']);
            
    }
}
