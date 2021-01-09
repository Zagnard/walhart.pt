<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Método para a página services
    public function services()
    {
        return view("services")->with("menuOption", "services");
    }
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

    // Método para a página de perfil de utilizador
    public function perfil_de_utilizador() {
        return view("perfil_de_utilizador")->with("menuOption", "perfil_de_utilizador");
    }

    // Método para a página de edição de dados pessoais de utilizador
    public function front_user_edit() {
        return view("front_user_edit")->with("menuOption", "front_user_edit");
    }

}
