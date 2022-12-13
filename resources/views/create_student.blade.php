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
        <label for="email">Academic year:</label><br/><br/>
    <input type="text" class="form-control" name="academic_year"/><br/><br/>
 </div>
 
 <br/>
 <button type="submit"class="btn   btn-primary">Add</button>
 </form>
 @endsection
