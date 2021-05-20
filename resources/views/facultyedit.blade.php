<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
@extends("themeadmin")
@section("content")

<form action="/fupdate" method="post" enctype="multipart/form-data">
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
    <h2><center>Faculty Edit</center></h2>
 <table class="table table-borderless">
    <tr>
        <td>ID</td>
        <td><input name="fid" type="text" class="form-control" value="{{ $user->fid }}">
        <span class="text-danger">@error('fid'){{$message}} @enderror  </span></td></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><input name="fname" type="text" class="form-control" value="{{ $user->fname }}">
        <span class="text-danger">@error('fname'){{$message}} @enderror  </span></td></td>
    </tr>
    <tr>
        <td>Username</td>
        <td><input name="fusername" type="text" class="form-control" value="{{ $user->fusername }}">
        <span class="text-danger">@error('fusername'){{$message}} @enderror  </span></td></td>
    </tr>
     <tr>
         <td>Course</td>
         <td><input name="fcourse" type="text" class="form-control" value="{{ $user->fcourse }}">
         <span class="text-danger">@error('fcourse'){{$message}} @enderror  </span></td></td>
     </tr>  
         
     <tr>
         <td></td>
         <td><button  class="btn btn-success"  type="submit" >Update</button></td>
     </tr>
 </table>
 
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    @endsection
</body>
</html>
