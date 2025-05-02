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

        return view('admin/profile');
    }

      public function profileaction(Request $request){
        
            // Admin_login::create([
            //     'email' => $request->email,
            //     'password' => $request->email,
            //     'hashed_passowrd' => md5($request->email),
            //     'username' => $request->username,
            // ]);


        // DB::table('admin_logins')->insert([
        //         'email' => $request->email,
        //         'password' => $request->email,
        //         'hashed_passowrd' => md5($request->email),
        //         'username' => $request->username,

        //         ]);
    

                Admin_login::where('id','1')->update([
                              'email' =>'sakshi@gmail.com'
                ]);
                // DB::table('admin_logins')->where('id','1')->update([
          
                // ]);

    }

    public function logout(){
        echo "sakshi";
    }
}



