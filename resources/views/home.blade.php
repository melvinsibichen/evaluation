

<!DOCTYPE html>
<html lang="en">
@extends("theme")
@section("title")

{{session('loggeduser')}}
<div class="container">
        <div class="row">
            <div class="col col-12 col-sm 6 col-md 6 col-lg 6 col-xl 12 col-xxl 12">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                      <img src="https://images.pexels.com/photos/2982449/pexels-photo-2982449.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="500"  class="d-block w-100" alt="...">
                        
                        <div class="carousel-caption d-none d-md-block">
                          <h4>WELCOME</h4>
                          <h3>LAKEWOOD COLLEGE OF MANAGEMENT(AUTONOMOUS)</h3>
                        </div>
                      </div>
                      <div class="carousel-item">
                      <img src="https://images.pexels.com/photos/7944130/pexels-photo-7944130.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="500"  class="d-block w-100" alt="...">
                        
                        <div class="carousel-caption d-none d-md-block">
                          <h4>WELCOME</h4>
                          <h3>LAKEWOOD COLLEGE OF MANAGEMENT(AUTONOMOUS)</h3>
                        </div>
                      </div>
                      <div class="carousel-item">
                      <img src="https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" height="500"  class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h4>WELCOME</h4>
                          <h3>LAKEWOOD COLLEGE OF MANAGEMENT(AUTONOMOUS)</h3>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>


@endsection




