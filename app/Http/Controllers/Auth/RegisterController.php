<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\RegisterRequest;
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
    public function showRegistrationForm(){
        log::debug("dentro de show registration form");
        return view('auth/register');
    }
    /**/
    protected function validator(array $data)
    {
        log::debug("dentro de validator");
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $data)
    {
        log::debug("dentro de create");
        //log::debug($data);
        $validator=Validator::make($data->all(), [
            'email' => 'required|email:rfc,dns|unique:users,email',
                'username' => 'required|unique:users,username',
                'password1' => 'required|min:5',
                'password2' => 'required|same:password'
        ]);
        if($validator)
         User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'genero'=>$data['genero'],
            'fecha_nacimiento'=>$data['fecha'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect('/')->with('success', "Account successfully registered.");
     }
}
