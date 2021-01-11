<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $services=Services::all();
        return view('services.list', compact('services'));
    }
}
