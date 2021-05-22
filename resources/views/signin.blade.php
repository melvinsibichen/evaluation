<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    





<body background="https://images.pexels.com/photos/1438072/pexels-photo-1438072.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif
    @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
    @endif

    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7 ">

    


 </div>


 <div class="col col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1 ">
 </div>




<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">

   <br>
   <br>
   
    <h3><center>SIGN UP</center></h3>
    <form action="/userview" method="post">
{{ csrf_field()}}

				
                <table class="table table-borderless" >
                <tr>
                    <td>ROLL NO</td>
                    <td><input name="rollno" type="text" class="form-control">
                    <span class="text-danger">@error('rollno'){{$message}} @enderror  </span>
                    </td>
                </tr>
                <tr>
                    <td>FULL NAME</td>
                    <td><input name="fullname" type="text" class="form-control">
                    <span class="text-danger">@error('fullname'){{$message}} @enderror  </span>
                    </td>
                </tr>
                <tr>
                    <td>EMAIL ID</td>
                    <td><input name="emailid" type="text" class="form-control">
                    <span class="text-danger">@error('emailid'){{$message}} @enderror  </span>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>PHONE NO</td>
                    <td><input name="phno" type="text" class="form-control">
                    <span class="text-danger">@error('phno'){{$message}} @enderror  </span>
                    </td>
                </tr>
                
             
                <tr>
                <td>GENDER</td>
                <td>
                     <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male">
                     <label class="form-check-label" for="flexRadioDefault1">
                     Male
                     </label><br>
                     <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female">
                     <label class="form-check-label" for="flexRadioDefault2">
                     Female
                    </label><br>
                </td>
                </tr>


                <tr>
                    <td>COURSE</td>
                    <td><input name="course" type="text" class="form-control">
                    <span class="text-danger">@error('course'){{$message}} @enderror  </span></td>
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td><input name="password" type="password" class="form-control">
                    <span class="text-danger">@error('password'){{$message}} @enderror  </span></td>
                </tr>
               
                <tr>
             
                    <td><button class="btn btn-success">Submit</button></td>

                    <td> <a href="/" class="btn btn-primary">Login</a></td>
                </tr>
    </table>
    </form>

    </div>
    </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
    </html>