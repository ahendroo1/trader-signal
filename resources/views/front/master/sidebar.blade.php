
    <div class="sidebar" data-color="azure" data-image="{{asset('assets/img/sidebar-5.jpg')}}">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
        -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('/')}}" class="simple-text logo-mini">
                    <img src="{{asset('assets/img/signal-logo.png')}}" width="100%" alt="">
                </a>
                <a href="{{url('/')}}" class="simple-text logo-normal">
                    Signal
                </a>
            </div>
            <div class="user">
                <div class="photo">
                    <img src="{{ auth()->user()->role == 1 ? memberData()->member_image : asset('assets/img/user-default.png')  }}" />
                </div>
                <div class="info ">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        <span>{{ auth()->user()->name }}
                            <b class="caret"></b>
                        </span>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">

                            <li>
                                <a class="profile-dropdown" href="{{url('/myprofile')}}">
                                    <span class="sidebar-mini"><i class="fa fa-user"></i></span>
                                    <span class="sidebar-normal">My Profile</span>
                                </a>
                            </li>

                            <li>
                                <a class="profile-dropdown" href="{{url('/logout')}}" >
                                    <span class="sidebar-mini"><i class="nc-icon nc-button-power"></i></span>
                                    <span class="sidebar-normal"> Log out</span>
                                </a>
                            </li>
                            
                            {{-- <li>
                                <a class="profile-dropdown" href="#pablo">
                                    <span class="sidebar-mini">S</span>
                                    <span class="sidebar-normal">Settings</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                @if(auth()->user()->role == 1)
                
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/signal')}}">
                        <i class="fa fa-rss"></i>
                        <p>Signal</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/portofolio')}}">
                        <i class="fa fa-microchip"></i>
                        <p>Portofolio</p>
                    </a>
                </li>

               
                @elseif(auth()->user()->role == 2)
                
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/dashboard_admin')}}">
                        <i class="nc-icon nc-chart-pie-35"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/content')}}">
                        <i class="fa fa-rss"></i>
                        <p>Signal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/member')}}">
                        <i class="fa fa-user"></i>
                        <p>Member</p>
                    </a>
                </li>


                @endif
            
                
            </ul>
        </div>
    </div>