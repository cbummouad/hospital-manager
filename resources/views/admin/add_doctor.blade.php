
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
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
        <div class="container-fluid page-body-wrapper">


            <div class="container " align="center" style="padding-top: 100px">

                @if (session()->has('message'))
                    <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>



            @endif
                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-2">
                        <label >Doctor name</label>
                        <input type="text" style="color: black" name="name" placeholder="write the name" required>
                    </div>

                    <div class="p-2">
                        <label >phone</label>
                        <input type="text" style="color: black" name="phone" placeholder="write ur phone number" required>
                    </div>

                    <div class="p-2 ">
                        <label >speciality</label>
                        <select name="sperciality"  style="color: black; width:200px "  required>
                            <option>--select--</option>
                            <option>SKIN</option>
                            <option>EYES</option>
                            <option>HEART</option>
                            <option>NOSE</option>
                        <select>
                    </div>

                    <div class="p-2">
                        <label >Room number</label>
                        <input type="text" style="color: black" name="room" placeholder="Enter the room number" required>
                    </div>

                    <div class="p-2">
                        <label >Doctor image</label>
                        <input type="file"  name="file" required >
                    </div>

                    <div class="p-2">
                        <input type="submit" style="color: black" class="btn btn-success">
                    </div>
                </form>
            </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
