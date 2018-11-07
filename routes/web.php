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

use App\Notifications\Newinfo;
use App\Notifications\Newslack;

Route::get('/slack', function () {



$user = App\User::first();



$user->notify(new Newslack());



   echo "Juste une notif de oschool paths";



});

Route::get('/email', function () {

$user = App\User::first();

$user->notify(new Newinfo("A new user has visited on your application."));

   return view('homepage');

})->name('email');

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

Route::post('/progression', 'ProgressionController@progression')->name('progression');

Route::post('/notify', 'AchatController@notify')->name('notify');

/*
route pour les sessions ou classrooms
*/

Route::get('/valider/{progression}', 'ProgressionController@valider')->name('valider');

Route::get('/programme', 'ProgressionController@programme')->name('programme');

Route::get('/progression/{user}', 'ProgressionController@voir')->name('progression');

Route::resource('formations','FormationController');

Route::resource('categories','CategorieController');

Route::post('/inscription', 'UserController@inscription')->name('inscription');

Route::get('/inscrire/{user}', 'UserController@inscrire')->name('inscrire');

Route::get('/devweb', function () {
    return view('formations.parcours-dev-web');
})->name('devweb');

Route::get('/socialmedia', function () {
    return view('formations.social-media');
})->name('social-media');

Route::get('/webdesign', function () {
    return view('formations.web-design');
})->name('web-design');

Route::get('/trading', function () {
    return view('formations.trading');
})->name('trading');

Route::get('/frontend', function () {
    return view('formations.front-end');
})->name('front-end');

Route::get('/devmobile', function () {
    return view('formations.dev-mobile');
})->name('dev-mobile');

Route::get('/blog', function () {
    return view('formations.blog');
})->name('blog');

Route::get('/jeuxvideos', function () {
    return view('formations.jeux-videos');
})->name('jeux-videos');

Route::get('/android', function () {
    return view('formations.android');
})->name('android');

Route::get('/python', function () {
    return view('formations.python');
})->name('python');

Route::get('/cours', function () {
    return view('formations.cours');
})->name('cours');

Route::get('/ecoleprog', function () {
    return view('formations.ecoleprog');
});

Route::get('/ecolemarketing', function () {
    return view('formations.ecolemarketing');
});

Route::get('/ecolelang', function () {
    return view('formations.ecolelang');
});

Route::get('/ecolebusiness', function () {
    return view('formations.ecolebusiness');
});

Route::get('/ecoleai', function () {
    return view('formations.ecoleai');
});

Route::get('/ecoledatascience', function () {
    return view('formations.ecoledatascience');
});

Route::get('/factures', function () {
    return view('users.factures');
});


Route::get('/documentsTeacher', 'UserController@documentsTeacher')->name('documentsTeacher');

Route::get('/documentsStudent', 'UserController@documentsStudent')->name('documentsStudent');

Route::resource('projets','ProjetController');

Route::resource('etatprojets','EtatprojetController');

Route::resource('supportformations','SupportformationController');

Route::post('/mooc', function () {
    return redirect('https://oschool.ci/');
})->name('mooc');

Route::resource('achats','AchatController');
