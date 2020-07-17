    
    @extends('front.auth.base_auth')
    
    @section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="post" action="{{url('/login_account')}}">
                {{ csrf_field() }}
                    <div class="card card-login card-hidden">
                    @if (Session::has('success'))
                        <div class="alert alert-primary">
                            <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                <i class="nc-icon nc-simple-remove"></i>
                            </button>
                            <span>
                                <b> Success - </b> {{Session::get('success')}}
                            </span>
                        </div>
                    
                    @endif
                    @if (Session::get('warning'))
                            
                        <div class="alert alert-warning">
                            <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                <i class="nc-icon nc-simple-remove"></i>
                            </button>
                            <span>
                                <b> Warning - </b> {{Session::get('warning')}}
                            </span>
                        </div>
                    @endif
                    @if (Session::get('error'))
                        <div class="alert alert-danger">
                            <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                <i class="nc-icon nc-simple-remove"></i>
                            </button>
                            <span>
                                <b> Error - </b> {{Session::get('error')}}
                            </span>
                        </div>
                    @endif
                    {{-- <div class="card-header card-header-danger text-center">
                        <img src="https://reactnative.dev/img/header_logo.svg" width="50px" alt="">
                        <hr>
                        <h4 class="card-title">Login Member</h4>
                        <div class="social-line">
                            <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div> --}}
                    <div class="card-body ">
                        {{-- <p class="card-description text-center">Or Be Classical</p> --}}
                        
                        <img src="https://reactnative.dev/img/header_logo.svg" width="50px" alt="">
                        <h4><b>Premium Signal Access</b></h4>
                        <small>Enter your detail to Login</small>
                        
                        <span class="bmd-form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">email</i>
                                </span>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="Email...">
                            </div>
                        </span>
                        <span class="bmd-form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="Password...">
                            </div>
                        </span>
                    </div>
                    <div class="card-footer justify-content-center">
                        <button  type="submit" class="btn btn-info btn-link btn-lg">
                            <i class="material-icons">fingerprint</i>
                            <b>Login</b>
                        </button>
                    </div>
                    
                    <p class="card-description text-center">Forgot password ? <a href="#" class="text-success">Reset</a>   </p>

                    <p class="card-description text-center">Don't have an account?
                         <a href="{{url('/register')}}" class="text-success">Signup</a> </p>
                </div>
            </form>
            </div>
        </div>
    </div>


    @endsection