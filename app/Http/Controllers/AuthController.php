<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Operator;
use App\Models\Passenger;
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

        if ($cek = Operator::where('username',$request->username)->first()) {
            if(Hash::check($request->username, $cek->password)){
                Session::put('user', $cek);
                Session::put('isLogin', true);
                return redirect()->intended('admin/dashboard')->withSuccess('Signed in');
            }
        }
        else if ($cek = Passenger::where('username',$request->username)->first()) {
            if(Hash::check($request->username, $cek->password)){
                return redirect()->intended('dashboard')
                            ->withSuccess('Signed in');
            }
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
            'nama_penumpang' => 'required',
            'alamat_penumpang' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'telepon' => 'required',
        ]);

        if(Passenger::where('username',$request->username)->first() || Passenger::where('username',$request->username)->first()){
            return redirect('login')->withErrors('Username sudah digunakan');
        }

        Passenger::create([
            'username' => $request->username,
            'password' => $request->password,
            'nama_penumpang' => $request->nama_penumpang,
            'alamat_penumpang' => $request->alamat_penumpang,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'telepon' => $request->telepon,
        ]);

        return redirect("login");
    }

    public function create(array $data)
    {
      return Operator::create([
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
