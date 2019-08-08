@extends("layout.adminpanellayout")

@section("title","Menu")

@section("content")

<div class="container">
    <div align="right">
        <a href="{{ route('menu_add') }}" class="btn btn-info">Add new Sub Menu</a>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <h3 class="text-light bg-dark" style="margin-top: 30px; padding: 5px; text-align: center;">Sub Menu</h3>
            <table class="table"> 
                <thead class="thead-light">
                    <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Root Menu</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($childs as $child)
                    <tr>
                        <td>{{ $child->title }}</td>
                        <td>{{ $child->root->title }}</td>
                        <td>
                            <a href="{{ route('menu_details', [$child->id]) }}" class="btn btn-success btn-sm">View</a>
                            <a href="{{ route('menu_edit', [$child->id]) }}" class="btn btn-primary btn-sm" style="margin-top: 2px;">Edit</a>
                            <a href="{{ route('menu_remove', [$child->id]) }}"  onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm" style="margin-top: 2px;">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="col-lg-4">
            <h3 class="text-light bg-dark" style="margin-top: 30px; padding: 5px; text-align: center;">Root Menu</h3>
            <table class="table"> 
                <thead class="thead-light">
                    <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($parents as $parent)
                    <tr>
                        <td>{{ $parent->title }}</td>
                        <td>
                            <a href="{{ route('menu_details', [$parent->id]) }}" class="btn btn-success btn-sm">View</a>
                            <a href="{{ route('menu_edit', [$parent->id]) }}" class="btn btn-primary btn-sm edit_training_button" style="margin-top: 2px;">Edit</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            
        </div>
    </div>

@endsection
