<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data )
    {
        $message = array(
            'name.required' => 'Il nome utente é obbligatorio',
            'name.string' => 'Il nome utente non ha un formato valido',
            'name.min' => 'Il nome utente deve avere almeno 5 caratteri',
            'name.max' => 'Il nome utente puó avere al massimo 255 caratteri',
            'name.regex' => 'Il nome utente puó contenere solo a-z, A-Z',
            'email.required' => 'L\'email é obbligatoria',
            'email.string' => 'L\'email non ha un formato valido',
            'email.email' => 'L\'email deve essere un email',
            'email.max' => 'L\'email puó avere al massimo 255 caratteri',
            'email.unique' => 'L\'email inserita é giá presente, inserisci una nuova email',
            'password.required' => 'La password é obbligatoria',
            'password.string' => 'La password non ha un formato valido',
            'password.min' => 'La password deve avere una lunghezza minima di 8 caratteri',
            'password.confirm' => 'La password deve essere confermata',
        );

        return Validator::make($data, [
            'name' => ['required', 'string', 'min:5','max:255', 'regex:/[a-zA-Z]/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], $message);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
