<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Método para a página index
    public function index() {
        return view("index")->with("menuOption", "index");
    }
    // Método para a página faq
    public function faq() {
        return view("faq")->with("menuOption", "faq");
    }
}
