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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home','MinController@index') -> name('page.home');
Route::get('/dashboard','MinController@dashboard') -> name('page.dashboard');


// FORM -> person_form
Route::get('/member_form','MinController@member') -> name('page.member');
// INSERT form -> person_form
Route::post('/person_form_post','MinController@insert') -> name('person_form.insert');
