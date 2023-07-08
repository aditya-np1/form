<?php

namespace App\Http\Controllers;
2504.5000;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;
class students extends Controller
{
 function showdata()
 {
    $data= DB::table('students')->find('120');
   //  ->first();
    // $daataa =  student::all();
    return view('aggregate',['data'=>$data]);
  //  return $data;
 }
}