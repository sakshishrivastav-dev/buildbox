<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Users;
use App\Models\Admin_login;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //

    public function index(){

        return view('admin/index');
    }


        public function admin_profile(){
            $adminlogin = Admin_login::find(1);
            return view('admin/profile', compact('adminlogin'));
        }


      public function profileaction(Request $request){
            
            $validated = $request->validate([
                'email' => 'required',
                'password' => 'required',
                'username' => 'required',

            ]);
               
                Admin_login::where('id','1')->update([
                              'email' =>$request->email,
                              'password' =>$request->password,
                              'hashed_passowrd' =>md5($request->password),
                              'username' =>$request->username,

                ]);

                    return redirect('/admin')->with('success', 'Profile updated successfully');
              

    }

    public function logout(){
        echo "sakshi";
    }
}



