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
        //$this->middleware('guest');
        //$this->middleware('auth'); 
        
    }
    public function showRegistrationForm(){
        return view('auth/register');
    }
    /**/
    protected function validator(array $data)
    {
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
        log::debug($data);
        $validator=Validator::make($data->all(), [
            'email' => 'required|unique:users,email',
                'name' => 'required|unique:users,username',
                'password1' => 'required|min:5',
                'password2' => 'required|same:password1',
                'rol' => 'required|exists:roles,name',
        ])->validate();
        try{
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' =>$data['password'],
                'rol'=>$data['rol']
            ]);
            return response()->json([$data->all()]);
        }catch (\Throwable $th) {
            throw $th;
        }
    }
}
