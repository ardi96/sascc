<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::group(['prefix' => 'sccadm'], function () {

    Route::get('login',function(){
        return view('auth1.login');
    })->name('scc-login');

    Route::group(['middleware'=>'scc-admin'],function(){

        Route::get('/tasks-list',function(){
            return view('tasks-list');
        })->name('scc-tasks');

        // Route::get('/ui-cards', [App\Http\Controllers\HomeController::class, 'index'])->name('scc-index');
        Route::get('/ui-cards', function(){
            return view('ui-cards');
        })->name('scc-ui-cards');

        Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('scc-index');

    });

});

