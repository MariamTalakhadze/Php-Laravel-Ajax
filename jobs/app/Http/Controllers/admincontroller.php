<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\about;

class admincontroller extends Controller
{
    public function index(){
        $str = about::all();
        return view('admin.index', compact('str'));
    }
    public function show(Request $request ,$id){
        $request->validate([
            'company_name'=>'required',
            'title'=>'required',
            'city'=>'required',
            'salary'=>'required',
            'category'=>'required',
            'email'=>'required',
            'isPublished'=>'required'
        ]);
        $die = about::find($id);
        $die->company_name= $request->input('company_name');
        $die->title= $request->input('title');
        $die->city= $request->input('city');
        $die->salary= $request->input('salary');
        $die->category= $request->input('category');
        $die->email= $request->input('email');
        $die->isPublished= $request->input('isPublished');
        $die->save();
        return redirect('/admin123');
    }
    public  function confirm(Request $request ,$id){
        $dd= about::find($id);
        $dd->isPublished=1;        
        $dd->save();
        return redirect('/admin123');
        
    }
    public  function edit(Request $request ,$id){
        $dd= about::find($id);
        return view('admin.update', compact('dd'));
        
    }
    public  function delete(Request $request ,$id){
        $dd= about::find($id);
        $dd->delete();    
        return redirect('/admin123');
        
    }
}
