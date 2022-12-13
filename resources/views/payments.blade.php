@extends('dashboard')
@section('content') 
  <table border="1px" class="table table-bordered">
    <thead>
        <tr>
            <td>ID</td>
             <td>Payment type</td>
             <td>Payment student</td>
             <td>Payment amount</td> 
             <td> Created by </td>
             <td> Academic year </td>
             <td > Delete </td>
             <td > Edit </td>                          
</tr></thead> <tbody>
     @foreach($Payments as $payment)
     <tr>
     <td>{{$payment->id}}</td>
     <td>{{$payment->payment_type}}</td>
     <td>{{$payment->payment_student}}</td>
     <td>{{$payment->amount}}</td>
     <td>{{$payment->created_by}}</td>
     <td>{{$payment->academic_year}}</td>

     <td>
          <form action="{{ route('payment.delete', $payment->id) }}" method="post">
          @csrf 
          <button class="btn btn-danger" type="submit">Delete</button>
          </form>
    </td>

<td > 
    <form action="{{ route('payment.edit', $payment->id) }}" method="post">
    @csrf
    <button class="btn btn-primary" type="submit">Edit</button>
</form>
</td>

</tr>
@endforeach 
</tbody> 
</table>
@endsection