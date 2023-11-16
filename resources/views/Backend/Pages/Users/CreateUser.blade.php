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
            <h3 class="title">Create New User</h3>
            <div class="section-nav">
                <button type="button" class="btn btn-success btn-lg">Show Users List</button>
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

											<form action = "#" method ="#">

                                                <div class="mb-3">
                                                  <label for="userID" class="form-label">User ID</label>
                                                  <input type="number"  name="user_id" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="userName" class="form-label">User Name</label>
                                                    <input type="text"  name="user_name" class="form-control">
                                                  </div>
                                                <div class="mb-3">
                                                    <label for="role" class="form-label">Select Role</label>
                                                    <select class="form-control" name="role" id="">
                                                        <option value="admin">Admin</option>
                                                        <option value="manager">Manager</option>
                                                        <option value="account">Account</option>
                                                    </select>
                                                </div>
                                                  <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" name="user_email" class="form-control">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" name="user_password" class="form-control">
                                                  </div>
                                                  <div class="mb-3">
                                                    <label for="password" class="form-label">Upload Image</label>
                                                    <input type="file" name="user_image" class="form-control">
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



