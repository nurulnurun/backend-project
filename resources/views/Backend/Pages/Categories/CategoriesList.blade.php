@extends('Backend.Master')

@section('Main Content')

<div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">

        <!-- section title -->
        <div class="col-md-12">
          <div class="section-title">
            <h3 class="title">Categories List</h3>
            <div class="section-nav" style="float:right">
                <a href="{{ route('Create.New.Category') }}" class="btn btn-success btn-lg">Create New Category</a>
            </div>
          </div>
        </div>
        <!-- /section title -->
<br><br>
        <!-- Products tab & slick -->
        <div class="col-md-12">
          <div class="row">
            <div class="products-tabs">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">SL. No.</th>
                        <th scope="col">Category ID</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Category description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach($category as $Category_Item)
                      <tr>
                        <th scope="row">{{$Category_Item->id}}</th>
                        <th scope="row">{{$Category_Item->category_id}}</th>
                        <td>{{$Category_Item->category_name}}</td>
                        <td>{{$Category_Item->category_description}}</td>
                        <td>
                            <a class = "btn btn-success btn-sm" href="#">Edit</a>
                            <a class = "btn btn-danger btn-sm" href="{{ route('category.delete', $Category_Item->id) }}">Delete</a>
                            <a class = "btn btn-primary btn-sm" href="#">View</a>
                        </td>
                      </tr>

                      @endforeach
                    </tbody>
                  </table>

                  {{ $category->links() }}
            </div>
          </div>
        </div>
        <!-- Products tab & slick -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>

  @endsection

