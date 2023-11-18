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
            <h3 class="title">Products List</h3>
            <div class="section-nav">
                <a href="{{ route('Create.New.Product') }}" class="btn btn-success btn-lg">Create New Product</a>
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
                        <th scope="col">Product ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Brand</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Stock</th>
                        <th scope="col">Product Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach($products as $Product_Item)

                      <tr>
                        <th scope="row">{{ $Product_Item->id }}</th>
                        <td>{{ $Product_Item ->product_id }}</td>
                        <td>{{ $Product_Item->product_name }}</td>
                        <td>{{ $Product_Item->brand->brand_name}}</td>
                        <td>
                            <img src="{{url('/uploads/'.$Product_Item->product_gallery)}}" alt="">
                        </td>
                        <td>{{ $Product_Item->product_price }}</td>
                        <td>{{ $Product_Item->product_stock }}</td>
                        <td>{{ $Product_Item->product_status }}</td>
                        <td>
                            <a class = "btn btn-success btn-sm" href="#">Edit</a>
                            <a class = "btn btn-danger btn-sm" href="#">Delete</a>
                            <a class = "btn btn-primary btn-sm" href="#">View</a>
                        </td>
                      </tr>

                      @endforeach
                    </tbody>
                  </table>

                  {{ $products->links() }}

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



