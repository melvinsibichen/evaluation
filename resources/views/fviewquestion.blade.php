<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
 <body background="https://images.pexels.com/photos/3184163/pexels-photo-3184163.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">



@extends("themefaculty")

@section("content")

<div class="container">
    <h1><center>view added question</center></h1>
    <table class="table">
    <tr>
        <th>ID</th>
        <th>Question</th>
        <th>course</th>
    </tr>



    @foreach($user as  $user)

    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->bbaq }}</td>
        <td>{{ $user->course }}</td>
     
        
        <td><a class="btn btn-warning" href="/qedit/{{ $user->id }}">Edit</a></td>
        <td><a class="btn btn-danger" href="/qdelete/{{ $user->id }}">Delete</a></td>
       
    </tr>

    @endforeach

    
    </table>
    </div>




@endsection