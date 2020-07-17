@extends('users.base')
@section('user-content')


  <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('{{asset('assetsfront/files/assets/img/bg0.jpg')}}');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Signals
              {{-- <span class="pro-badge"> --}}
                <i class="fa fa-rss"></i>
              {{-- </span> --}}
            </h1>
            <h3 class="title">Start the Development With A Badass Bootstrap 4 UI Kit inspired by Material Design.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="section pt-0">
        <div class="container ">
            <div class="row ">
                <table class="table table-hover">
                    <tbody>
                        {{-- {{$i = 1}} --}}
                        @foreach (signalAll() as $key => $item)

                        @if ($key++ == 5)
                            @break
                        @endif

                        <tr>
                            <td>
                                <b>{{$item->currency_name}}</b>
                                <br>
                                <small>{{$item->date_time}}</small>
                            </td>

                            @if ($item->status == 1)
                                <td><b class="text-success">Active</b></td>
                            @endif
                            
                            @if ($item->status == 2)
                                <td><b class="text-danger">Finish</b></td>
                            @endif

                            <td>
                                    
                                @if ($item->result > 0)
                                    <b class="text-success">{{$item->result}}</b>
                                @elseif($item->result < 0)
                                
                                    <b class="text-danger">{{$item->result}}</b>
                                @else 
                                    <b>-</b>
                                @endif
                            </td>
                            
                            <td class="td-actions text-right">
                                <a href="#" rel="tooltip" class="text-muted">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">


            {{-- <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h4 class="description text-center">Material Kit PRO is a Bootstrap UI Kit with a fresh, new design inspired by Google&apos;s Material Design. You asked for it, so we built it. It&apos;s a great pleasure to introduce to you the material concepts in an easy to use and beautiful set of components.</h4>
                </div>
            </div> --}}
            
            <div class="features-1">
                <div class="row">
                    <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-rose">
                        <i class="material-icons">apps</i>
                        </div>
                        <h4 class="info-title">Huge Number of Components</h4>
                        <p>Every element that you need in a product comes built in as a component. All components fit perfectly with each other and can take variations in colour.</p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-info">
                        <i class="material-icons">view_day</i>
                        </div>
                        <h4 class="info-title">Multi-Purpose Sections</h4>
                        <p>Putting together a page has never been easier than matching together sections. From team presentation to pricing options, you can easily customise and built your pages.</p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-success">
                        <i class="material-icons">view_carousel</i>
                        </div>
                        <h4 class="info-title">Example Pages</h4>
                        <p>If you want to get inspiration or just show something directly to your clients, you can jump start your development with our pre-built example pages.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-components">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-12">
            <h3 class="title">Basic Components
              <h6 class="description">The core elements of your website</h6>
              <h5 class="description">We re-styled every Bootstrap element to make it resemble Material Design and also fit with each other. All the Bootstrap components that you need in a development have been re-design with the new look. Besides the numerous basic elements, we have also created additional classes. All these items will help you take your project to the next level.
              </h5>
            </h3>
          </div>
          <div class="col-lg-6 col-md-12 ml-auto">
            <div class="image-container">
              <img class="components-macbook" src="{{asset('assetsfront/files/assets/img/section-components/laptop-basics.png')}}" alt="" />
              <img class="table-img" src="{{asset('assetsfront/files/assets/img/section-components/table.jpg')}}" alt="" />
              <img class="share-btn-img" src="{{asset('assetsfront/files/assets/img/section-components/share-btn.jpg')}}" alt="" />
              <img class="coloured-card-btn-img" src="{{asset('assetsfront/files/assets/img/section-components/coloured-card-with-btn.jpg')}}" alt="" />
              <img class="coloured-card-img" src="{{asset('assetsfront/files/assets/img/section-components/coloured-card.jpg')}}" alt="" />
              <img class="social-img" src="{{asset('assetsfront/files/assets/img/section-components/social-row.jpg')}}" alt="" />
              <img class="pin-btn-img" src="{{asset('assetsfront/files/assets/img/section-components/pin-btn.jpg')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-10 ml-auto mr-auto">
            <div class="section-description">
              <h3 class="title">Content Areas</h3>
              <h6 class="description">For Areas that Need More Space</h6>
              <h5 class="description">If you need elements such as tables, comments, description areas, tabs and many others, we&apos;ve got you covered. We took into consideration multiple use cases and came up with some specific elements that you will love to use. They&apos;re beautiful and easy to use for the end user navigating your website. </h5>
            </div>
          </div>
          <div class="col-lg-7 col-md-12 ml-auto">
            <div class="image-container">
              <img class="ipad-img" src="{{asset('assetsfront/files/assets/img/section-components/presentation-ipad.jpg')}}">
              <img class="area-img add-animation animated" src="{{asset('assetsfront/files/assets/img/section-components/ipad-comments.jpg')}}">
              <img class="info-img add-animation animated" src="{{asset('assetsfront/files/assets/img/section-components/ipad-table.jpg')}}">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-free-demo">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-8 ml-auto mr-auto">
            <div class="icon-github">
              <i class="fa fa-rss"></i>
            </div>
            <div class="section-description">
              <h2 class="title">Access signal </h2>
              <h5 class="description">Do you want to test and see the benefits of this kit before purchasing it? You can give the demo version a try. It features enough basic components for you to get a feel of the design and also test the quality of the code. Get it free on GitHub!</h5>
              <div class="github-section">
                <div class="git-demo float-left">
                  <a href="#" class="btn btn-warning btn-round">Get Started now</a>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 ml-auto">
            <div class="row">
              <div class="col-md-5 ml-auto">
                <div class="card card-pricing card-plain">
                  <div class="card-body">
                    <h3 class="card-title"><small>Free</small> Basic</h3>
                    <ul>
                      <li> <b>60</b> Signals</li>
                      <li> <b>30</b> Currency</li>
                      <li><i class="material-icons text-danger">close</i> Buy Sell</li>
                      <li><i class="material-icons text-danger">close</i> Stop Lost</li>
                      <li><i class="material-icons text-danger">close</i> Finish signals</li>
                      <li><i class="material-icons text-danger">close</i> Pips</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-5 ml-auto">
                <div class="card card-pricing card-plain">
                  <div class="card-body">
                    <h3 class="card-title"> <small>Pro</small> Premium </h3>
                    <ul>
                        <li> <b>100</b> Signals</li>
                        <li> <b>30</b> Currency</li>
                        <li><i class="material-icons text-success">check</i> Buy Sell</li>
                        <li><i class="material-icons text-success">check</i> Stop Lost</li>
                        <li><i class="material-icons text-success">check</i> Finish signals</li>
                        <li><i class="material-icons text-success">check</i> Pips</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--     *********    END FEATURES 5      *********      -->
    <!--     *********     FEATURES 5      *********      -->
  </div>
  <div class="section section-pricing pricing-5 iframe-extern" id="pricing">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Ready to start Signals ?</h2>
          
        </div>
        <div class="col-md-8 ml-auto mr-auto text-center">
          <div class="tab-content text-center">
            <div class="tab-pane active show" id="profile">
              <p class="description">
                Good for personal websites, school projects, startups or any other project where your users will not be charged for using it. Create one single website/app for one client.
              </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="card card-pricing card-margin">
                    <div class="card-body">
                        <h3 class="card-title"> <small>Free</small> Basic </h3>
                        <h1 class="card-title"><small>$</small>12 <small>/month</small> </h1>
                        <ul>
                            <li> <b>60</b> Signals</li>
                            <li> <b>30</b> Currency</li>
                            <li><i class="material-icons text-success">check</i> Buy Sell</li>
                            <li><i class="material-icons text-success">check</i> Stop Lost</li>
                            <li><i class="material-icons text-success">check</i> First Currency</li>
                            <li><i class="material-icons text-danger">close</i> Open all Signals</li>
                        </ul>
                        <a href="#" class="btn btn-info btn-round">
                            Get started now
                        </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-pricing">
                    <div class="card-body" style="background-color:#ecce6d;">
                        <h3 class="card-title"> <small>Pro</small> Premium </h3>
                      <h1 class="card-title"><small>$</small>139 <small>/month</small> </h1>
                      <ul>
                        <li> <b>100</b> Signals</li>
                        <li> <b>30</b> Currency</li>
                        <li><i class="material-icons text-success">check</i> Buy Sell</li>
                        <li><i class="material-icons text-success">check</i> Stop Lost</li>
                        <li><i class="material-icons text-success">check</i> First Currency</li>
                        <li><i class="material-icons text-success">check</i> Pips</li>
                        <li><i class="material-icons text-success">check</i> Open all Currency</li>
                        <li><i class="material-icons text-success">check</i> Premium Support</li>
                      </ul>
                      <a href="#" class="btn btn-info btn-round">
                        Get Started Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 ml-auto mr-auto text-center">
          <p class="description">You have and <b>Premium Support </b>and<b> Open Signals</b> on each package. You also have <b>30 days</b> to request a refund if you&apos;re not happy with your purchase.</p>
        </div>
      </div>
    </div>
    <div class="social-line text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4 class="title">Thank you for, sharing on :</h4>
            <a href="#pablo" id="twitter" class="btn btn-twitter btn-round">
              <i class="fa fa-twitter"></i> Twitter
            </a>
            <a href="#pablo" id="facebook" class="btn btn-facebook btn-round">
              <i class="fa fa-facebook-square"></i> Facebook
            </a>
            <a href="#pablo" id="google" class="btn btn-google btn-round">
              <i class="fa fa-google-plus"></i> Google
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection

  