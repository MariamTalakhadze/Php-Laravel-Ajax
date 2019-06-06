<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\about;

class aboutcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
        return view('homepage.post');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name'=>'required',
            'title'=>'required',
            'description'=>'required',
            'city'=>'required',
            'salary'=>'required',
            'category'=>'required',
            'email'=>'required'
        ]);
        
        $about = new about();
        $about->company_name = $request->input('company_name');
        $about->title = $request->input('title');
        $about->description = $request->input('description');
        $about->city = $request->input('city');
        $about->salary =$request->input('salary');
        $about->category = $request->input('category');
        $about->email = $request->input('email');
        $about->deadline = $request->input('deadline');
        $file1= $request->file('checkue_pic');
        $file2= $request->file('company_logo');
        $ext1= $file1->getClientOriginalExtension();
        $ext2= $file2->getClientOriginalExtension();
        $file1name= time() ."-". $ext1; 
        $file2name= time() ."-". $ext2; 
        $file1->move('uploads/', $file1name);
        $file2->move('uploads/', $file2name);
        $about->company_logo = $file2name;
        $about->checkue_pic = $file1name;
        // $about->company_logo=$file2name;
        // $about->checkue_pic=$request->input('checkue_pic');     
        $about->save();
        return redirect('/post')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
