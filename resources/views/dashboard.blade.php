<!DOCTYPE html> 
<html>
 <head> 
 <title>SIMS</title>
<link href="{{ asset('../resources/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"> 
</head> 
<body> 
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color : #e3f2fd;"> 
<div class="container"> 
<a class="navbar-brand mr-auto" href="#">SIMS</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> 
<span class="navbar-toggler-icon"></span> </button> 
<div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav">
          @guest 
          <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}">Login</a> </li>
                 
          @else 
          <li class="nav-item"> <a class="nav-link" href="{{ route('registration') }}">Register User</a> </li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('student.create') }}">Create Student</a> </li>   
           <li class="nav-item"> <a class="nav-link" href="{{ route('students') }}">Students</a> </li>
           <li class="nav-item"> <a class="nav-link" href="{{ route('payments') }}">Payments</a> </li>  
           <li class="nav-item"> <a class="nav-link" href="{{ route('signout') }}">Logout</a> </li> 
           <li style="float:right" class="nav-item"> <a class="nav-link" href="#">{{$user->name}}</a> </li>      
 @endguest
 </ul> 
</div>
 </div>
 </nav>  
 @yield('content') 
</body> 
</html>
