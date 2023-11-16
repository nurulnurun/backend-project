<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_list()
    {
        return view('Backend.Pages.Users.UserList');
    }
    public function loginForm()
    {
        return view('Backend.Pages.UserLogIn');
    }

    public function loginPost(Request $request)
    {
        $filter=$request->except('_token');
        //dd($filter);
        $login=auth()->attempt($filter);
        if($login){
            return redirect()->route('admin.master');
        }
        return redirect()->back();
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('admin.Login');
    }

}
