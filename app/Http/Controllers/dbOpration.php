<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class dbOpration extends Controller
{
    //
    function dbOprations(){

       $data=DB::table('login_datas')
       ->where('ID',3)
       ->update([
        
        'firstname'=>"das na das",
        'password'=>"mahant1933"

]
       );
    //    ->get();
       return view('queryBuilder',['data'=>$data]);
    }
}