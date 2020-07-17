@extends('front.auth.base_auth')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-10 ml-auto mr-auto">
        <div class="card card-signup">
          <h2 class="card-title text-center">Register</h2>
          <div class="card-body">
            <div class="row">
              <div class="col-md-5 ml-auto">
                <div class="info info-horizontal pt-0">
                  <div class="icon icon-rose">
                    <i class="material-icons">timeline</i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Signals</h4>
                    <p class="description">
                      We've created the marketing campaign of the website. It was a very interesting collaboration.
                    </p>
                  </div>
                </div>
                <div class="info info-horizontal pt-0">
                  <div class="icon icon-primary">
                    <i class="material-icons">code</i>
                  </div>
                  <div class="description">
                    <h4 class="info-title">Premium Signals</h4>
                    <p class="description">
                      We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                    </p>
                  </div>
                </div>


              </div>
              <div class="col-md-5 mr-auto">

                <form class="form" method="post" action="{{url('register_post')}}">
                  {{ csrf_field() }}
                  <div class="form-group bmd-form-group pt-0">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                      </div>
                      <input name="username" type="text" class="form-control" placeholder="First Name..." required>
                    </div>
                  </div>
                  <div class="form-group bmd-form-group pt-0">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">mail</i>
                        </span>
                      </div>
                      <input name="email" type="email" class="form-control" placeholder="Email..." required>
                    </div>
                  </div>
                  <div class="form-group bmd-form-group pt-0">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input name="password" type="password" placeholder="Password..." class="form-control" required>
                    </div>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" >
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                      I agree to the <a href="#something">terms and conditions</a>.
                    </label>
                  </div>
                  <div class="text-center pt-2">
                    <button type="submit" class="btn btn-info btn-round " style="width:100%">Signup Now</button>
                  </div>
                  
                  <div class="text-center pt-4">
                    <p>Already have an account? <a href="/login" class="text-primary">Login</a></p>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection