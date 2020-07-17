@extends('front.master.base')

@section('content')
                                
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
                            
                        <form class="form" method="post" action="{{url('member/update/data'.'/'.$data->user_id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-user">
                                       
                                        <div class="card-header no-padding">
                                            <div class="card-image">
                                            {{-- <img src="{{asset('assets/img/full-screen-image-3.jpg')}}" alt="..."> --}}
                                            </div>
                                        </div>
                                        <style>
                                            .file  {
                                                display: none;
                                            }

                                        </style>
                                        <div class="card-body ">
                                            <div class="author">

                                                <div class="control">
                                                    <input class="file" name="profileimage" id="file" type="file"/>
                                                    <label for="file">
                                                        <img  class="avatar border-gray" src="{{$data->member_image}}" alt="...">
                                                        <br>
                                                        <span class="filetext btn btn-success btn-sm">
                                                            <i class="fa fa-upload"></i>
                                                        </span>
                                                    </label>
                                                </div>

                                                <h5 class="card-title"> {{$data->name}} </h5>
                                                <span class="card-description text-info">
                                                    {{$data->role == 1 ? 'Basic' : 'Premium'}}
                                                </span>
                                            </div>
                                            <p class="card-description text-center">
                                                {{$data->email}}
                                                {{-- <br>  --}}
                                            </p>
                                        </div>
                                        <div class="card-footer ">
                                            {{-- <hr> --}}
                                            {{-- <div class="button-container text-center">
                                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                                    <i class="fa fa-facebook-square"></i>
                                                </button>
                                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                                    <i class="fa fa-twitter"></i>
                                                </button>
                                                <button href="#" class="btn btn-simple btn-link btn-icon">
                                                    <i class="fa fa-google-plus-square"></i>
                                                </button>
                                            </div> --}}
                                        </div>
                                    </div>
                                        
                                </div>
                                <div class="col-md-8 col-sm-6">
                                        <div class="card ">
                                            <div class="card-header ">
                                                <div class="card-header">
                                                    <h4 class="card-title">Profile</h4>
                                                </div>
                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" name="email"  class="form-control" placeholder="Email" value="{{$data->email}}"> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <div class="form-group">
                                                            <label>Telephone</label>
                                                            <input type="number" name="phone" class="form-control"  placeholder="Telephone" value="{{$data->telephone}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" name="first_name" class="form-control" placeholder="Company" value="{{$data->first_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text"  name="last_name"  class="form-control" placeholder="Last Name" value="{{$data->last_name}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <textarea type="text"  name="address"  class="form-control" placeholder="Home Address" >{{$data->address}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input type="text"  name="city"  class="form-control" placeholder="City" value="{{$data->city}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 px-1">
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <input type="text" name="country" class="form-control" placeholder="Country" value="{{$data->country}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pl-1">
                                                        <div class="form-group">
                                                            <label>Postal Code</label>
                                                            <input type="number" name="postal_code" class="form-control" placeholder="ZIP Code" value="{{$data->postal_code}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>About Me</label>
                                                            <textarea rows="4" cols="80" name="about"  class="form-control" placeholder="Here can be your description" >{{$data->about_me}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <button type="submit" class="btn btn-info btn-fill pull-right btn-sm">Update Profile Member</button>

                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

@endsection

@section('footer-content')
    
<script>
    $('#file').change(function(e) {
      var filename = e.target.files[0].name
      $('.filetext').html(filename);
    });
    </script>
@endsection