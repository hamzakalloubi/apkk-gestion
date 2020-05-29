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

Route::get('/edit', function () {
    $remises = Remise::with('demande')->get();
    return view('remises.edit', ['remises'=>$remises]);
});
Route::get('/edit', function () {
    $retraits= Retrait::with('demande')->get();
    return view('retraits.edit', ['retraits'=>$retraits]);
});

Route::resource('/retraits', 'DemandeController');
Route::get('/retraits/{retrait}/{demande}/edit','DemandeController@edit')->name('retraits.edit');
Route::put('/retraits/{retrait}/{demande}/edit','DemandeController@update')->name('retraits.update');
Route::delete('/retraits/{retrait}/{demande}/edit','DemandeController@destroy')->name('retraits.destroy');



Route::resource('/remises', 'RemiseController');
Route::get('/remises/{remise}/{demande}/edit','RemiseController@edit')->name('remises.edit');
Route::put('/remises/{remise}/{demande}/edit','RemiseController@update')->name('remises.update');
Route::delete('/remises/{remise}/{demande}/edit','RemiseController@destroy')->name('remises.destroy');


Route::resource('/demandes', 'DemandeController');


