@extends("layout.adminpanellayout")

@section("title","Bookings")

@section("content")

<div class="container">
	<h3 class="text-light bg-dark" style="margin-top: 30px; padding: 5px; text-align: center;">Bookings</h3>
	<table class="table"> 
      <thead class="thead-light">
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Message</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($results as $result)
          <tr >
            <td>{{ date("d-m-Y", strtotime($result->visit_date)) }}</td>
            <td>{{$result->user_name}}</td>
            <td>{{$result->user_email}}</td>
            <td>{{$result->phone}}</td>
            <td>{{$result->message}}</td>
            <td>
              <a href="{{ route('booking_remove' , [$result->id] ) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm" style="margin-top: 2px;">Delete</a>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>   
</div>

@endsection