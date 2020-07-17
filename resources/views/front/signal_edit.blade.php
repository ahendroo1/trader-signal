@extends('front.master.base')
@section('content')



    <div class="row">
        <div class="col-lg-12">
            
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
            
        </div>

        @foreach ($signal_edit as $item)


        <div class="col-lg-12">
            <div class="card stacked-form">

                <div class="card-header ">
                    <h4 class="card-title">Edit Signal {{$item->currency_name}}  </h4>
                </div>
               
                <div class="card-body ">
                    <form method="post" action="{{url('/updatesignal'.'/'.$item->id)}}" enctype="multipart/form-data" novalidate>
                        {{ csrf_field() }}

                        
                        <div class="row">
                            <div class=" col-lg-6">
                                <label for=""></label>
                                <select name="buy_sell" class="form-control" id="">
                                    
                                    <option value="{{$item->buy_sell}}" selected>{{$item->buy_sell}}</option>
                                    <option value="BUY">BUY</option>
                                    <option value="SELL">SELL</option>
                                    <option value="BUY LIMIT">BUY LIMIT</option>
                                    <option value="BUY STOP">BUY STOP</option>
                                    <option value="SELL LIMIT">SELL LIMIT</option>
                                    <option value="SELL STOP">SELL STOP</option>
                                    
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <label for=""></label>
                                <input type="number" class="form-control"  name="buy_sell_number" placeholder="00" value="{{$item->buy_sell_number}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Currency Name</label>
                            <select class="form-control" name="currency_name">
                                <option value="{{$item->currency_name}}" selected>{{$item->currency_name}}</option>
                                <option value="EURUSD">EURUSD</option>
                                <option value="GBPUSD">GBPUSD</option>
                                <option value="USDJPY">USDJPY</option>
                                <option value="XAUUSD">XAUUSD</option>
                                <option value="HKK50">HKK50</option>
                                <option value="USDCHF">USDCHF</option>
                                <option value="AUDUSD">AUDUSD</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Take Profit</label>
                            <input type="number" placeholder="00" class="form-control" name="take_profile" value="{{$item->take_profile}}" required>
                        </div>
                        <div class="form-group">
                            <label>Stop Lost</label>
                            <input type="number" placeholder="00" value="{{$item->stop_lost}}" class="form-control" name="stop_lost" required>
                        </div>
                        <div class="form-group">
                            <label>Reason Open</label>
                            <textarea rows="14" cols="50" rows="10" placeholder="Reason Open" class="form-control" name="description"  id="editor" required>{{$item->description}}</textarea>
                        </div>
                        

                        <div class="row">

                            <div class=" col-lg-6">
                                <label for="">Status</label>
                                <select name="status" class="form-control" id="">
                                    @if ($item->status == 1)
                                        <option value="1" selected>Active</option>
                                        <option value="2">Finish</option>
                                    @elseif($item->status == 2)
                                        <option value="1" selected>Active</option>
                                        <option value="2" selected>Finish</option>
                                    @endif
                                    
                                </select>
                            </div>

                            <div class="col-lg-6">
                                    
                                <div class="form-group">
                                    <label for="">Date Time</label>
                                    <div class="form-group">
                                        <input id="datetimepicker" name="date_time" value="{{$item->date_time}}" type="text" class="form-control datetimepicker" placeholder="Datetime " style="">
                                    </div>
                                </div>
                            </div>
                        
                        </div>

                        <div class="form-group">
                            <label>Reason Close</label>
                            <textarea rows="14" cols="50" rows="10" placeholder="Reason Close" class="form-control" name="description_close"  id="editor2" required>{{$item->description_close}}</textarea>
                        </div>
                        
                        <div class="row">

                            <div class=" col-lg-3 col-md-12" >
                                
                                <label for="">Result</label>
                                <input type="number" placeholder="00" class="form-control" name="result" value="{{$item->result}}" required>
                                <small class="text-danger">*Pips</small>
                            </small>
                            
                        
                        </div>
                </div>

                <div class="card-footer ">
                    <input type="submit" class="btn btn-fill btn-sm btn-primary pull-right" value="Update Signal" />
                </div>

                    </form>
            </div>
        </div>

        @endforeach
  

    </div>
    <!-- Button trigger modal -->


@endsection

@section('footer-content')

    <script src="{{asset('assets/js/plugins/bootstrap-table.js')}}"></script>
    <!--  DataTable Plugin -->
    <script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
    <!--  Full Calendar   -->
    <script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>

    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    <script type="text/javascript">

        $(document).ready(function() {

            
            CKEDITOR.replace('editor', {
                filebrowserUploadUrl: "{{route('post.image', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
            CKEDITOR.replace('editor2', {
                filebrowserUploadUrl: "{{route('post.image', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });

        });

    </script>
    
@endsection