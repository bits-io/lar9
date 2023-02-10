<?php

namespace App\Http\Controllers;

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
        $check1 = Operator::where('username',$request->username)->exists();
        $get1 = Operator::where('username',$request->username)->first();

        $check2 = Passenger::where('username',$request->username)->exists();
        $get2 = Passenger::where('username',$request->username)->first();


        if ($check1) {
            if(Hash::check($request->password, $get1->password)){
                Session::put('user', $get1);
                Session::put('role', 'operator');
                Session::put('isLogin', true);
                return redirect()->intended('admin/dashboard')->withSuccess('Signed in');
            }
        }
        else if ($check2) {
            if(Hash::check($request->password, $get2->password)){
                Session::put('user', $get2);
                Session::put('role', 'passenger');
                Session::put('isLogin', true);
                return redirect()->intended('dashboard')->withSuccess('Signed in');
            }
        }
        return redirect("login")->withErrors('Login details are not valid');
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
        $check1 = Passenger::where('username',$request->username)->exists();
        $check2 = Operator::where('username',$request->username)->exists();

        if($check1 || $check2 ){
            return redirect('registration')->with('error', "Username sudah digunakan");
        }

        Passenger::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'nama_penumpang' => $request->nama_penumpang,
            'alamat_penumpang' => $request->alamat_penumpang,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'telepon' => $request->telepon,
        ]);

        return redirect("login")->with('success', 'Pendaftaran Berhasil');
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
        if(Session::has('isLogin') && Session::get('role') == 'operator'){
			return view('app.admin.dashboard');
		}else{
			return redirect("login")->withErrors('are not allowed to access');
		}

    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }


}
