<?php

namespace App\Http\Controllers;

use App\Exports\PassengerExport;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;


class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('isLogin') && Session::get('role') == 'operator'){
            $data['passenger'] = Passenger::all(['username','nama_penumpang','alamat_penumpang','tanggal_lahir','jenis_kelamin','telepon','created_at']);

			return view('app.admin.passenger.index', $data);
		}else{
			return redirect("login")->withErrors('are not allowed to access');
		}
    }

    public function exportPDF() {

        $data['passenger'] = Passenger::all(['nama_penumpang','alamat_penumpang','tanggal_lahir','jenis_kelamin','telepon']);

        $pdf = PDF::loadView('app.admin.passenger.index', $data);

        return $pdf->download('data-penumpang.pdf');

    }

    public function exportXlsx()
    {
        return Excel::download(new PassengerExport, 'data-penumpang.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
