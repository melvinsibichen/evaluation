<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>


<body background="https://images.pexels.com/photos/414548/pexels-photo-414548.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <img src="photos\logo.png" height="40" alt="">
      <a class="navbar-brand" href="#">LakeWood College</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/adminhome">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin">Add Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/facultyview">View Faculty</a>
        </li>
        
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>


      

        
            
       
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
    
        <a class="nav-link  active" > profile</a> 
        </li>
        <li><a class="nav-link " href="/lgout">Logout</a></li>
        </ul>

         
     
       
      </form>
    </div>
  </div>
</nav>



<form action="/addfaculty" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

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
    <h2><center>Faculty adding</center></h2>
 <table class="table table-borderless">
    <tr>
        <td>ID</td>
        <td><input name="fid" type="text" class="form-control" value="{{old('fid')}}">
        <span class="text-danger">@error('fid'){{$message}} @enderror  </span></td></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><input name="fname" type="text" class="form-control" value="{{old('fname')}}">
        <span class="text-danger">@error('fname'){{$message}} @enderror  </span></td></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input name="fusername" type="text" class="form-control" value="{{old('fusername')}}">
        <span class="text-danger">@error('fusername'){{$message}} @enderror  </span></td></td>
    </tr>
     <tr>
         <td>Course</td>
         <td><input name="fcourse" type="text" class="form-control" value="{{old('fcourse')}}">
         <span class="text-danger">@error('fcourse'){{$message}} @enderror  </span></td></td>
     </tr>
     <tr>
         <td>Password</td>
         <td><input name="fpassword" type="password" class="form-control" value="{{old('fpassword')}}">
         <span class="text-danger">@error('fpassword'){{$message}} @enderror  </span></td></td>
     </tr>
     <tr>
    <td><center>Image :</center></td>
    <td><input type="file" name="pimage"class="form-control" required></td>
     </tr>
     
     <tr>
         <td></td>
         <td><button  class="btn btn-success"  type="submit" >Add</button></td>
     </tr>
 </table>
 
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   
    </div>
</body>
</html>
