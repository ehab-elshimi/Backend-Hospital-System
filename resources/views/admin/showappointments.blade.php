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
    <div class="container-fluid page-body-wrapper">
        <div>
            <table class="table table-bordered bg-light text-center">
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Doctor Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Approved</th>
                        <th>Cancelled</th>
                        <!-- <th>Messagefa-pull-right</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appointment)
                    @if($appointment->status == "approved" || $appointment->status == "In Progress")
                            <tr>
                                <td>{{$appointment->name}}</td>
                                <td>{{$appointment->email}}</td>
                                <td>{{$appointment->phone}}</td>
                                <td>{{$appointment->doctor}}</td>
                                <td>{{$appointment->date}}</td>
                                <td>
                                @if($appointment->status=="In Progress")
                                    <p class="bg-warning text-center text-light">
                                        {{$appointment->status}}                                    
                                    </p>
                                    
                                @elseif($appointment->status=="approved")
                                    <p class="bg-success text-center text-dark">
                                        {{$appointment->status}}
                                    </p>
                                    
                                @endif

                                </td>
                             
                                <td><a class="btn btn-success" href="{{url('approved',$appointment->id)}}">Approved</a></td>
                                <td><a class="btn btn-danger" href="{{url('delete',$appointment->id)}}">Cancelled</a></td>
                                <!-- <td>{{$appointment->message}}</td> -->
                           
                    @else
                            <tr>
                                <td colspan="8" class="bg-light text-dark">There's No Appointments</td>
                            </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>