<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_list()
    {
        $users = User::paginate(3);
        // dd($users->toArray());
        return view('Backend.Pages.Users.UserList', compact('users'));
    }

    public function user_create_form()
    {
        return view('Backend.Pages.Users.UserCreateForm');
    }

    public function user_store(Request $userRequest){
        // dd($userRequest->all());

        $fileName = null;
        if($userRequest->hasFile('user_image'))
        {
            $file = $userRequest->file('user_image');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/uploads', $fileName);
        }
        // dd($fileName);

        User::create([
            'user_id'=>$userRequest->user_id,
            'user_name'=>$userRequest->user_name,
            'role'=>$userRequest->role,
            'email'=>$userRequest->email,
            'user_password'=>bcrypt($userRequest->user_password),
            'user_image'=>$fileName
        ]);

        return redirect()->route('users.list');
    }
    public function loginForm()
    {
        return view('Backend.Pages.UserLogIn');
    }

    public function loginPost(Request $request)
    {
        $creadentials=$request->except('_token');
        // dd($creadentials);
        $login=auth()->attempt($creadentials);
        // dd($login);
        if($login){
            return redirect()->route('admin.master');
        }
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('admin.master');
    }

}
