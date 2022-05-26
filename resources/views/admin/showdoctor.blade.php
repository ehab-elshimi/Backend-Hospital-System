
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
    @include('admin.sidebar')
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">
    <div>
    <table class="table table-bordered bg-light text-center">
        <thead style="background:rgb(2, 55, 65);color:rgb(186, 0, 0);">
            <tr>
                <th>Doctor Name</th>
                <th>Phone</th>
                <th>Speciality</th>
                <th>Room No</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
            <tr>
                <td>{{$doctor->fname." ".$doctor->lname}}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{$doctor->speciality}}</td>
                <td>{{$doctor->room}}</td>
                <td><img src="doctorimage/{{$doctor->image}}" alt="doctor {{$doctor->name}} image" height="100" width="100"></td>
                <td><a class="btn btn-success" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                <td><a class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}" onclick="return confirm('Are U Sure To Delete This?')">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>

    @include('admin.script')

  </body>
</html>
