<?php

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


//Route::get('/index', function () {
//    return view('project.index');
//});
//Route::get('/form-login','Prjectcontroller@formlogin');
//Route::get('/form',function (){
//  return view('project.form');
//});
//Route::get('/home-page',function (){
//  return view('project.home-page');
//});
//Route::get('/form-login',function (){
//  return view('project.form-login');
//});

//Route::get('/insert',function (){
//
//  DB::insert('insert into register(first_name,last_name,email,Password)
//  values (?,?,?,?)',['Um','chankreas','chankreasum@gmain.com','Kreas123']);
//
//});
//Route::get('/read',function (){
//  $read = DB::select('select *from register where id=?',[1]);
//  foreach ($read as $registers){
//    return $registers->first_name." ".$registers->last_name;
//  }
//});
//Route::get('/update',function (){
//  $update = DB::update('update register set first_name="Seth" where id = ?',[1]);
//  return $update;
//});


//use Illuminate\Routing\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/login','Prjectcontroller@insertdat');
Route::get('/login',function (){
  return view('project.login');
});
Route::post('/logins', "LoginController@formLogin");
Route::get('/home-page',function (){
  return view('project.home-page');
});
Route::post('/storedat','Prjectcontroller@store');
Route::get('/about-us',function (){
  return view('project.about-us');
});
Route::get('/get-start',function (){
  return view('header.get-start');
});
Route::get('/contact-us',function (){
  return view('project.contact-us');
});
Route::get('/menulink',function (){
  return view('header.menu');
});
//Route::get('/dropdown',function (){
//  return view('dropdown');
//});
Route::get('/ear',function (){
  return view('header/link-of-menu.ear');
});
Route::get('/eye',function (){
  return view('header/link-of-menu.eye');
});
Route::get('/navbar',function (){
  return view('header.navbar');
});
Route::get('/lostweight',function (){
  return view('header/link-of-menu.lostweight');
});
Route::get('/hair',function (){
  return view('header/link-of-menu.hair');
});
Route::get('/teeth',function (){
  return view('header/link-of-menu.teeth');
});
Route::get('/nail',function (){
  return view('header/link-of-menu.nail');
});
Route::get('/night-skin',function (){
  return view('header/link-of-menu.night-skin');
});
Route::get('/face',function (){
  return view('header/link-of-menu.face');
});
Route::get('/secret',function (){
  return view('header/link-of-menu.secret');
});
Route::get('/clearskin',function (){
  return view('header/link-of-menu.clearskin');
});
Route::get('/banana',function (){
  return view('header/link-of-menu.banana');
});
Route::get('/body-skin',function (){
  return view('header/link-of-menu.body-skin');
});
Route::get('/white',function (){
  return view('header/link-of-menu.white');
});
Route::get('/order-skin',function (){
  return view('header/link-of-menu.order-skin');
});
Route::get('/lip',function (){
  return view('header/link-of-menu.lip');
});
Route::get('/avocado',function (){
  return view('header/link-of-menu.avocado');
});
Route::get('/brow',function (){
  return view('header/link-of-menu.brow');
});
Route::get('/tomato',function (){
  return view('header/link-of-menu.tomato');
});
Route::get('/clearskin',function (){
  return view('header/link-of-menu.clearskin');
});
Route::get('/get', 'GetstartController@get');
Route::post('/start', 'GetstartController@start');
Route::post('/login', 'GetstartController@login')->name('user_login');
Route::get('/insert','contactController@insertform');
Route::post('/create','contactController@insert');

//
//

Route::get('/logout', function () {
  return view('header.get-start');
});
Route::get('/delete', 'GetstartController@logout');


Route::get('/index', function () {
  return view('index');
});
Route::get('/edit', function () {
  return view('edit');
});
Route::get('/creates', function () {
  return view('create');
});
Route::get('/show', function () {
  return view('show');
});
Route::get('/document', function () {
  return view('document');
});
Route::resource('/documents','PostController');

Route::get('/products', 'ProductController@index')->name('index');
Route::get('/products/{id}/show', 'ProductController@show')->name('show');
Route::get('/product/{id}/edit','ProductController@edit')->name('edit');
Route::get('/product/{id}/delete','ProductController@destroy')->name('destroy');
Route::get('/create','ProductController@create')->name('create');
Route::post('/create','ProductController@store')->name('store');
Route::post('/product/update','ProductController@update')->name('update');


