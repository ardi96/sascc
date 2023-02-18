<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

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


// /**
//  * Login Page for SCC Officer
//  */
// Route::get('/scc-login',function(){
//      return view('auth1.login');
// });


// Route::post('/scc-login',[App\Http\Controllers\Auth\SccLoginController::class,'login'])->name('scc-login');


// Route::get('/scc/index',function(){
//     return view('dashboard-job');
// })->name('scc-index');


/**
 * Group routing for external/public user
 */
Auth::routes();

Route::get('/contacts-profile', function(){ return View('contacts-profile');});

Route::middleware(['sccadmin'])->group(function(){
    Route::get('/sccadmin', function() { return View('scc.admin-index'); })->name('sccadmin');
    Route::resource('users', UserController::class);
});


Route::middleware(['issccclient'])->group(function() {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

    // //Update User Details
    Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

    // //Language Translation
    Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

    Route::get('/contacts', [ContactController::class,'index'])->name('contacts');

    // Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

});


