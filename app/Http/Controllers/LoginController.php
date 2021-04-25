<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App;
use App\Staff;


class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $page = '/login';
        // $this->validate($request, [
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
        $emailRequest = $request->email;
        $passwordRequest = $request->password;
        $emailDb = DB::table('staff')->where('email', $emailRequest);

        if ($emailDb->value('email')) {
            $user = DB::table('users')->where('nikUser', $emailDb->value('nik'));
            if ($user->value('statusAkun') === "Aktif" && ($user->value('hakAkses') === "Admin" || $user->value('hakAkses') === "User")) {

                $passwordDb = DB::table('staff')->where('id', "{$emailDb->value('id')}")->value('password');
                if ($passwordDb === $passwordRequest) {
                    $page = '/';
                    $request->session()->put('nama',$emailDb->value('nama'));
                    $request->session()->put('hakAkses', $user->value('hakAkses'));
                }
            }
        }
        return redirect($page);
    }
}
