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

Route::get('/', 'UserController@accueil');

Route::get('/online', function () {
    return view('online');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
Route::get('register', function () {
    return view('accueil');
});  */


Route::get('/classrooms', 'HomeController@classrooms');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/teacher', 'TeacherController@teacher')
    ->middleware('is_teacher')
    ->name('teacher');


Route::resource('users','UserController');

Route::resource('classrooms','ClassroomController');

Route::resource('progressions','ProgressionController');

Route::resource('achats','AchatController');

Route::post('/envoi', 'AchatController@envoi')->name('envoi');

Route::post('/notify', 'AchatController@notify')->name('notify');

Route::get('/valider/{progression}', 'ProgressionController@valider')->name('valider');

Route::get('/programme', 'ProgressionController@programme')->name('programme');

Route::get('/progression/{user}', 'ProgressionController@voir')->name('progression');

Route::resource('formations','FormationController');

Route::resource('categories','CategorieController');

Route::post('/inscription', 'UserController@inscription')->name('inscription');

Route::get('/inscrire/{user}', 'UserController@inscrire')->name('inscrire');

Route::get('/devweb', function () {
    return view('formations.dev-web');
})->name('devweb');

Route::get('/cours', function () {
    return view('formations.cours');
})->name('cours');


Route::get('/documents', 'UserController@documents')->name('documents');
