<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\colaboradoresController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\portfoliosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

// Rota resourceful para as diferentes tabelas
Route::group(['prefix' => 'admin', 'middleware'=>['auth', 'verified']], function () {
    Route::resource('faq', FaqController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('colaboraodres', FaqController::class);
    Route::resource('portfolios', portfoliosController::class);
    Route::resource('users', UserController::class);

});

Route::group(['prefix' => 'admin'], function(){
	Auth::routes([ 'verify' => true]);
});




Route::get("/", [PageController::class, "index"])->name("wl.index");
Route::get("/faq", [FaqController::class, "faqs"])->name("wl.faq");
Route::get("/login", [PageController::class, "login"])->name("wl.login");
Route::get("/registo", [PageController::class, "registo"])->name("wl.registo");
Route::get("/perfil_de_utilizador", [PageController::class, "perfil_de_utilizador"])->name("wl.perfil_de_utilizador");
Route::get("/front_user_edit", [PageController::class, "front_user_edit"])->name("wl.front_user_edit");
Route::get("/services", [ServicesController::class, "services"])->name("wl.services");
Route::get("/portfolio", [portfoliosController::class, "portfolios"])->name("wl.portfolio");
Route::get('/contact-us',[ContactController::class,'contact'])->name("contact");
Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');



Route::get('/admin', [HomeController::class, 'index'])->name('admin');

Route::group(['middleware'=>['auth', 'verified']], function() {
	Route::get('/users/{user}/send_reactivate_mail',
	[UserController::class,'send_reactivate_email'])->name('users.sendActivationEmail'); 
});

//Route::get("/perfil_de_utilizador", [UserController::class, "users"])->name("wl.perfil_de_utilizador");