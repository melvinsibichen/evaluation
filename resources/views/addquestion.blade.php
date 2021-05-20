@extends("themefaculty")

@section("content")
<div class="container">
<div class="row">
<div class="col"></div>
<div class="col">
<form action="/addque" method="post">
            {{csrf_field()}}
<table class="table">
<tr>
    <td>

    <div>
              
              
              <h5><label>Course</label></h5>
              <select name="course" class="form-select" aria-label="Default select example">
  <option selected> Select  Course</option>
  <option value="BBA">BBA</option>
  <option value="BCA">BCA</option>
  <option value="BCOM">BCOM</option>
  <option value="BSW">BSW</option>
</select>
              </div>


              
    <div>
              
              
              <h5><label>Question</label></h5>
              <textarea name="bbaq" value="{{old('')}}" id="ip4"  placeholder="Enter the question"  class="form-control" ></textarea>
              </div>


    </div>
    <button class="btn btn-success">Upload</button>
    </td>
</tr>
</table>
</form>

<div class="col"></div></div></div>







@endsection