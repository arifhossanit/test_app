<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_informations;
use App\Models\Marks;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student_registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $student= new Student_informations;
        $student->full_name=$req->full_name;
        $student->gender=$req->gender;
        $student->email=$req->email;
        $student->contact=$req->contact;
        $student->registration_no=$req->reg_no;
        $student->save();
        return redirect()->route('home')->with('status', 'Registration successful!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showMarkForm()
    {
        $data= Student_informations::select('registration_no')->get();
        return view('student_mark', compact('data'));

    }

    public function store(Request $req)
    {
        $student= new Marks;
        $student->registration_no=$req->reg_no;
        $student->subject=$req->subject;
        $student->mark=$req->mark;
        $student->save();
        return redirect()->route('create.mark')->with('status', 'Mark save successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        
        $data= Student_informations::where('registration_no', $req->reg_no)->first();
        $result= Marks::where('registration_no', $req->reg_no)->get();

        return view('student_mark_show', ['info'=>$data,'marks'=>$result]);
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
