
    
  <nav class="navbar navbar-color-on-scroll navbar-transparent bg-warning   fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#">
            <img src="https://reactnative.dev/img/header_logo.svg" width="30px" alt="">
            {{-- Signals  --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse ">
        <ul class="navbar-nav ml-auto ">
         
          <li class="dropdown nav-item">
            <a href="{{url('/')}}" class=" nav-link" >
              <i class="material-icons">home</i> Home
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="{{url('/signal')}}" class=" nav-link" >
              <i class="material-icons">signal_wifi_4_bar</i> Signals
            </a>
          </li>


          @if (auth()->user())
                
            <li class="dropdown nav-item">
                <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
                    <div class="profile-photo-small">
                        <img src="{{ auth()->user()->role == 1 ? memberData()->member_image : 'https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png'}}" alt="Circle Image" class="rounded-circle img-fluid">
                    </div>
                    <div class="ripple-container"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <h6 class="dropdown-header">Hello {{auth()->user()->name}}</h6>
                    

                    @if (auth()->user()->role == 1)
                    <a href="{{url('/myprofile')}}" class="dropdown-item">
                        <i class="fa fa-user pr-1"></i>
                        My Profile
                    </a>
                    <a href="{{url('/signal')}}" class="dropdown-item">
                        <i class="fa fa-rss pr-1"></i>
                        Signals
                    </a>

                    @elseif(auth()->user()->role == 2)
                    <a href="{{url('/dashboard')}}" class="dropdown-item">
                        <i class="fa fa-user pr-1"></i>
                        Dashboard
                    </a>
                    <a href="{{url('/content')}}" class="dropdown-item">
                        <i class="fa fa-rss pr-1"></i>
                        Signals
                    </a>
                    @endif
                    <a href="{{url('/logout')}}" class="dropdown-item">
                        <i class="fa fa-sign-out pr-1"></i>
                        Sign out
                    </a>
                </div>
            </li>

          @else
            
            <li class="dropdown nav-item">
                <a href="{{url('/login')}}" class=" nav-link" >
                <i class="material-icons">fingerprint</i> Signin
                </a>
            </li>
            
            <li class="button-container nav-item iframe-extern">
                <a href="{{url('/register')}}" class="btn  btn-info  btn-round btn-block">
                <i class="material-icons">input</i> Signup
                </a>
            </li>

          @endif
        
        </ul>
      </div>
    </div>
  </nav>

