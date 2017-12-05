<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documentation;

class DashboardController extends Controller
{
    public function getDashboard()
    {
    	return view('dashboard');
    }

    public function getDocumentation($id)
    {

    	$data = Documentation::where('id', $id)->get();

    	return view('documentation')->with(['data' => $data]);
    }
}
