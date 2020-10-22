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


Route::get('/home','MainController@index') -> name('page.home');
Route::get('/dashboard','MainController@dashboard') -> name('page.dashboard');


// FORM  MEMBER
Route::get('/member_form','MainController@member') -> name('page.member');
// FORM  MEMBER  -- INSERT
Route::post('/member_insert','MainController@insert') -> name('member.insert');


// FORM  RESEARCH  PROJECT
Route::get('/research_form','MainController@research') -> name('page.research');
// FORM  RESEARCH  PROJECT  -- INSERT
Route::post('/research_insert','MainController@insert') -> name('research.insert');


// FORM  PUBLISHED  JOURNAL
Route::get('/journal_form','MainController@journal') -> name('page.journal');
// FORM  PUBLISHED  JOURNAL  -- INSERT
Route::post('/journal_insert','MainController@insert') -> name('journal.insert');


// FORM  ULTILIZATION
Route::get('/util_form','MainController@util') -> name('page.util');
// FORM  ULTILIZATION  -- INSERT
Route::post('/util_insert','MainController@insert') -> name('util.insert');
