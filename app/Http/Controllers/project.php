<?php
namespace App\Http\Controllers; 
use App\laravel;
use Illuminate\Http\Request;
class project extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$laravel = laravel::orderby('', 'desc')->get();
return view('laravel.index',compact('laravel'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('laravel.create');
}
/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'title' => 'required',
'Department'=> 'required',
'Unit'=> 'required',
'Quantity'=> 'required',
'Vendor/Supplier'=> 'required',
'Rate'=> 'required',
'Quantity'=> 'required',
'Date'=> 'required',
'cost_code'=> 'required',
'Business'=> 'required',
'Cost_center'=> 'required',

]);
laravel::create($request->all());
return redirect()->route('laravel.index')
->with('success','laravel created successfully.');
}
/**
* Display the specified resource.
*
* @param \App\laravel $laravel
* @return \Illuminate\Http\Response
*/
public function show(laravel $laravel)
{
return view('laravel.show',compact('laravel'));
}
/**
* Show the form for editing the specified resource.
*
* @param \App\laravel $laravel
* @return \Illuminate\Http\Response
*/
public function edit(laravel $laravel)
{
return view('laravel.edit',compact('laravel'));
}
/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\laravel $laravel
* @return \Illuminate\Http\Response
*/
public function update(Request $request, laravel$laravel)
{
$request->validate([
    
    'Department'=> 'required',
    'Unit'=> 'required',
    'Quantity'=> 'required',
    'Vendor/Supplier'=> 'required',
    'Rate'=> 'required',
    'Quantity'=> 'required',
    'Date'=> 'required',
    'cost_code'=> 'required',
    'Business'=> 'required',
    'Cost_center'=> 'required',
]);
$laravel->update($request->all());
return redirect()->route('laravel.index')
->with('success','laravel updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param \App\laravel $laravel
* @return \Illuminate\Http\Response
*/
public function destroy(laravel $laravel)
{
$laravel->delete();
return redirect()->route('laravel.index')
->with('success','laravel deleted successfully');
}
}