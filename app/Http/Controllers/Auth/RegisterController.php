<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct(Request $request)
     {
         $this->middleware('guest')->except('logout');
         $this->request = $request;
     }


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     /*
    protected $redirectTo = '/home';
    */

    public function redirectTo()
    {
        if ($this->request->has('previous')) {
            $this->redirectTo = $this->request->get('previous');
            return $this->redirectTo. '?msg=success';
        }

        return '/home';
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => User::DEFAULT_TYPE,
        ]);

        //envoi mail inscrit (mail bienvenue)
        Mail::send('mails.inscription-utilisateur', ['user' => $user], function($message) use ($user){
          $message->to($user->email, 'Bienvenue à Oschool !')->subject('Votre compte pour les cours en télé présentiel a été crée');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });

        //envoi mail admin (mail bienvenue)
        Mail::send('mailsAdmin.inscription-utilisateur', ['user' => $user], function($message) use ($user){
          $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Il y a un nouvel utilisateur sur Oschool Live !');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });

        return $user;

    }

}
