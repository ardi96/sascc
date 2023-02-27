<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClientAdvanceController;
use App\Http\Controllers\ClientDocumentController;
use App\Models\ClientAdvance;

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



Route::middleware(['sccadmin'])->group(function(){
    Route::get('/sccadmin', function() { return View('scc.admin-index'); })->name('sccadmin');
    Route::resource('users', UserController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('clients',ClientController::class);
    Route::get('/clients-import',[ClientController::class,'showImportClientForm']);
    Route::post('/clients-import',[ClientController::class,'importClient'])->name('clients.import');
});


Route::middleware(['issccclient'])->group(function() {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

    // //Update User Details
    Route::get('/profile-update',[ClientController::class,'edit']);
    
    // Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
    
    Route::post('/update-profile/{id}', [App\Http\Controllers\ClientController::class, 'update'])->name('updateProfile');
    
    Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

    // //Language Translation
    Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

    // Route::get('/contacts', [ContactController::class,'index'])->name('contacts');

    Route::get('/contacts-profile', function(){ return View('contacts-profile');});

    Route::get('/documents',[ClientController::class,'showClientDocuments'])->name('client.documents');

    Route::post('/documents',[ClientController::class,'uploadClientDocument']);

    Route::post('/document-delete',[ClientDocumentController::class,'destroy'])->name('client-documents.destroy');

    Route::resource('advances',ClientAdvanceController::class);
    
    // Route::get('/advances',[ClientAdvanceController::class,'index'])->name('advances');

    Route::get('/index',[App\Http\Controllers\HomeController::class, 'index'])->name('index');

    // Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

});


