<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form1;
use App\Form2;
use App\Form3;
class IndexController extends Controller
{
    public function index(){
    	return view('index');
    }
    public function insert(Request $request){
    	$obj=new Form1;
    	$obj->name=$request->name;
    	$obj->email=$request->email;
    	$obj->category=$request->category;
    	$obj->message=$request->message;
    	$obj->save();
    	return redirect()->back();
    }
     public function insert2(Request $request){
    	$obj=new Form2;
    	$obj->name=$request->name;
    	$obj->email=$request->email;
    	$obj->category=$request->category;
    	$obj->message=$request->message;
    	$obj->save();
    	return redirect()->back();
    }
    

  public function insert3(Request $request){
    	$obj=new Form3;
    	$obj->uname=$request->name;
    	$obj->emailaddress=$request->email;
    	$obj->categories=$request->category;
    	$obj->messagess=$request->message;
    	$obj->save();
    	return redirect()->back();
    }


}