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



Route::get('/import', 'ImportController@getImport')->name('import');
Route::post('/import_parse', 'ImportController@parseImport')->name('import_parse');
Route::post('/import_process', 'ImportController@processImport')->name('import_process');


Route::get('/', 'HomeController@racine')->name('accueil');

Route::get('/paypalstatus', 'HomeController@dashboard');



/*route pour la recherche avec ajax des users*/

Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');


Route::post('/merci', function () {
    return view('merci');
});

Route::post('paypal', 'PaymentController@payWithpaypal')->name('payWithpaypal');
Route::get('status', 'PaymentController@getPaymentStatus')->name('status');



Route::get('/castaing', function () {
    return view('formations.template-castaing');
});

Route::get('/cefiat', function () {
    return view('formations.template-cefiat');
});

Route::get('/esma', function () {
    return view('formations.template-esma');
});

Route::get('/etep', function () {
    return view('formations.template-etep');
});

Route::get('/epcci', function () {
    return view('formations.template-epcci');
});

Route::get('/esatic', function () {
    return view('formations.template-esatic');
});

Route::get('/ensit', function () {
    return view('formations.template-ensit');
});






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

Route::get('/default', 'UserController@default');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/teacher', 'TeacherController@teacher')
    ->middleware('is_teacher')
    ->name('teacher');

Route::get('/partner', 'PartnerController@partner')
    ->middleware('is_partner')
    ->name('partner');


Route::resource('users','UserController');

Route::resource('emails','EmailController');

Route::resource('etatprogressions','EtatprogressionController');

Route::resource('classrooms','ClassroomController');

Route::resource('progressions','ProgressionController');

Route::resource('achats','AchatController');

Route::resource('offers','OfferController');

Route::resource('characteristics','CharacteristicController');

Route::post('/envoi', 'AchatController@envoi')->name('envoi');

Route::post('/envoiRenew', 'AchatController@envoiRenew');

Route::post('renew', 'AchatController@renew');

Route::post('/progression', 'ProgressionController@progression')->name('progression');

Route::post('/formation', 'FormationController@formation')->name('formation');

Route::post('/notify', 'AchatController@notify')->name('notify');

/*
route pour les sessions ou classrooms
*/

Route::get('/valider/{etatprogression}', 'EtatprogressionController@valider')->name('valider');

Route::get('/programme', 'ProgressionController@programme')->name('programme');

Route::get('/progression/{user}', 'ProgressionController@voir')->name('progression');

Route::resource('formations','FormationController');

Route::get('/formation/{slug}', 'FormationController@showSlug')->name('formation.slug');

Route::get('/category/{slug}', 'CategoryController@showSlug')->name('category.slug');

Route::resource('partners','PartnerController');

Route::resource('languages','LanguageController');

Route::resource('prerequisites','PrerequisiteController');

Route::resource('categories','CategoryController');

Route::resource('guides','GuideController');

Route::resource('guideprojets','GuideprojetController');

Route::get('/projects/{formation}', 'FormationController@projects')->name('projects');

Route::post('/inscription', 'UserController@inscription')->name('inscription');

Route::get('/inscrire/{user}', 'UserController@inscrire')->name('inscrire');

Route::get('/mes-etudiants', 'UserController@mesEtudiants')->name('mes-etudiants');

Route::get('/devweb', function () {
    return view('formations.parcours-dev-web');
})->name('devweb');

Route::get('/devweb2', function () {
    return view('formations.parcours-dev-web2');
})->name('devweb2');

Route::get('/facebook-marketing', function () {
    return view('formations.parcours-facebook-marketing');
})->name('facebook-marketing');

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

Route::get('/devmobile', function () {
    return view('formations.dev-mobile');
})->name('dev-mobile');

Route::get('/community-management', function () {
    return view('formations.parcours-community-management');
})->name('community-management');

Route::get('/blog', function () {
    return view('formations.blog');
})->name('blog');

Route::get('/jeuxvideos', function () {
    return view('formations.parcours-jv');
})->name('jeux-videos');

Route::get('/android', function () {
    return view('formations.parcours-android');
})->name('android');

Route::get('/after-effects', function () {
    return view('formations.after-effects');
})->name('android');
Route::get('/anglais', function () {
    return view('formations.parcours-anglais');
})->name('anglais');

Route::get('/photoshop', function () {
    return view('formations.parcours-photoshop');
})->name('photoshop');

Route::get('/after-effects', function () {
    return view('formations.parcours-after-effects');
})->name('photoshop');

Route::get('/kali-linux', function () {
    return view('formations.parcours-kali-linux');
})->name('kali-linux');

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

//voir facturation pour les teachers

Route::get('/factures', 'UserController@factures');

Route::post('/moisFactures', 'UserController@moisFactures');

Route::get('/settings', 'UserController@settings');

//voir facturation pour les admins

Route::get('/paiements', 'UserController@paiements')->name('paiements');

Route::post('/moisPaiements', 'UserController@moisPaiements');

Route::post('/formationpaiement', 'FormationController@formationpaiement')->name('paiement-par-formation');

//voir les sessions mensuelles des profs pour les admins

Route::get('/rapportProf', 'UserController@rapportProf');

Route::post('/rapportMoisProf', 'UserController@rapportMoisProf');


Route::get('/documentsTeacher', 'UserController@documentsTeacher')->name('documentsTeacher');

Route::get('/documentsStudent', 'UserController@documentsStudent')->name('documentsStudent');

Route::resource('projets','ProjetController');

Route::resource('etatprojets','EtatprojetController');

Route::resource('supportformations','SupportformationController');

Route::resource('achats','AchatController');

Route::post('/ajout-achat', 'AchatController@achat')->name('ajout-achat');

/* pour les entreprises*/

Route::get('/entreprise', function () {
    return view('formations.entreprise');
});

Route::get('/entreprise2', function () {
    return view('formations.entreprise2');
});


//pour retrouver la page profil user

Route::get('/dashboard-teacher', 'HomeController@dashboardT')->name('dashboard');

Route::get('/dashboard-admin', 'HomeController@dashboardA')->name('dashboard');

Route::get('/dashboard-default', 'HomeController@dashboard')->name('dashboard');

//pour mettre à jour le statut des abonnés

Route::get('/statutCheck', 'UserController@statutCheck')->name('statutCheck');
