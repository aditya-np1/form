<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class employee extends Controller
{
    //
    function show(){
        return db::table('dependent')
        ->join('works_on','dependent.essn','=','works_on.essn')
        // ->select('relationship')
        ->where('dependent.dependent_name','=','Sam')
        ->get();
    }
}
