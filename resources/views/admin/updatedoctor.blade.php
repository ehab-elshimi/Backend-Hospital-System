
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
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
          <div class="container-fluid page-body-wrapper">
          @if(session()->has('message'))
          <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">x</button>
              {{session()->get('message')}}
          </div>
          @endif
          <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('post')
                  <div style="padding:15px">
                      <label for="a">Doctor Name</label>
                      <input type="text" name="name" value="{{$data->name}}" id="a" class="" style="color:black" placeholder="write the name" required>
                  </div>
                  <div style="padding:15px">
                      <label for="b">Phone</label>
                      <input type="text" name="phone" value="{{$data->phone}}" id="b" class="" style="color:black" placeholder="write phone number" required>
                  </div>
                  <div style="padding:15px">
                      <label for="d">Speciality</label>
                      <input type="text" name="speciality" value="{{$data->speciality}}" id="d" style="color:black" placeholder="write the room number" required>
                      <p>
                          Choose From These <br>
                          1- "nose" <br> 2- "heart"  <br>  3- "eye"  <br>
                        </p>
                    </div>
                  <div style="padding:15px">
                      <label for="d">Room No</label>
                      <input type="text" name="room" value="{{$data->room}}" id="d" style="color:black" placeholder="write the room number" required>
                  </div>
                  
                  <div style="padding:15px">
                      <label>Change Image</label><br>
                      <input type="file" name="file">
                      <img src="doctorimage/{{$data->image}}" alt="doctor {{$data->name}} image" height="150" width="150">

                  </div>
                  <div style="padding:15px">
                      <input type="submit" name="submit" class="btn btn-primary bg-primary" value="Update">
                  </div>
              </form>
          </div>
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>