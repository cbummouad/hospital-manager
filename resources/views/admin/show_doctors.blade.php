
<!DOCTYPE html>
<html lang="en">
  <head>

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
        <div  class="container-fluide page-body-wrapper">
            <div  style="padding: 100px;" >
                <table>
                    <tr align="center" style="background-color: black";>
                        <th style="padding: 10px">doctor name</th>
                        <th style="padding: 10px">phone</th>
                        <th style="padding: 10px">speciality</th>
                        <th style="padding: 10px">room</th>
                        <th style="padding: 10px">image</th>
                        <th style="padding: 10px">delet</th>
                        <th style="padding: 10px">update</th>


                    </tr>
                    @foreach($data as $datas)
                        <tr align="center" style="background-color:burlywood">
                            <td>{{$datas->name}}</td>
                            <td>{{$datas->phone}}</td>
                            <td>{{$datas->sperciality}}</td>
                            <td>{{$datas->room}}</td>
                            <td><img height="100" width="100" src="doctorimage/{{$datas->image}}" alt=""></td>
                            <td>{{$datas->message}}</td>
                            <td><a onclick="return confirm('are u sure u wnt to delete this doctor') "  class="btn btn-danger" href="{{url('delet_doct',$datas->id)}}">delet</a></td>
                            <td><a class="btn btn-success" href="{{url('updatdoc',$datas->id)}}">update</a></td>
                        </tr>
                    @endforeach
                </table>

            </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
