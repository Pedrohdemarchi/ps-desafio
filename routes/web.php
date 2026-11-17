<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ObraEntregueController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ShowcaseController;
use App\Http\Controllers\SiteController;

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

//Rota para o Site

Route::get('Home', [SiteController::class, 'index'])->name('Home');
Route::get('Sobre-Nos', [SiteController::class, 'sobre'])->name('SobreNos');
Route::get('Portifólio', [SiteController::class, 'portifolio'])->name('Portifolio');
Route::get('Contato', [SiteController::class, 'contato'])->name('Contato');
Route::redirect('/', '/Home');

Route::middleware('locale')->group(function () {

    Route::put('/locale', [LocaleController::class, 'setLocale'])->name('locale');

    Auth::routes();

    Route::middleware('auth')->group(function () {

        //Rota para dashboard
        Route::any('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        //Rotas para log
        Route::any('log', [LogController::class, 'index'])->name('log.index');

        //Rotas para CRUD usuário
        Route::resource('user', UserController::class, ['except' => ['show']]);
        Route::resource('categoria', CategoriaController::class, ['except' => ['show']]);
        Route::resource('produto', ProdutoController::class);
        Route::resource('showcase', ShowcaseController::class);
        Route::resource('feedback', FeedbackController::class, ['except' => ['show']]);
        Route::resource('obras-entregues', ObraEntregueController::class, ['except' => ['show']]);


        //Rotas para perfil do usuário
        Route::controller(ProfileController::class)->name('profile.')->group(function () {
            Route::get('profile', 'edit')->name('edit');
            Route::put('profile', 'update')->name('update');
            Route::put('profile/password', 'password')->name('password');
        });
    });
});
