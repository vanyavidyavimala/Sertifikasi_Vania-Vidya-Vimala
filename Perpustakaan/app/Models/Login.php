<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Login extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function isExist($username,$password){
            $check ="SELECT count(*) jumlah_ada FROM admin WHERE username= '".$username."' AND password='".$password."';";
            $hitung = DB::select($check);
            // dd($hitung[0]);
           if($hitung[0]->jumlah_ada == 1){
            return true;
           }else{
            return false;
           }
    }
}
