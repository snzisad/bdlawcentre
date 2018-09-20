@extends("layout.adminpanellayout")

@section("title","Clients")

@section("content")

<div class="container">
	<form method="post" action="{{route('clients')}}" enctype="multipart/form-data">
    {{csrf_field()}}
		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
            <label for="name">Name</label><br>
            <input type="text" required autofocus class="form-control" name="name" placeholder="Enter Name">
        </div>
				<div class="form-group">
            <label for="picture">Picture</label><br>
            <input type="file" required autofocus  name="picture">
        </div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary ">Save</button>
	</form>

	<h3 class="text-light bg-dark" style="margin-top: 30px; padding: 5px; text-align: center;">Clients</h3>
	<table class="table"> 
      <thead class="thead-light">
        <tr>
          <th scope="col">Picture</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($clients as $client)
          <tr client_id="{{$client->id}}">
            <td>
              <img src="{{asset('picture/client/'.$client->picture)}}" width="60px" height="60px">
            </td>
            <td class="client_name">{{$client->name}}</td>
            <td>
              <a href="#" class="btn btn-primary btn-sm edit_client_button" data-toggle="modal" data-target=".edit-client-modal" style="margin-top: 2px;">Edit</a>
              <a href="{{asset('/clients/remove/'.$client->id)}}" class="btn btn-danger btn-sm" style="margin-top: 2px;">Delete</a>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>   
</div>

<!-- Edit Modal -->
<div class="modal fade edit-client-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form method="post" action="{{route('updateClient')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <input type="hidden" id="client_id" name="id">
          <div class="modal-header">
            <h5 class="modal-title">Edit Client</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">

          <div class="form-group">
              <label for="name">Name</label><br>
              <input type="text" class="form-control" id="client_name" required autofocus  name="name" placeholder="Enter Title">
          </div>
          <div class="form-group">
              <label for="picture">Picture (If you want to change current picture)</label><br>
              <input type="file" name="picture">
          </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
  </div>
</div>

@endsection