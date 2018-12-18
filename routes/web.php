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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/quiz', 'quizController@quiz');

Route::get('/new_quiz', 'quizController@new');

/*Route::get('/new_quiz', function () {
    return view('new_quiz');
});
*/

//Route::get('/home', 'testController@index');

Route::get('/home/{id}', 'testController@show');

Route::get('/teacher', 'TeacherController@index');

Route::get('/teacher/quiz', 'TeacherController@quiz');

Route::get('/teacher/about', 'TeacherController@about');

//Route::get('/teacher/')

Route::get('/tes', function () {
    return view('index');
});

Route::get('/kuis', function () {
    return view('kuis');
});

Route::get('/kwiz', function () {
    return view('Insert_kuis');
});

Route::get('/pizza', function () {
    return view('pizza');
});

Route::get('/single', function () {
    return view('single');
});
