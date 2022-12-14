<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash; 
use Session;
use App\Models\Payments; 
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $user=Session::get('user');
        $Payments=Payments::all();
        return view('payments',compact('Payments','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=Session::get('user');
        $students=Student::all();
        return view('create_payments',compact('students','user'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  
    {
        $request->validate(['payment_type'=>'required','payment_student'=>'required',
        'amount'=>'required','created_by'=>'required','academic_year'=>'required'
        ]);
     $payment=new Payments;
     $payment->payment_type=$request->get('payment_type');
     $payment->payment_student=$request->get('payment_student');
     $payment->amount=$request->get('amount');
     $payment->created_by=$request->get('created_by');
     $payment->academic_year=$request->get('academic_year');
     $payment->save();
     return redirect()->intended('payments');
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
        $payment=Payments::find($id);
        $payment->delete();
        return redirect()->intended('payments');
    }
}
