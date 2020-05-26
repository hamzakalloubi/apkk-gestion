<?php

use Illuminate\Support\Facades\Route;
use App\Remise;
use App\Retrait;
use App\Demande;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/FormRet', function () {
    return view('FormRet');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/tableRemise', function () {
    $remises = Remise::with('demande')->get();
    return view('remises.tableRemise', ['remises'=>$remises]);
});

Route::get('/tableRetrait', function () {
    $retraits = Retrait::with('demande')->get();
    return view('retraits.tableRetrait', ['retraits'=>$retraits]);
});



Route::resource('/retraits', 'DemandeController')
       ->only(['index', 'show', 'create', 'store']);

Route::resource('/remises', 'RemiseController')
       ->only(['index', 'show', 'create', 'store']);


