<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Método para a página index
    public function index()
    {
        return view("index")->with("menuOption", "index");
    }
    // Método para a página faq
    public function faq()
    {
        return view("faq")->with("menuOption", "faq");
    }
    // Método para a página login
    public function login()
    {
        return view("login")->with("menuOption", "login");
    }
    // Método para a pagina registo
    public function registo() {
        return view("registo")->with("menuOption", "registo");
    }
}
