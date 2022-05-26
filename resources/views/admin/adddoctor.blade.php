<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <!-- Design by foolishdeveloper.com -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	list-style: none;
	font-family: 'Montserrat', sans-serif;
}

body{
  background: linear-gradient(
     105deg,
     #88beee ,
     #0a2e73
 );
}

.wrapper{
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

.registration_form{
	background: white;
	padding: 25px;
	border-radius: 5px;
	width: 400px;
}

.registration_form .title{
	text-align: center;
	font-size: 25px;
	text-transform: uppercase;
	color: white;
  background:rgb(13, 98, 215);
	letter-spacing: 2px;
	font-weight: 700;
  margin-top: -25px;
  margin-left:-25px;
  margin-right:-25px;
}

.form_wrap{
	margin-top: 35px;
}

.form_wrap .input_wrap{
	margin-bottom: 15px;
}

.form_wrap .input_wrap:last-child{
	margin-bottom: 0;
}

.form_wrap .input_wrap label{
	display: block;
	margin-bottom: 3px;
	color: #1a1a1f;
}

.form_wrap .input_grp{
	display: flex;
	justify-content: space-between;
}

.form_wrap .input_grp  input[type="text"]{
	width: 165px;
}

.form_wrap  input[type="text"]{
	width: 100%;
	border-radius: 3px;
	border: 1.3px solid #9597a6;
	padding: 10px;
	outline: none;
}

.form_wrap  input[type="text"]:focus{
	border-color: #063abd;
}

.form_wrap ul{
 border:1px solid rgb(115, 185, 235);
  width:70%;
  background: rgb(206, 238, 242);
  margin-left: 15%;
	padding: 8px 10px;
	border-radius: 20px;
	display: flex;
	justify-content: center;
}

.form_wrap ul li:first-child{
	margin-right: 15px;
}

.form_wrap ul .radio_wrap{
	position: relative;
	margin-bottom: 0;
}

.form_wrap ul .radio_wrap .input_radio{
	position: absolute;
	top: 0;
	right: 0;
	opacity: 0;
}

.form_wrap ul .radio_wrap span{
	display: inline-block;
	font-size: 17px;
	padding: 3px 15px;
	border-radius: 15px;
	color: #101749;
}

.form_wrap .input_radio:checked ~ span{
	background: #105ce2;
  color:white;
}

.form_wrap .submit_btn{
	width: 100%;
	background: #0d6ad7;
	padding: 10px;
	border: 0;
  color:white;
  font-size:17px;
	border-radius: 3px;
	text-transform: uppercase;
	letter-spacing: 2px;
	cursor: pointer;
}

.form_wrap .submit_btn:hover{
	background: #051c94;
}
  </style>
</head>
<body>
  <div class="wrapper">
  	<div class="registration_form">
  		<div class="title">
  			Add Doctor
  		</div>

  		<form action="{{route('datadoctor')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
  			<div class="form_wrap">
  				<div class="input_grp">
  					<div class="input_wrap">
  						<label for="fname">First Name</label>
  						<input type="text" id="fname" name="fname">
  					</div>
  					<div class="input_wrap">
  						<label for="lname">Last Name</label>
  						<input type="text" id="lname" name="lname">
  					</div>
  				</div>
                  <div class="input_wrap">
                    <label for="email">Phone</label>
                    <input type="text" id="email" name="phone">
                    </div>
                <div class="input_wrap">
                    <label for="cars">Speciality</label>
                    <select name="speciality" id="cars">
                        <option value="skin">skin</option>
                        <option value="heart">heart</option>
                        <option value="eye">eye</option>
                        <option value="nose">nose</option>
                    </select>
                </div>
  				<div class="input_wrap">
  					<label for="city">Room No</label>
  					<input type="text" id="city" name="room">
  				</div>
  				<div class="input_wrap">
  					<label for="country">Doctor Image</label>
  					<input type="file" name="file" id="">
  				</div>






  				<div class="input_wrap">
  					<input type="submit" value="Register Now" class="submit_btn">
                      {{-- <a href="{{ route('datadoctor') }}" class="submit_btn">Register Now</a> --}}
  				</div>



  			</div>





  		</form>
  	</div>
  </div>
</body>
</html>
