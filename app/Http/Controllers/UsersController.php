<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Users;
use App\Staff;


class UsersController extends Controller
{
    function index(Request $request)
    {
        $hakAksesUser = $request->session()->get('hakAkses');
        $namaStaff = $request->session()->get('nama');
        $user = Users::all();
        return view('/user/user', ['user' => $user, 'hakAksesUser' => $hakAksesUser, 'namaStaff' => $namaStaff]);
    }

    function inputUser(Request $request)
    {
        $this->validate($request, [
            'nikUser' => 'required',
            'hakAkses' => 'required',
            'statusAkun' => 'required',
        ]);

        $user = Users::create([
            'nikUser' => $request->nikUser,
            'hakAkses' => $request->hakAkses,
            'statusAkun' => $request->statusAkun,

        ]);
        return redirect('/user');
    }

    function updateUser($id, Request $request)
    {
        $user = Users::all()->find($id);
        $user->nikUser = $request->nikUser;
        $user->hakAkses = $request->hakAkses;
        $user->statusAkun = $request->statusAkun;
        $user->save();

        return redirect('/user');
    }

    function deleteUser($id)
    {
        $user = Users::all()->find($id);
        $user->delete();

        return redirect('/user');
    }
}
