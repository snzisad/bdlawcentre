@extends("layout.adminpanellayout")

@section("title","Clients Feedback")

@section("content")

<div class="container">
	<form method="post" action="{{route('feedback')}}">
    {{csrf_field()}}
		<div class="row">
			<div class="col-lg-5">

        <div class="form-group">
            <label for="client">Client Name</label><br>
            <input type="text" class="form-control" name="client" placeholder="Enter Client Name">
        </div>
				<div class="form-group">
            <label for="occupation">Occupation</label><br>
            <input type="text" class="form-control" name="occupation" placeholder="Enter Client Occupation">
        </div>
				<div class="form-group">
            <label for="feedback">Feedback</label><br>
            <Textarea class="form-control" name="feedback" placeholder="Enter Feedback" style="height: 100px;"></Textarea>
        </div>

			</div>
		</div>
		<button type="submit" class="btn btn-primary ">Save</button>
	</form>

	<h3 class="text-light bg-dark" style="margin-top: 30px; padding: 5px; text-align: center;">All Feedback</h3>
	<table class="table"> 
      <thead class="thead-light">
        <tr>
          <th scope="col">Client</th>
          <th scope="col">Occupation</th>
          <th scope="col">Feedback</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($allfeedback as $feedback)
          <tr feedback_id="{{$feedback->id}}">
            <td class="feedback_client">{{$feedback->client}}</td>
            <td class="feedback_client_occupation">{{$feedback->occupation}}</td>
            <td class="feedback_client_feedback">{{$feedback->feedback}}</td>
            <td>
              <a href="#" class="btn btn-primary btn-sm edit_feedback_button" data-toggle="modal" data-target=".edit-feedback-modal" style="margin-top: 2px;">Edit</a>
              <a href="{{asset('/feedback/remove/'.$feedback->id)}}" class="btn btn-danger btn-sm" style="margin-top: 2px;">Delete</a>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>   
</div>


 <!-- Edit Modal -->
<div class="modal fade edit-feedback-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form method="post" action="{{route('updateFeedback')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <input type="hidden" id="feedback_id" name="id">
          <div class="modal-header">
            <h5 class="modal-title">Edit Feedback</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="client">Client Name</label><br>
            <input type="text" id="feedback_client" class="form-control" name="client" placeholder="Enter Client Name">
          </div>
          <div class="form-group">
              <label for="occupation">Occupation</label><br>
              <input type="text" id="feedback_client_occupation" class="form-control" name="occupation" placeholder="Enter Client Occupation">
          </div>
          <div class="form-group">
              <label for="feedback">Feedback</label><br>
              <Textarea class="form-control" id="feedback_client_feedback" name="feedback" placeholder="Enter Feedback" style="height: 100px;"></Textarea>
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