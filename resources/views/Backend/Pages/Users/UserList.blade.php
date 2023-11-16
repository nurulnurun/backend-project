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
            <h3 class="title">User List</h3>
            <div class="section-nav">
                <a href="{{ route('New.Users.Create') }}" class="btn btn-success btn-lg">Create new User</a>
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
                        <th scope="col">User ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User Image</th>
                        <th scope="col">User Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>



                      <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a class = "btn btn-success btn-sm" href="#">Edit</a>
                            <a class = "btn btn-danger btn-sm" href="#">Delete</a>
                            <a class = "btn btn-primary btn-sm" href="#">View</a>
                        </td>
                      </tr>


                    </tbody>
                  </table>


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



