<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash; 
use Session;
use App\Models\Student; 
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all();
        return view('students',compact('students'));
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
    public function store(Request $request) { 
        $request->validate(['ﬁrst_name'=>'required','last_name'=>'required',
        'gender'=>'required','email'=>'required','academic_year'=>'required'
        ]);
     $student=new Student;
     $student->ﬁrst_name=$request->get('ﬁrst_name');
     $student->last_name=$request->get('last_name');
     $student->gender=$request->get('gender');
     $student->email=$request->get('email');
     $student->academic_year=$request->get('academic_year');
     $student->save();
     return redirect()->intended('dashboard');
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
        $student= Student::ﬁnd($id);
        return view('edit_student',compact('student'));
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
        $request->validate(['ﬁrst_name'=>'required','last_name'=>'required',
        'gender'=>'required','email'=>'required','academic_year'=>'required']);
        $student=Student::ﬁnd($id);
        $student->ﬁrst_name=$request->get('ﬁrst_name'); 
        $student->last_name=$request->get('last_name');
        $student->gender=$request->get('gender');
        $student->email=$request->get('email');
        $student->academic_year=$request->get('academic_year');
        $student->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::ﬁnd($id);
        $student->delete();
    }
}
