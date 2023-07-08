<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login_data;
class login_datas extends Controller
{
    //
    function addData(Request $req)
    {
        $data = $req->input('mobileno');
        $req->validate([
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'password'=>'required','mobileno'=>'required',
             'adhar'=>'required',
             'password'=>'min:5',
             'mobile no'=>'size:10'
            ]);
          
        $login_data = new login_data;
        $login_data->firstname=$req->first_name;
        $login_data->middlename= $req->middle_name;
        $login_data->lastname= $req->last_name;
        $login_data->password=$req->password;
        $login_data->mobileno = $req->mobileno;
        $login_data->email = $req->email;
        $login_data->adhar = $req->adhar;
        $login_data->address = $req->add;
        $login_data->feedback = $req->comment;
        $login_data->save();
        $req->session()->flash('mobileno',$data);
        
        return redirect('login');

    }
}
// CREATE TABLE `login_datas` (
//     firstname varchar(100),
//         middlename varchar(100),
//         lastname varchar(100),
//         password varchar(10),
//         email varchar(50),
//         feedback text(1000),
//         comment varchar(500),
//         adhar bigint,
//         adds varchar(1000),
//         mobileno int(15)
//     );