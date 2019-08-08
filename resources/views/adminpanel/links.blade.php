@extends("layout.adminpanellayout")

@section("title","Links")

@section("content")

<div class="container">
	<form method="post" action="{{route('links')}}">
    {{csrf_field()}}
		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
            <label for="link">Link</label><br>
            <input type="text" class="form-control" required autofocus name="link" placeholder="e.g. http://banglasofttech.com">
        </div>
      </div>
		</div>
		<button type="submit" class="btn btn-primary ">Add</button>
	</form>

	<h3 class="text-light bg-dark" style="margin-top: 30px; padding: 5px; text-align: center;">All Links</h3>

  <div class="row">
    <div class="col-lg-6">
      <table class="table"> 
          <thead class="thead-light">
            <tr>
              <th scope="col">Link</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @for($i = 0; $i < count($links); $i=$i+2)
              <tr link_id="{{$links[$i]->id}}">
                <td class="link_title">{{$links[$i]->link}}</td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm edit_link_button" data-toggle="modal" data-target=".edit-link-modal" style="margin-top: 2px;">Edit</a>
                  <a href="{{asset('/links/remove/'.$links[$i]->id)}}" class="btn btn-danger btn-sm" style="margin-top: 2px;">Delete</a>
                </td>
              </tr>
            @endfor

          </tbody>
      </table>   
    </div>
    <div class="col-lg-6">
      <table class="table"> 
          <thead class="thead-light">
            <tr>
              <th scope="col">Link</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @for($i = 1; $i < count($links); $i=$i+2)
              <tr link_id="{{$links[$i]->id}}">
                <td class="link_title">{{$links[$i]->link}}</td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm edit_link_button" data-toggle="modal" data-target=".edit-link-modal" style="margin-top: 2px;">Edit</a>
                  <a href="{{asset('/links/remove/'.$links[$i]->id)}}" class="btn btn-danger btn-sm" style="margin-top: 2px;">Delete</a>
                </td>
              </tr>
            @endfor

          </tbody>
      </table>   
    </div>
  </div>
</div>


<!-- Edit Modal -->
<div class="modal fade edit-link-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form method="post" action="{{route('updateLink')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <input type="hidden" id="link_id" name="id">
          <div class="modal-header">
            <h5 class="modal-title">Edit Link</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">

          <div class="form-group">
              <label for="link">Link</label><br>
              <input type="text" class="form-control" id="link_title" required autofocus  name="link" placeholder="Enter Link">
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