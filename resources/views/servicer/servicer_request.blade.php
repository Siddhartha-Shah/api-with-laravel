<html>
    <head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
                body{
        margin:0px;
    }
    

    .navbar{
        width:100%;
        height:8vh;
        background-color:orange;
        display:flex;
        align-items:center;
        justify-content:space-between;
    }
        </style>
    </head>

    <body>
    <div class="container">
        <div class="navbar">
           <h2 style="margin-left:2%;">Home Service Nepal</h2>
           @include('servicer.navbar') 
    </div>

    @foreach($bookings as $booking )
<div class="card text-center">
  <div class="card-header">
  <p class="card-text">From: {{$booking->customer_address}}</p>
  </div>
  <div class="card-body" style="display:flex;justify-content:space-around;">
    <h5 class="card-title">{{$booking->customer_name}}</h5>
   
    <p class="card-text">Contact: {{$booking->customer_number}}</p>
    <p class="card-text">Email: {{$booking->customer_email}}</p>

    @if($booking->action=="requested")
    <a href={{ url('/acceptBookingAction',[$booking->booking_id]) }} class="btn btn-primary">Accept</a>
    <a href={{ url('/rejectBookingAction', [$booking->booking_id]) }} class="btn btn-danger">Reject</a>
    @elseif($booking->action=="accepted")
    <p>Booking Accepted</p>
    @else
    <p>Booking Cancelled</p>
    @endif
 
  </div>
</div>
@endforeach

    </div>
   


    

    </body>
</html>