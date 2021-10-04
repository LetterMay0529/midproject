@extends('base')

@section('content')

<br><br><br>

  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-dark bg-transparent shadow text-secondary" style="border-radius: 25px; text-secondary ; !important;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">FashionBoutique </p>

                <form action="{{url('/register')}}" method="post" mx-1 mx-md-4 >
                  {{csrf_field()}}

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">

                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">

                    </div>
                  </div>
                 
                  <p class="text-center text-muted mt-5 mb-0 text-dark" >Already have an account? <strong>Click </strong><a href="{{url('/login')}}">here</a></p>

<br>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-dark btn-lg" href="{{url('register')}}" style=" letter-spacing:5px;">Sign Up</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://smallbiztrends.com/ezoimgfmt/media.smallbiztrends.com/2017/10/Colorful-Fashion-850x476.jpg?ezimgfmt=ng%3Awebp%2Fngcb12%2Frs%3Adevice%2Frscb12-1" class="img-fluid" style=" height: 400px; width: 900px;"alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@stop