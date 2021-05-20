<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
 <body background="https://images.pexels.com/photos/1714208/pexels-photo-1714208.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">

@extends("themeadmin")


@section("content")



<h1><CENTER>ADMIN HOME</CENTER></H1>



<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        

        </div>

        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <table class="table table-borderless">
        
            


            <tr>
            <td>
            <div class="d-grid gap-2">
            <a href="\facultyview" class="btn btn-success">View All Faculty</a>
            </div>
            </td>
            </tr>


            <tr>
            <td>
            <div class="d-grid gap-2">
            <a href="\admin" class="btn btn-success">Add Faculty</a>
            </div>
            </td>
            </tr>
            
            

        </table>
        </div>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>


</html>

@endsection