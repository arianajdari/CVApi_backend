<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class DemoController extends Controller
{

    public function getView()
    {
    	return view('live');
    }

    public function uploadPic(Request $request)
    {
    	if($request->has('file')) {
			$image = $request->file('file');
            $image_name = uniqid() . '.png';
            $image->move(storage_path() . '/app', $image_name);
    	}
    	return response()->json(['message' => $image_name]);
    }

    public function getImage($id)
    {
    	$file = Storage::disk('local')->get($id);
    	return new Response($file, 200); 
    }

    public function changePic(Request $request)
    {
    	$tempImagePath = '/home/vagrant/www/laravel_api/storage/app/';
    	$pythonPath = "cd /home/vagrant/www/laravel_api/python && python ";

    	$islem = $request->islem;
    	$id = $request->id;
    	$execution_script = $pythonPath . $islem. '.py ' . $tempImagePath . $id . ' ';
    	\Log::info($execution_script);
    	exec($execution_script);

    	$new_name = uniqid() . '.png';
    	rename("/home/vagrant/www/laravel_api/storage/app/".$id, "/home/vagrant/www/laravel_api/storage/app/" . $new_name);
    	File::delete($id);

    	return response()->json(['id' => $new_name], 200);
    }

    public function deleteImage(Request $request)
    {
        \Log::info($request->id);
        File::delete(storage_path() . '/app/' . $request->id);
    }

}
