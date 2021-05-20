@extends("themefaculty")

@section("content")
<div class="container">
<div class="row">
<div class="col"></div>
<div class="col">
<form action="/qupdate" method="post">
            {{csrf_field()}}
<table class="table">
<tr>
    <td>
    <div>
              
              
              <h5><label>Question</label></h5>
              <input type="hidden" name="id"  value="{{$user->id}}"/>
              <textarea name="bbaq" value="abds" id="ip4"  placeholder="Enter the question"  class="form-control" ></textarea>
              </div>
    </div>
    <button class="btn btn-success">upload</button>
    </td>
</tr>
</table>
</form>

<div class="col"></div></div></div>







@endsection