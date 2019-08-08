@extends("layout.adminpanellayout")

@section("title","Payment Method")

@section("content")

<div class="container">
	<form method="post" action="{{route('paymentmethod')}}" enctype="multipart/form-data">
    {{csrf_field()}}
		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
            <label for="name">Method Name</label><br>
            <input type="text" class="form-control" required autofocus name="name" placeholder="Enter Method Name">
        </div>
				<div class="form-group">
            <label for="picture">Picture</label><br>
            <input type="file" required autofocus name="picture">
        </div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary ">Save</button>
	</form>

	<h3 class="text-light bg-dark" style="margin-top: 30px; padding: 5px; text-align: center;">Payment Method</h3>
	<table class="table"> 
      <thead class="thead-light">
        <tr>
          <th scope="col">Picture</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach($paymentmethods as $paymentmethod)
            <tr paymentmethod_id="{{$paymentmethod->id}}">
              <td>
                <img src="{{asset('picture/paymentmethod/'.$paymentmethod->picture)}}" width="60px" height="60px">
              </td>
              <td class="paymentmethod_name">{{$paymentmethod->name}}</td>
              <td>
                <a href="#" class="btn btn-primary btn-sm edit_paymentmethod_button" data-toggle="modal" data-target=".edit-paymentmethod-modal" style="margin-top: 2px;">Edit</a>
                <a href="{{asset('/paymentmethod/remove/'.$paymentmethod->id)}}" class="btn btn-danger btn-sm" style="margin-top: 2px;">Delete</a>
              </td>
            </tr>
          @endforeach

      </tbody>
    </table>   
</div>


<!-- Edit Modal -->
<div class="modal fade edit-paymentmethod-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form method="post" action="{{route('updatePaymentmethod')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <input type="hidden" id="paymentmethod_id" name="id">
          <div class="modal-header">
            <h5 class="modal-title">Edit Client</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">

          <div class="form-group">
              <label for="name">Name</label><br>
              <input type="text" class="form-control" id="paymentmethod_name" required autofocus  name="name" placeholder="Enter Title">
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