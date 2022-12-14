<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash; 
use Session;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }  

    public function login_process(Request $request)
    {
    $request->validate([
        'email' => 'required',
        'password' => 'required',
   ]);
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
       $user=Auth::User();
       Session::put('user', $user);
        return redirect()->intended('dashboard')
        ->withSuccess('Signed in');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {    
        $user=Session::get('user');
        return view('registration',compact('user'));
    }

    public function Registration_process(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    

    public function dashboard()
    {
        if(Auth::check()){
            $user=Session::get('user');
            return view('dashboard', compact('user'));
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
    
}
