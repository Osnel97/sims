@extends('dashboard')
@section('content')
 <form method="Post" action="{{route('student.update',$student->id)}}">
      @csrf
      <div class="form-group">
        <label for="ﬁrst_name">First Name:</label><br/><br/>
        <input type="text" class="form-control" name="ﬁrst_name" value={{$student->ﬁrst_name}}><br/><br/>
    </div>  <div class="form-group">
        <label for="ﬁrst_name">Last Name:</label><br/><br/>
        <input type="text" class="form-control" name="last_name" value={{$student->last_name}}><br/><br/>
   </div>  <div class="form-group">
        <label for="gender">Gender:</label><br/><br/>
        <input type="text" class="form-control" name="gender" value={{$student->gender}}><br/><br/>
  </div>
<div class="form-group">
    <labelfor="qualiﬁcations">Email:</label><br/><br/>
    <input type="email" class="form-control" name="email" value={{$student->email}}><br/> <br/>
</div>

</div>  <div class="form-group">
        <label for="gender">Academic Year:</label><br/><br/>
        <input type="text" class="form-control" name="academic_year" value={{$student->academic_year}}><br/><br/>
  </div>
  
  <br/><button type="submit" class="btn btn-primary">Update</button></form>
@endsection