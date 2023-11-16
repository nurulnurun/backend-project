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
            <h3 class="title">Create New Product</h3>
            <div class="section-nav">
                <button type="button" class="btn btn-success btn-lg">Show Product List</button>
            </div>
          </div>
        </div>
        <!-- /section title -->

        <!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="category">
                                            <br>

											<form action = "{{ route('Product.Post') }}" method ="post">
                                                @csrf
                                                <div class="mb-3">
                                                  <label for="productID" class="form-label">Product ID</label>
                                                  <input type="text"  name="product_id" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="productName" class="form-label">Product Name</label>
                                                    <input type="text"  name="product_name" class="form-control">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="selectBrand" class="form-label">Select Brand</label>
                                                    <select name="brand_id" class="form-control" id="">

                                                        @foreach($brands as $brand)
                                                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                        @endforeach

                                                    </select>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="productImage" class="form-label">Product Gallery</label>
                                                    <input type="file"  name="product_gallery" class="form-control">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="productPrice" class="form-label">Product Price</label>
                                                    <input type="number"  name="product_price" class="form-control">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="productStock" class="form-label">Product Stock</label>
                                                    <input type="number"  name="product_stock" class="form-control">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="productStatus" class="form-label">Product Status</label>
                                                    <textarea name="product_status" id="" cols="50" rows="10"></textarea>
                                                  </div>

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                              </form>

										</div>
										<!-- /product -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>

@endsection
