<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($cek = Admin::where('username',$request->username)->first()) {
            if(Hash::check($request->username, $cek->password)){
                Session::put('user', $cek);
                Session::put('isLogin', true);
                return redirect()->intended('admin/dashboard')->withSuccess('Signed in');
            }
        }
        // else if ($cek = Penumpang::where('username',$request->username)->first()) {
        //     if(Hash::check($request->username, $cek->password)){
        //         return redirect()->intended('dashboard')
        //                     ->withSuccess('Signed in');
        //     }
        // }
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'nama_petugas' => 'required',
            'username' => 'required',
            'password' => 'required|min:6',
            'level' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard");
    }

    public function create(array $data)
    {
      return Admin::create([
        'nama_petugas' => $data['nama_petugas'],
        'username' => $data['username'],
        'password' => Hash::make($data['password']),
        'id_level' => $data['level']
      ]);
    }


    public function dashboard()
    {
        if(Session::has('isLogin')){
			return view('app.admin.dashboard');
		}else{
			return redirect("login")->withSuccess('are not allowed to access');
		}

    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }


}
