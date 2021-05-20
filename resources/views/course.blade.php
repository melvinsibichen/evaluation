@extends("theme")

@section("title")

 
<body background="https://images.pexels.com/photos/4710555/pexels-photo-4710555.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 colmd-6 col-lg-6 col-xl-12 col-xxl-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="photos\bba1.jpg" height="500"  class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="photos\bca2.jpg" height="500" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="photos\bcom2.jpg" height="500" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div> 
              <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-12 col-xxl-12">
                  <table class="table">
                      <tr>
                          <td><div class="card" style="width: 18rem;">
                            <img src="photos\bbapic.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">BACHELOR OF  BUSINESS ADMINISTRATION</h5>
                              <p class="card-text"> BBA is a 3-year undergraduate course that teaches students to understand, manage and overcome the challenges of a corporate firm. </p>
                              <a href="/bbaevaluation" class="btn btn-primary">KNOW MORE</a>
                            </div>
                          </div>
                        </td>
                          <td><div class="card" style="width: 18rem;">
                            <img src="photos\bcapic.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">BACHELOR OF COMPUTER APPLICATION</h5>
                              <p class="card-text">BCA is a 3 year undergraduate degree programme for candidates into the world of Computer languages.</p>
                              <a href="/bcaevaluation" class="btn btn-primary">KNOW MORE</a>
                            </div>
                          </div>
                        </td>
                          <td><div class="card" style="width: 18rem;">
                            <img src="photos\bcompic.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">BACHELOR OF COMMERCE</h5>
                              <p class="card-text"> B.Com. Professional or Bachelor of Commerce in Professional is a three-year undergraduate Management course. </p>
                              <a href="/bcomevaluation" class="btn btn-primary">KNOW MORE</a>
                            </div>
                          </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img src="photos\socialwork1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">BACHELOR OF SOCIAL WORK</h5>
                                  <p class="card-text"> BSW or Bachelor of Social Work is an undergraduate social work course. </p>
                                  <a href="/bswevaluation" class="btn btn-primary">KNOW MORE</a>
                                </div>
                              </div>
                          </td>
                      </tr>
                      
                      
                  </table>
              </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>

@endsection