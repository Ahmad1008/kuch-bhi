<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form2;
class Form2Controller extends Controller
{
	public function index(){
    	return view('index');
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
}
