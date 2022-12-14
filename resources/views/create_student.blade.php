@extends('dashboard')
@section('content') 
<form method="post"action="{{route('student.store')}}">
    @csrf
    <div class="form-group"><label for="ﬁrst_name">First Name:</label><br/><br/>
    <input type="text"class="form-control" name="ﬁrst_name"/><br/><br/>
</div>

<div class="form-group">
    <label for="ﬁrst_name">Last Name:</label><br/><br/>
    <input type="text" class="form-control" name="last_name"/><br/><br/>
</div>

<divclass="form-group">
    <label for="gender">Gender:</label><br/><br/>
         <select name="gender" id="gender" value="" class="form-select">  Select gender       
          <option value="male">Male</option>
          <option value="female">Female</option>
         </select><br/><br/>
</div>

<div class="form-group">
        <label for="email">Email:</label><br/><br/>
    <input type="text" class="form-control" name="email"/><br/><br/>
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
 <button type="submit"class="btn   btn-primary">Add</button>
 </form>
 @endsection
