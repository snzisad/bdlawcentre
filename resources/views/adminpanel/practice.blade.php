@extends("layout.adminpanellayout")

@section("title","Practices")

@section("content")

<div class="container">
	<form method="post" action="{{route('practices')}}" enctype="multipart/form-data">
    {{csrf_field()}}
		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
            <label for="title">Title</label><br>
            <input type="text" required autofocus class="form-control" name="title" placeholder="Enter Title">
        </div>
				<div class="form-group">
            <label for="description">Description</label><br>
            <Textarea class="form-control" required autofocus name="description" placeholder="Enter Description" style="height: 100px;"></Textarea>
        </div>
        <div class="form-group">
            <label for="picture">Picture</label><br>
            <input type="file" required autofocus name="picture">
        </div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary ">Save</button>
	</form>

	<h3 class="text-light bg-dark" style="margin-top: 30px; padding: 5px; text-align: center;">All Practices</h3>
	<table class="table"> 
      <thead class="thead-light">
        <tr>
          <th scope="col">Picture</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

      	@foreach($practices as $practice)
          <tr practice_id="{{$practice->id}}">
            <td>
              <img src="{{asset('picture/practice/'.$practice->picture)}}" width="150px" height="100px">
            </td>
            <td class="practice_title">{{$practice->title}}</td>
            <td class="practice_description">{{$practice->description}}</td>
            <td>
              <a href="#" class="btn btn-primary btn-sm edit_practice_button" data-toggle="modal" data-target=".edit-practice-modal" style="margin-top: 2px;">Edit</a>
              <a href="{{asset('/practices/remove/'.$practice->id)}}" class="btn btn-danger btn-sm" style="margin-top: 2px;">Delete</a>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>   
</div>

<!-- Practice Edit Modal -->
<div class="modal fade edit-practice-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form method="post" action="{{route('updatepractice')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <input type="hidden" id="practice_id" name="id">
          <div class="modal-header">
            <h5 class="modal-title">Edit Practice</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">
          
          <div class="form-group">
              <label for="title">Title</label><br>
              <input type="text" id="practice_title" class="form-control" required autofocus name="title" placeholder="Enter Title">
          </div>
          <div class="form-group">
              <label for="description">Description</label><br>
              <Textarea class="form-control" id="practice_description" name="description" placeholder="Enter Description" value="BD Law Centre" required autofocus style="height: 100px;"></Textarea>
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
