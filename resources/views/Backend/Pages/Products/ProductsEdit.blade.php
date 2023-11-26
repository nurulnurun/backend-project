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
            <h3 class="title">Edit your Product</h3>
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

											<form action = "{{ route('products.update', $product_edit->id) }}" method ="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="mb-3">
                                                  <label for="productID" class="form-label">Product ID</label>
                                                  <input value="{{ $product_edit->product_id }}" type="text"  name="product_id" class="form-control" required>

                                                @error('product_id')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                                </div>
                                                <div class="mb-3">
                                                    <label for="productName" class="form-label">Product Name</label>
                                                    <input value="{{ $product_edit->product_name }}" type="text"  name="product_name" class="form-control" required>

                                                @error('product_name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="selectBrand" class="form-label">Select Brand</label>
                                                    <select name="brand_id" class="form-control" id="" required>

                                                        @foreach($brands as $brand)
                                                            <option @if($product_edit->brand_id==$brand->id) selected @endif value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                        @endforeach

                                                    </select>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="productImage" class="form-label">Product Gallery</label>
                                                    <input type="file"  name="product_gallery" class="form-control" required>

                                                @error('product_gallery')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="productPrice" class="form-label">Product Price</label>
                                                    <input value="{{ $product_edit->product_price }}" type="number"  name="product_price" class="form-control" required>

                                                @error('product_price')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="productStock" class="form-label">Product Stock</label>
                                                    <input value="{{ $product_edit->product_stock }}" type="number"  name="product_stock" class="form-control" required>

                                                @error('product_stock')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="productStatus" class="form-label">Product Status</label>
                                                    <textarea name="product_status" id="" cols="50" rows="10" required>{{ $product_edit->product_status }}</textarea>

                                                @error('product_status')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
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
