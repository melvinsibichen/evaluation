<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<body style="background-color: lightblue" class="bg">
@extends("themeadmin")
@section("content")
    <div class="container">
    <h1><center>Faculty Details</center></h1>
    <table class="table">
    <tr>
        <th>Image</th>
        <th>FID</th>
        <!-- <th>ID</th> -->
        <th>Name</th>
        <th>Course</th>
        <th>Edit</th>
        <th>Delete</th>
       
    </tr>



    @foreach($user as  $user)

    <tr>
    <td><img width="100" height="100" src="{{ URL ::asset('assets/project_img/'.$user->pimage) }}"></td>
        <td>{{ $user->fid }}</td>
        <!-- <td>{{ $user->id }}</td> -->
        <td>{{ $user->fname }}</td>
        <td>{{ $user->fcourse }}</td>
       
        
        <td><a class="btn btn-warning" href="/fedit/{{ $user->id }}">Edit</a></td>
        <td><a class="btn btn-danger" href="/fdelete/{{ $user->id }}">Delete</a></td>
       
    </tr>

    @endforeach

    
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
@endsection
</body>
</html>