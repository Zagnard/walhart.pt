<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [PageController::class, "index"])->name("wl.index");
Route::get("/faq", [PageController::class, "faq"])->name("wl.faq");
Route::get("/login", [PageController::class, "login"])->name("wl.login");
Route::get("/registo", [PageController::class, "registo"])->name("wl.registo");
Route::get("/perfil_de_utilizador", [PageController::class, "perfil_de_utilizador"])->name("wl.perfil_de_utilizador");
Route::get("/front_user_edit", [PageController::class, "front_user_edit"])->name("wl.front_user_edit");