@extends("theme")

@section("title")
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>socialwork</title>
</head>

<body background="https://images.pexels.com/photos/6697294/pexels-photo-6697294.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <ul class="list-group">
                    <li class="list-group-item"><B>ABOUT THE DEPARTMENT</B></li>
                    <li class="list-group-item list-group-item-danger">ASSIGNMENT SUBMISSION</li>
                    <li class="list-group-item list-group-item-danger">ACADEMIC CALENDER</li>
                    <li class="list-group-item list-group-item-danger">STUDENT ASSOCIATION</li>
                    <li class="list-group-item list-group-item-danger">STUDENT ACHIEVEMENTS</li>
                    <li class="list-group-item list-group-item-danger">ACTIVITIES AND EVENTS</li>
                    <li class="list-group-item list-group-item-danger">PLACEMENT</li>
                    <li class="list-group-item list-group-item-danger">SYLLABUS</li>
                    <li class="list-group-item list-group-item-danger">TIME TABLE</li>
                    <li class="list-group-item list-group-item-danger">MILESTONE</li>
                  </ul>
                  <div class="row"> 
                </div>
            </div>

        
        <div class="col col-12 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8 ">
            <h5 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><b>ASSIGNMENT QUESTION</b></h5>
            <P>
            
            @foreach($user as  $user)
            {{$user->bbaq}}
            @endforeach 
            </P>

          <form action="/upload" method="post" enctype="multipart/form-data">
          @csrf

<div class="input-group mb-3">
  <input type="file" name="file" class="form-control" id="inputGroupFile02" >
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
  

</div>
<div>
              
              
              <h5><label>course</label></h5>
              <select name="course" class="form-select" aria-label="Default select example">
  <option selected>Select Course</option>
  <option value="BBA">BBA</option>
  <option value="BCA">BCA</option>
  <option value="BCOM">BCOM</option>
  <option value="BSW">BSW</option>
</select>
              </div>

<button class="btn btn-success" type="submit">submit</button>

</form>





        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>



@endsection