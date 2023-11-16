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
            <h3 class="title">Brands List</h3>
            <div class="section-nav">
                <a href="{{ route('Create.New.Brand') }}" class="btn btn-success btn-lg">Create New Brand</a>
            </div>
          </div>
        </div>
        <!-- /section title -->

        <!-- Products tab & slick -->
        <div class="col-md-12">
          <div class="row">
            <div class="products-tabs">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">SL. No.</th>
                        <th scope="col">Brand ID</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Brand Status</th>
                        <th scope="col">Brand Image</th>
                        <th scope="col">Brand Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach($brands as $Brand_Item)
                      <tr>
                        <th scope="row">{{ $Brand_Item->id }}</th>
                        <td>{{ $Brand_Item->brand_id }}</td>
                        <td>{{ $Brand_Item->brand_name }}</td>
                        <td>{{ $Brand_Item->brand_status }}</td>
                        <td>{{ $Brand_Item->upload_image }}</td>
                        <td>{{ $Brand_Item->brand_description }}</td>
                        <td>
                            <a class = "btn btn-success btn-sm" href="#">Edit</a>
                            <a class = "btn btn-danger btn-sm" href="#">Delete</a>
                            <a class = "btn btn-primary btn-sm" href="#">View</a>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>

                  {{$brands->links()}}

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



