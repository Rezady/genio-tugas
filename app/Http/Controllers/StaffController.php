<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App;
use App\Staff;
use App\Users;



class StaffController extends Controller
{

    function index(Request $request)
    {
        if($request->session()->has('nama')){
			$hakAksesUser = $request->session()->get('hakAkses');
            $namaStaff = $request->session()->get('nama');
            $staff = Staff::all();
            return view('/staff/staff', ['staff' => $staff, 'hakAksesUser' => $hakAksesUser, 'namaStaff' => $namaStaff]);

		}else{
			return redirect('/login');
		}
       
    }

    function inputStaff(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'password' => 'required'

        ]);

        $staff = Staff::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'password' => $request->password
        ]);
        return redirect('/');
    }

    function updateStaff($id, Request $request)
    {

        $staff = Staff::all()->find($id);
        $staff->nik = $request->nik;
        $staff->nama = $request->nama;
        $staff->email = $request->email;
        $staff->telepon = $request->telepon;
        $staff->save();

        return redirect('/');
    }

    function deleteStaff($id)
    {
        $staff = Staff::all()->find($id);
        $staff->delete();

        return redirect('/');
    }
}
