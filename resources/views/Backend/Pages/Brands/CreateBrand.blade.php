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
                <button type="button" class="btn btn-success btn-lg">Show Brands List</button>
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

											<form action = "{{ route('Brand.Post') }}" method ="post">
                                                @csrf
                                                <div class="mb-3">
                                                  <label for="brandID" class="form-label">Brand ID</label>
                                                  <input type="text"  name="brand_id" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="brandName" class="form-label">Brand Name</label>
                                                    <input type="text"  name="brand_name" class="form-control">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="brandStatus" class="form-label">Brand Status</label>
                                                    <textarea name="brand_status" id="" cols="50" rows="10"></textarea>
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="productStock" class="form-label">Upload Logo</label>
                                                    <input type="file" name="upload_image" class="form-control">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="brandDescription" class="form-label">Brand Description</label>
                                                    <textarea name="brand_description" id="" cols="50" rows="10"></textarea>
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


