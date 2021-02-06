<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolio=Portfolio::all();
        return view('portfolio.list', compact('portfolio'));
    }
}
