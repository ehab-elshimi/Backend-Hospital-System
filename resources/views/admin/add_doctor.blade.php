<!DOCTYPE html>
<html lang="en">
  <head>
      <style>
        label{
            display: inline-block;
            width:200px;
        } 
      </style>
    @include('admin.css')
  </head>
  <body>
  <div class="container-scroller">

      @include('admin.sidebar')
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
          @if(session()->has('message'))
          <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">x</button>
              {{session()->get('message')}}
          </div>
          @endif
          <div class="container" align="center" style="padding-top:100px">
          <h1>Add Doctor</h1>
              <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('post')
                  <div style="padding:15px">
                      <label for="a">Doctor Name</label>
                      <input type="text" name="name" id="a" class="" style="color:black" placeholder="write the name" required>
                  </div>
                  <div style="padding:15px">
                      <label for="b">Phone</label>
                      <input type="text" name="phone" id="b" class="" style="color:black" placeholder="write phone number" required>
                  </div>
                  <div style="padding:15px">
                      <label for="c">Speciality</label>
                      <select name="speciality" id="c" class="text-dark" style="width:200px">
                          <option>--select--</option>
                          <option value="skin">skin</option>
                          <option value="heart">heart</option>
                          <option value="eye">eye</option>
                          <option value="nose">nose</option>
                      </select>
                  </div>
                  <div style="padding:15px">
                      <label for="d">Room No</label>
                      <input type="text" name="room" id="d" class="" style="color:black" placeholder="write the room number" required>
                  </div>
                  <div style="padding:15px">
                      <label for="e">Doctor Image</label>
                      <input type="file" name="file" id="e" required>
                  </div>
                  <div style="padding:15px">
                      <input type="submit" name="submit" class="btn btn-success bg-success" value="Save">
                  </div>
              </form>
          </div>
      </div>
      @include('admin.script')
  </body>
</html>