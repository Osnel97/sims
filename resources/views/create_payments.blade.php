@extends('dashboard')
@section('content') 


<form method="post"action="{{route('payment.store')}}">
    @csrf
    <div class="form-group">
        <label for="payment_student">Payment Student:</label><br/><br/>
         <select name="payment_student" id="payment_student" value="" class="form-select">      
          <option value="" disabled selected>Select Student</option>
          @foreach($students as $student)  
          <option value="{{ $student->email}}">{{$student->ﬁrst_name,  $student->ﬁrst_name}}</option>
          @endforeach 
         </select><br/><br/>
</div>

<div class="form-group">
        <label for="payment_type">Payment Type:</label><br/><br/>
          <select name="payment_type" id="payment_type" value="" class="form-select">      
          <option value="" disabled selected>Select Payment:</option>
          <option value="School Fee">School Fee</option>
          <option value="Accomodation">Accomodation</option>
         </select><br/><br/>
</div>

<div class="form-group">
        <label for="email"> Payment Amount:</label><br/><br/>
    <input type="number" class="form-control" name="amount"/><br/><br/>
 </div>

 <div class="form-group">
        <label for="academic_year">Academic year:</label><br/><br/>
         <select name="academic_year" id="academic_year" value="" class="form-select">       
          <option value="" disabled selected>Select Academic year:</option>
          <option value="2020-2021">2020-2021</option>
          <option value="2021-2022">2021-2022</option>
         </select><br/>
</div>

 <br/>
 <input type="hidden" value="{{$user->email}}"  name="created_by"/>

 <button type="submit"class="btn   btn-primary">Add</button>
 </form>
 @endsection
