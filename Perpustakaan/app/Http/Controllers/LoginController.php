<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Session;

class LoginController extends Controller
{
    //function untuk page login//
    public function masuk(Request $input){
        $username= $input-> input('username');
        $password= $input-> input('password');

        $model= new Login;
        $cek= $model->isExist($username, $password);
        //jika data benar//
        if($cek == true){
            Session::put('username',$username);
            Session::put('password',$password);
            return redirect('/dashboard');
        }
        //jika username dan password salah//
        else{
            return redirect('/');
        }
    }
}
