<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
   public function getdata(Request $data){
      $data->validate([
   'first_name'=>'required',
   'middle_name'=>'required',
   'last_name'=>'required',
   'password'=>'required','mobileno'=>'required',
    'adhar'=>'required',
    'password'=>'min:5 | ',
    'mobile no'=>'size:10'
   ]);
   $data->file('file')->store('adhar card');
   return $data->input();
   }
}