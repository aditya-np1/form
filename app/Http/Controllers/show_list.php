<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login_data;

class show_list extends Controller
{
    //
   
   public function getData(){
      // $data = login_data::all();
        return view("showlist",['collection'=> login_data::all()]);
    }
    
    public  function dlt($id)
   {    
    //  $data=login_data::destroy($id);
    // $data->delete();
    
    // $dataa=login_data::find($ID);
    // echo $dataa;
    $data = login_data::where('ID','=', $id)->delete();
    echo $data;
    return redirect('/');
  }
  public  function viewData($id)
  {    
  
   $datas = login_data::find($id);

   return view('view',['data'=>$datas]);
 }
 public  function showData($id)
  {    
   $data = login_data::find($id);
   
   return view('edit',['data'=>$data]);
 }
public  function editData(Request $req)
  { 
   $id=$req->id;
   $flsh= $req->input('id');
    $data=login_data::find($id);
    $data->firstname = $req->first_name;
    $data->middlename= $req->middle_name;
    $data->lastname= $req->last_name;
    $data->password=$req->password;
    $data->mobileno = $req->mobileno;
    $data->email = $req->email;
    $data->adhar = $req->adhar;
    $data->address = $req->add;
    $data->feedback = $req->comment;
    $data->save();
    $req->session()->flash('id',$flsh);
    return redirect('/');

  // echo $data;
 }
}