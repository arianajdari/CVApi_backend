<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DemoController extends Controller
{

	protected $imagePath;
    protected $tempImagePath = '/home/vagrant/www/laravel_api/storage/app/';
    protected $pythonPath = "cd /home/vagrant/www/laravel_api/python && python ";

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

}
