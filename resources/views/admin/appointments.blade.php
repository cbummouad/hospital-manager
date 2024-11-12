
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
                        <th style="padding: 10px">Costomer name</th>
                        <th style="padding: 10px">Email</th>
                        <th style="padding: 10px">phone</th>
                        <th style="padding: 10px">doctor</th>
                        <th style="padding: 10px">date</th>
                        <th style="padding: 10px">message</th>
                        <th style="padding: 10px">status</th>
                        <th style="padding: 10px">apruve</th>
                        <th style="padding: 10px">cancel</th>
                        <th style="padding: 10px">send mail</th>

                    </tr>
                    @foreach($data as $datas)
                        <tr align="center" style="background-color:burlywood">
                            <td>{{$datas->name}}</td>
                            <td>{{$datas->email}}</td>
                            <td>{{$datas->phone}}</td>
                            <td>{{$datas->doctor}}</td>
                            <td>{{$datas->date}}</td>
                            <td>{{$datas->message}}</td>
                            <td>{{$datas->status}}</td>
                            <td><a class="btn btn-success" href="{{url('appruve',$datas->id)}}">appruve</a></td>
                            <td><a class="btn btn-danger" href="{{url('cancel_appoint',$datas->id)}} ">cancel</a></td>
                            <td><a class="btn btn-primary" href="{{url('snd_mail',$datas->id)}} ">send</a></td>
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
