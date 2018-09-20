@extends("layout.adminpanellayout")

@section("title","Practices")

@section("content")

<div class="container">
	<form>
		<div class="row">
			<div class="col-lg-5">
				<div class="form-group">
	                <label for="title">Image Title</label><br>
	                <input type="text" class="form-control" name="title" placeholder="Enter Title">
	            </div>
				<div class="form-group">
	                <label for="description">Description</label><br>
	                <Textarea class="form-control" name="description" placeholder="Enter Description" value="BD Law Centre" style="height: 100px;"></Textarea>
	            </div>
				<div class="form-group">
	                <label for="banner">Banner</label><br>
	                <input type="file" name="images">
	            </div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary ">Upload</button>
	</form>

	<h3 class="text-light bg-dark" style="margin-top: 30px; padding: 5px; text-align: center;">Active Slide</h3>
	<table class="table"> 
      <thead class="thead-light">
        <tr>
          <th scope="col">Banner</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      	<tr>
      		<td>
      			<img src="{{asset('content/lexisnexis/1.jpg')}}" width="150px" height="100px">
      		</td>
      		<td>Fast moving law firm of Bangladesh</td>
      		<td>Barrister A. M. Masum is a very proactive in protecting the interest of our institution and in providing</td>
      		<td>
      			<a href="#" class="btn btn-success btn-sm">Edit</a>
      			<a href="#" class="btn btn-danger btn-sm">Delete</a>
      		</td>
      	</tr>

      </tbody>
    </table>   
</div>

@endsection