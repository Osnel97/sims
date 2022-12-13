@extends('dashboard')
@section('content') 
  <table border="1px" class="table table-bordered">
    <thead>
        <tr>
            <td>ID</td>
             <td>First Name</td>
             <td>Last Name</td>
            <td>Gender</td> 
            <td> Email </td>
            <td> Academic year </td>
            <td > Delete </td>
            <td > Edit </td>
</tr></thead> <tbody>
     @foreach($students as $student)
     <tr>
     <td>{{$student->id}}</td>
     <td>{{$student->ﬁrst_name}}</td>
     <td>{{$student->last_name}}</td>
     <td>{{$student->gender}}</td>
     <td>{{$student->email}}</td>
     <td>{{$student->academic_year}}</td>

     <td>
          <form action="{{ route('student.delete', $student->id) }}" method="post">
          @csrf 
          <button class="btn btn-danger" type="submit">Delete</button>
          </form>
    </td>

<td > 
    <form action="{{ route('student.edit', $student->id) }}" method="post">
    @csrf
    <button class="btn btn-primary" type="submit">Edit</button>
</form>
</td>

</tr>
@endforeach 
</tbody> 
</table>
@endsection