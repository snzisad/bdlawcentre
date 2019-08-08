@extends("layout.adminpanellayout")

@section("title", $title)

@section("content")

<div class="container">

	<form method="post" action="">
    {{csrf_field()}}
        <div class="row">
			<div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="form-group">
                            <label for="title">Title</label><br>
                            <input type="text" class="form-control" id='title' required autofocus name="title" placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div id="parent-section" class="form-group">
                            <label for="title">Parent Menu</label><br>
                            <select class="form-control" id='parent' required name="parent">
                                @foreach($parents as $parent)
                                    <option value='{{ $parent->id }}'>{{ $parent->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Content</label><br>

                    <textarea class="content" class="ckeditor" id="summernote2" name="content">
                        @if(isset($menu))
                            {{ $menu->content }}
                        @endif
                    </textarea>
                </div>
            </div>
        </div>
            
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

    <script>

        CKEDITOR.replace('content');
        
    </script>


    @if(isset($menu))
        <script>
            $("#title").val("{{ ($menu['title']) }}");

            @if($menu->parent > 0)
                $("#parent").val("{{ ($menu['parent']) }}");
            @else 
                $("#parent").append('<option value=0 selected>Root</option>');
                $("#parent-section").hide();
                
            @endif 
        </script>
    @endif 

@endsection
