<nav class="navbar navbar-expand-sm  ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-minimize">
                {{-- <button id="minimizeSidebar" class="btn btn-danger btn-fill btn-round btn-icon d-none d-lg-block">
                    <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                    <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                </button> --}}
            </div>
            <a class="navbar-brand d-lg-none " href="#pablo" style="width: 25px">
                <img src="{{asset('assets/img/signal-logo.png')}}"  alt="">
            </a>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            {{-- <ul class="nav navbar-nav mr-auto">
                <form class="navbar-form navbar-left navbar-search-form" role="search">
                    <div class="input-group">
                        
                        <i class="nc-icon nc-zoom-split"></i>
                        <input type="text" value="" class="form-control" placeholder="Search...">
                        
                    </div>
                </form>
            </ul> --}}
            <ul class="navbar-nav">
               
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="nc-icon nc-bell-55"></i>
                        <div class="alert-id">

                            <span class="notification">5</span>
                            <span class="d-lg-none">Notification</span>

                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        @foreach (signalNewUpdate() as $item)
                            <a class="dropdown-item alert-info" href="#">
                                <small>{{$item->currency_name}}</small>
                                <br>
                                <span style="font-size:10px">{{$item->buy_sell_number}}</span>
                                <span class="text-muted">{{$item->date_time}}</span>
                            </a>
                        @endforeach
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
    