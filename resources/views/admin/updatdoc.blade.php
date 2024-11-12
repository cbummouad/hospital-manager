
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public" >

    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper  ">
            @if (session()->has('message'))
                    <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>



            @endif

            <form action="{{url('editdoc',$data->id)}}" method="POST" enctype="multipart/form-data" class="container mt-4">
                @csrf
                <div class="form-group">
                    <label for="doctorName">Doctor Name</label>
                    <input value="{{ $data->name }}" type="text" class="form-control text-red-500" id="doctorName" name="name" placeholder="Write the name" required>
                </div>

                <div class="form-group">
                    <label for="doctorPhone">Phone</label>
                    <input value="{{ $data->phone }}" type="text" class="form-control text-red-500" id="doctorPhone" name="phone" placeholder="Write your phone number" required>
                </div>

                <div class="form-group">
                    <label for="doctorSpeciality">Speciality</label>
                    <select name="speciality" id="doctorSpeciality" class="form-control text-red-500" required>
                        <option value="" disabled selected>--select--</option>
                        <option value="SKIN">SKIN</option>
                        <option value="EYES">EYES</option>
                        <option value="HEART">HEART</option>
                        <option value="NOSE">NOSE</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="roomNumber">Room Number</label>
                    <input value="{{ $data->room }}" type="text" class="form-control text-red-500" id="roomNumber" name="room" placeholder="Enter the room number" required>
                </div>

                <div class="form-group">
                    <label for="doctorImage">Doctor Image</label>
                    <input type="file" class="form-control-file text-red-500" id="doctorImage" name="file" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>

        </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
