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
            <h3 class="title">Create New Category</h3>
            <div class="section-nav">
                <button type="button" class="btn btn-success btn-lg">Show Category List</button>
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

											<form action = "{{ route('category.post') }}" method ="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="categoryID" class="form-label">Category ID</label>
                                                    <input type="text"  name="category_id" class="form-control" required>

                                                    @error('category_id')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror

                                                  </div>
                                                <div class="mb-3">
                                                  <label for="categoryName" class="form-label">Category Name</label>
                                                  <input type="text"  name="category_name" class="form-control" required>

                                                @error('category_name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror

                                                </div>
                                                <div class="mb-3">
                                                  <label for="categoryDescription" class="form-label">Category Description</label><br>
                                                  <textarea name="category_description" id="" cols="50" rows="10" required></textarea>

                                                @error('category_description')
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



