<?php

use Illuminate\Support\Facades\Route;
use App\Remise;
use App\Retrait;
use App\Demande;
use App\Mail\ValidMail;
use Illuminate\Support\Facades\Mail;

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
Route::get('/user/{id}', 'UserController@profile')->name('user.profile');
Route::get('/edit/user/', 'UserController@edit')->name('user.edit');
Route::post('/edit/user/', 'UserController@update')->name('user.update');
Route::get('/homeIn', function () {
    return view('homeIn');
});

Route::get('/passwordChange', function () {
    return view('layouts/passwordChange');
});
Route::get('/register2', function () {
    return view('layouts/register2');
});
Route::get('/login2', function () {
    return view('layouts/login2');
});
Route::get('/app', function () {
    return view('layouts.app');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/indexe', function () {
    return view('indexe');
});


Route::get('/edit', function () {
    $remises = Remise::with('demande')->get();
    return view('remises.edit', ['remises'=>$remises]);
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/email', function(){
    Mail::to('email@email.com')->send(new ValidMail());
    return new ValidMail();
});


Route::get('/tableRemise', function () {
        $remises = Remise::with('demande')->get();
        return view('remises.tableRemise', ['remises'=>$remises]);
    });


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

/*Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');*/


Route::middleware('can:IsAppogée')->group(function() {



    
    Route::resource('/remises', 'RemiseController');
    Route::post('/remises/{demande}/valid','RemiseController@valid')->name('remises.valid');
Route::put('/remises/{demande}/refuse','RemiseController@refuse')->name('remises.refuse');

});




Route::middleware('can:IsScolarité')->group(function() {

    Route::get('/FormRet', function () {
        return view('FormRet');
    });

    Route::get('/tableRetrait', function () {
        $retraits = Retrait::with('demande')->get();
        return view('retraits.tableRetrait', ['retraits'=>$retraits]);
    });



    Route::get('/edit', function () {
        $retraits= Retrait::with('demande')->get();
        return view('retraits.edit', ['retraits'=>$retraits]);
    });

    Route::resource('/demandes', 'DemandeController');
Route::resource('/retraits', 'DemandeController');
Route::get('/retraits/{retrait}/{demande}/edit','DemandeController@edit')->name('retraits.edit');
Route::put('/retraits/{retrait}/{demande}/edit','DemandeController@update')->name('retraits.update');
Route::delete('/retraits/{retrait}/{demande}/edit','DemandeController@destroy')->name('retraits.destroy');
Route::post('/retraits/{demande}/valid','DemandeController@valid')->name('retraits.valid');
Route::put('/retraits/{demande}/refuse','DemandeController@refuse')->name('retraits.refuse');




Route::resource('/remises', 'RemiseController');

Route::get('/remises/{remise}/{demande}/edit','RemiseController@edit')->name('remises.edit');
Route::put('/remises/{remise}/{demande}/edit','RemiseController@update')->name('remises.update');
Route::delete('/remises/{remise}/{demande}/edit','RemiseController@destroy')->name('remises.destroy');

});

Route::get('/edit/password/user/', 'UserController@passwordEdit')->name('password.edit');
Route::post('/edit/password/user/', 'UserController@passwordUpdate')->name('password.update');

