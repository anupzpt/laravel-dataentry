@extends('layout.app')
@section('content')
@if (Session::has('fail'))
<div class="alert alert-danger" role="alert">
    {{Session::get('fail')}}
</div>
@endif
<section class="vh-10" style="background-color: #a5b8c5;">
    <div class="container py-4 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                {{-- https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp --}}
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="{{route('loginUser')}}" method="POST">
                    @csrf
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">DataEntry</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" name="email" class="form-control form-control-lg  @error('email')is-invalid @enderror" />
                      <label class="form-label" for="form2Example17">Email address</label>
                      @error('email')
                      <div class="invalid-feedback">
                         {{$message}}
                      </div>
                      @enderror
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" name="password" class="form-control form-control-lg @error('password')is-invalid @enderror" />
                      <label class="form-label" for="form2Example27">Password</label>
                      @error('password')
                      <div class="invalid-feedback">
                         {{$message}}
                      </div>
                      @enderror
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                    </div>


                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register"
                        style="color: #393f81;">Register here</a></p>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
