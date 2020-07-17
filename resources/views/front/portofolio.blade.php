@extends('front.master.base')

@section('content')
    
<div class="row">

    <div class="col-sm-12 col-md-12 col-lg-6 filter-signal" >

        <div class="card data-tables">
            <div class="card-header">
    
                <div class=" pull-right" >
                    <button type="button" class="btn btn-info pull-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-filter"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="px-3 py-3" id="check-filter" >

                        </div>
                        <div class="dropdown-divider"></div>
                        <button type="button" id="filters-signal" data-start="" data-end="" class="btn btn-primary btn-sm pull-right mx-2">Filter</button>
                    </div>
                </div>
                <div class="form-group pull-right col-lg-6" id="reportrange">
                    <input type="text" name="dayrange" class="form-control " placeholder="Day signal" />
                </div>
                
                <b class="">Portofolio Signal</b>
                <p class="text-muted">Search and filter update new signals</p>
                <!-- Button trigger modal -->

            </div>
            <div class="card-body  table-no-bordered table-hover dataTable dtr-inline table-full-width">
                <div class="toolbar">
    
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
    
                </div>
                    
                <div style="display:block;overflow:auto;height:600px;">
                    <table  class="table   table-hover p-0 m-0" cellspacing="0" width="100%" >
                        <thead style="width:100%" >
                            <tr>
                                <th class="text-dark" style="font-size:14px;"><b>Pair</b></th>
                                <th class="text-dark text-center" style="font-size:14px;"><b>Status</b></th>
                                <th class="text-dark text-center " style="font-size:14px;"><b>Result</b></th>
                            </tr>
                        </thead>
    
                        <tbody id="body-filter-signal" >
                            
                        </tbody>
                       
                    </table>
                </div>
                <div class="container pt-3">
                    <p>Total Result : <b id="totalresult"></b> </p>
                </div>
    
            </div>
        </div>
    </div>
    
    <div class="col-sm-12 col-md-12 col-lg-6 filter-currency" >
    
        <div class="card data-tables">
            <div class="card-header">
    
                <b class="">Filter Signal</b>
                <p class="text-muted">Filter update new signals</p>
                <!-- Button trigger modal -->
                
            </div>
            <div class="card-body  table-no-bordered table-hover dataTable dtr-inline table-full-width">
                <div class="toolbar">
    
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                    
                <div style="display:block;overflow:auto;height:600px;">
                    
                    <table  class="table   table-hover p-0 m-0" cellspacing="0" width="100%" >
                        <thead style="width:100%" >
                            <tr>
                                <th class="text-dark" style="font-size:14px;"><b>Pair</b></th>
                                <th class="text-dark text-center" style="font-size:14px;"><b>Status</b></th>
                                <th class="text-dark text-center " style="font-size:14px;"><b>Result</b></th>
                            </tr>
                        </thead>
                        
                        <tbody id="body-filter-signal-currency" >
                            
                        </tbody>
                    </table>
                </div>
                <div class="container pt-3">
                    <p>Total Result : <b id="totalresultfilter"></b> </p>
                </div>
    
            </div>
        </div>
    </div>
</div>

<div class="modal" id="modal-req-premium" data-backdrop="static"  role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            
            <div class="modal-body text-center">
                <p class="currency_req"></p>
                <div class="alert_req_currency">
                    <i class="fa fa-spinner fa-spin" id="alert-spinner"></i>
                </div>
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary btn-sm" >Close</button> --}}
                <button type="button" class="btn btn-warning btn-sm float-right" id="getpremiumdone" data-dismiss="modal" style="display:none;" >Done</button>
            </div>
        </div>
    </div>
</div>
        
<div class="modal fade" id="nonpremium" tabindex="1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            
            <div class="modal-body">
                <h3 class="currency_req-modal text-center"></h3>
                <h6 class="card-price text-center text-danger mb-2">Ooops! <br> <span class="period text-dark mt-1"> You must subscribe our premium signal to see this, please subscribe first from the button below</span></h6>
                                
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"> <i class="fa fa-arrow-left"></i> Back</button>
                <button type="button" class="btn  btn-primary  btn-sm pull-right" id="btngetpremium-modal"> Request Premium </button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detailpair" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> <b id="signal-currency-modal"></b> </h5>
                <h5 class="modal-title pull-right text-primary" id="exampleModalLongTitle"> <b id="signal-buysell-modal"></b> </h5>
                {{--                         
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body">
                
                
                        
                    <div class="card mb-1">
                        <div class="card-body">
                            <h6 class="pull-left" id="">
                                Take profit
                            </h6>
                            <b class="pull-right" style="color:green" id="take-profit-modal">
                            </b>
                            
                        </div>
                    </div>
                    
                    <div class="card mb-1">
                        <div class="card-body">

                            <h6 class="pull-left" id="">
                                Stop Lost
                            </h6>
                            <b class="pull-right text-danger" id="stop-lost-modal">
                            </b>
                            
                        </div>
                    </div>
                    <div class="card mb-1">
                        <div class="card-body">

                            <h6 class="pull-left" id="">
                                Date Open
                            </h6>
                            <small class="pull-right " id="date-open-modal">
                            </small>
                            
                        </div>
                    </div>
                    <div class="card mb-1">
                        <div class="card-header">
                            <h6 class="pull-left">Reason Open</h6>
                        </div>
                        <div class="card-body" id="signal-desc-modal">

                        </div>
                    </div>
                    
                    <div class="card mb-1">
                        <div class="card-header">

                            <h6 class="pull-left" id="">
                                Result
                            </h6>
                            <b class="pull-right" id="result-modal">
                            </b>
                            
                        </div>
                    </div>
                    
                    
                    <div class="card mb-1">
                        <div class="card-header">
                            <h6 class="pull-left ">Reason Close</h6>
                        </div>
                        <div class="card-body" id="signal-desc-close-modal">

                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-body">

                            <h6 class="pull-left" id="">
                                Date Finished
                            </h6>
                            <small class="pull-right " id="date-finish-modal">
                            </small>
                            
                        </div>
                    </div>

                    
                    {{-- <div class="card" >
                        <div class="card-body text-center text-white" id="signal-status">
                           
                        </div>
                    </div> --}}
                    

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"> <i class="fa fa-arrow-left"></i> Back</button>
                <h5 id="status-modal">  </h5>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>



@endsection

@section('footer-content')
        
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


<script src="{{asset('assets/js/plugins/bootstrap-table.js')}}"></script>
<!--  DataTable Plugin -->
<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<!--  Full Calendar   -->
<script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>



<style>
    #datatables_wrapper{
        padding: 0px;
    }
    .dataTables_length{
        padding:20px;
    }
    .dataTables_filter{
        padding:20px;

    }
    .dataTables_info{
        padding:10px;
    }
    #datatables_paginate{
        padding:10px;
    }
</style>
<script>

  
        $('#datatablesfilter').DataTable({
            "deferRender": true,
            "ajax": "{{url('/data_signal')}}",
            "columns": [
                { "render": function ( data, type, row ) { 
                        var date_finish =  new Date(row.date_time).getFormatDate();
                        return '<b>'+row.currency_name+'</b><br>'+'<small>'+date_finish+'</small>'
                    },
                    
                },
                { "render": function ( data, type, row ) { 
                
                        var status = row.status == 1 ? '<p style="color:green">Active</p>' : '<p class="text-primary">Finished</p>';
                        return status
                    },
                    
                    "className" : "text-center"  
                },
                { "render": function ( data, type, row ) { 
                        return  row.result > 0 ? '<p><b style="color:green">+'+row.result+'  </b> <small class="text-primary">Pips</small></p>' : row.result < 0 ? '<p><b style="color:red">'+row.result+' </b><small class="text-primary">Pips</small></p>' : '<p><b>-</b></p>'
                    },
                    "className" : "text-center"  
                },

                // { "render": function ( data, type, row ) { 
                //         var toolsfilter = '  <button type="button" data-id="'+row.id+'" data-currency="'+row.currency_name+'" class="btn btn-link btn-warning edit "><i class="fa fa-share-square-o"></i></button> '
                //         return  toolsfilter
                //     },
                    
                //     "className" : "text-center"  
                // },
                
                //     "className" : "text-center" 
                
            ],
            
            
            
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search signals",
            }
        });
        var table = $('#datatablesfilter').DataTable();
        // Edit record
        table.on('click', '.edit', function() {
            var id = $(this).data('id')
            var currency = $(this).data('currency')
            listcurrency(id, currency)
        });
        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });
        //Like record

        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        table.on( 'click', 'tr', function () {

            var data = table.row( this ).data();
            listcurrency(data.id, data.currency_name)
        } );

    // getcurrencymember('all')

        $(".signal-detail").hide()
        $("#member_currency").hide()
        $("#alert-spinner").hide()
        $("#alert-success").hide()
        $("#alert-danger").hide()
        $('#currencymember').on('click', '#getcurrencymember', function(){

            closedetailsignal()
            if($(this).data('currency') === 'All Pair' ){
                $('#member_all_currency').show()
                $('#member_currency').hide()
            }else{
                $('#member_currency').show()
                $('#member_all_currency').hide()
                getcurrencymember($(this).data('currency'))
            }
        
        })
    
    Date.prototype.getFormatDate = function() {
        var monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
        var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        return  days[this.getDay()] + ', ' + this.getDate() + ' ' + monthNames[this.getMonth()] + ' ' + this.getFullYear() + ' ' + this.getHours() + ':' + this.getMinutes() ;
    }

    function getcurrencymember(currency){
        
       
            $.get( "{{url('signalcurrency')}}/" + currency , function( data ) {
            
                var html_currency = "";
                var totalpips = 0;
                for (var i = 0; i < data.length; i++) {
                    // const element = array[i];
                    // $("#member_currency").html('<tr onclick="showsignal('+data[i].id+')"> <td>'+data[i].currency_name+' <br>'+data[i].date_time+' </td><td>'+data[i].status+'</td><td><i class="nc-icon nc-stre-right"></i></td></tr>');
                    
                    let date_finish =  new Date(data[i].date_time).getFormatDate();
                    let status = data[i].status == 1 ? "<b style='color:green'>Active</b>" : "<b class='text-primary'>Finished</b>";
                    let status_css = data[i].status == 1 ? "success" : "danger";
                    let signal_result =  data[i].result > 0 ? '<p><b style="color:green">+'+data[i].result+' <small class="text-primary">Pips</small> </b> </p>' : data[i].result < 0 ? '<p><b style="color:red">'+data[i].result+' <small class="text-primary">Pips</small> </b></p>' : '<p><b>-</b></p>'; 
                    html_currency += '<tr id="listcurrency" data-id="'+data[i].id+'" data-currency="'+data[i].currency_name+'" > <td><b> '+data[i].currency_name+' </b><br><small>'+date_finish+'</small> </td><td class="text-center">'+ status +'</td><td class="text-center">'+signal_result+'</td></tr>'
                    totalpips += data[i].result
                }

                var cu = currency === 'all' ? 'All Pair' : currency ;
                var head_currency = ' <div class="card strpied-tabled-with-hover"><div class="card-header "><b>'+cu+'</b><p class="card-category"> '+data.length+' New signal available </p></div><div class="card-body table-full-width table-responsive" style="display:block;overflow:auto;height:600px; width:100%;"><table class="table table-hover " > <thead><tr> <th class="text-dark"><p class="mb-0"><b>Pair</b></p></th> <th class="text-center text-dark"><p class="mb-0"><b>Status</b></p></th><th class="text-center text-dark"><p class="mb-0"><b>Result</b></p></th></tr></thead><tbody id="member_currency">'
                var pipstotal = totalpips > 0 ? '<b style="color:green">+'+totalpips+' <small class="text-primary">Pips</small></b>' : totalpips < 0 ? '<b style="color:red">'+totalpips+' <small class="text-primary">Pips</small></b>' : '<b>-</b>';
                var foo_currency = ' </tbody> </table> </div> <div class="container"> <p class="pt-2">Total Result : '+pipstotal+'</p></div> </div>'
                
                $("#member_currency").html(head_currency+html_currency+foo_currency)
            })
    }

    
    $('#body-filter-signal').on('click', '#listcurrency', function(){
        
        var m_currency = $(this).data('currency');
        var id = $(this).data('id')
        
        listcurrency(id, m_currency);
    })
    
    $('#body-filter-signal-currency').on('click', '#listcurrency', function(){
        
        var m_currency = $(this).data('currency');
        var id = $(this).data('id')
        
        listcurrency(id, m_currency);
    })


    

    $('#member_currency').on('click', '#listcurrency', function(){

        var m_currency = $(this).data('currency');
        var id = $(this).data('id')
        
        listcurrency(id, m_currency);
        // if(true){

        //     $('#signal-currency').text(" Your account is not yet registered premium")
        //     $('.col-signals').hide()
        //     $(".signal-detail").show()

        //     $('.getpremium').text("Get Premium " + m_currency)
        //     $('#getpremium').show()
        //     $('#signals-premium').hide()
        //     $('.currency_req').text(m_currency)
        //     $('#getpremium').removeData('id')
        //     $('#getpremium').removeData('currency')
        //     $('#getpremium').attr({'data-id': id, 'data-currency': m_currency })

        // } else {

        //     $.get( "{{url('/findonesignal')}}/" + id, function( data ) {
        //         // data.currency_name
        //         $('.col-signals').hide()
        //         $('#getpremium').hide()
        //         $('#signal-currency').text(data.currency_name)
        //         $('#signal-buysell').text(data.buy_sell + " - " + data.buy_sell_number)
        //         $('#take-profit').text(data.take_profile)
        //         $('#stop-lost').text(data.stop_lost)
        //         $('#signal-desc').html(data.description)
        //         $('#signal-status').text(data.status == 1 ? 'Active' : 'Finised')
        //         $('#signal-status').removeClass("btn-primary")
        //         $('#signal-status').removeClass("btn-danger")
        //         $('.signal-detail').show()
                
        //         $('#signal-status').addClass(data.status == 1 ? "btn-primary" : "btn-danger")
        //         sessionStorage.setItem('currency_open', 0 )
        //     });
        // }

      
    })

    function listcurrency(id, m_currency){
        
        
        $.get( "{{url('/findonesignal')}}/" + id, function( data ) {
            
            if(data == 0){
                
                // $('#signal-currency').focus()
                // $('#signal-currency').text("")
                // $('.col-signals').hide()

                // $('#signal-buysell').text('')
                // $('.getpremium').text("Get Premium " + m_currency)
                $('.currency_req-modal').text(m_currency)
                // $('#sc').text(m_currency)
                // $('#getpremium').removeData('id')
                // $('#getpremium').removeData('currency')
                $('#btngetpremium-modal').attr('data-id', id )
                $('#btngetpremium-modal').attr('data-currency', m_currency )
      
                $('#nonpremium').modal('show')
            } else {

                var date_open =  new Date(data[0].created_at).getFormatDate();
                var date_finish =  new Date(data[0].date_time).getFormatDate();
                // console.log(data[0].buy_sell )
                // $('.col-signals').hide()
                $('#getpremium').hide()
                $('#signal-currency-modal').text(data[0].currency_name)
                $('#signal-buysell-modal').text(data[0].buy_sell + " - " + data[0].buy_sell_number)
                $('#take-profit-modal').text(data[0].take_profile)
                $('#stop-lost-modal').text(data[0].stop_lost)
                $('#signal-desc-modal').html(data[0].description)
                $('#signal-desc-close-modal').html(data[0].description_close)
                $('#date-open-modal').text(date_open) 
                $('#date-finish-modal').text(date_finish) 
                $('#result-modal').html( data[0].result > 0 ? '<p><b style="color:green">+'+data[0].result+'  <small class="text-primary">Pips</small></b></p>' : data[0].result < 0 ? '<p><b style="color:red">'+data[0].result+' <small class="text-primary">Pips</small></b></p>' : '<b>-</b>' ) 
                $('#status-modal').html(data[0].status == 1 ? '<b style="color:green">Active</b>' : '<b class="text-primary">Finished</b>')
               
                // $('.signal-detail').show()
                // signals-premium
                // $('#signals-premium').show()
                $('#detailpair').modal('show')
                $('#signal-status').addClass(data[0].status)
                
            }
        })
    }

    $('#btngetpremium-modal').on('click', function(){

        var id = $(this).data('id');
        var currency = $(this).data('currency');

        $('#modal-req-premium').modal('show');
        $("#alert-spinner").show()

        $.post("{{url('/postreqpremiummember')}}", { "_token": "{{ csrf_token() }}", "id": "{{auth()->user()->id}}", "currency_name": currency , }, function(result){
            
            if(result.status == 1){
                
                $("#alert-spinner").hide()
                $("#alert-success").show()
                $(".alert_req_currency").html('<div class="alert alert-info alert-with-icon" data-notify="container" id="alert-danger"><button type="button" aria-hidden="true" class="close" data-dismiss="alert"><i class="nc-icon nc-simple-remove"></i></button><span data-notify="icon" class="nc-icon nc-bell-55"></span><span data-notify="message" id="alert-danger-message">'+result.messages+'</span></div>')
                $('#getpremiumdone').show()
            }
            if(result.status == 0){
                $("#alert-spinner").hide()
                $("#alert-danger").show() 
                $(".alert_req_currency").html('<div class="alert alert-danger alert-with-icon" data-notify="container" id="alert-danger"><button type="button" aria-hidden="true" class="close" data-dismiss="alert"><i class="nc-icon nc-simple-remove"></i></button><span data-notify="icon" class="nc-icon nc-bell-55"></span><span data-notify="message" id="alert-danger-message">'+result.messages+'</span></div>')
                
                $('#getpremiumdone').show()

            }
        });
        
    })

    
    $('#btngetpremium').on('click', function(){

        var id = $('#getpremium').data('id');
        var currency = $('#getpremium').data('currency');

        $('#modal-req-premium').modal('show');
        $("#alert-spinner").show()

        $.post("{{url('/postreqpremiummember')}}", { "_token": "{{ csrf_token() }}", "id": "{{auth()->user()->id}}", "currency_name": currency , }, function(result){
            
            if(result.status == 1){
                
                $("#alert-spinner").hide()
                $("#alert-success").show()
                $(".alert_req_currency").html('<div class="alert alert-info alert-with-icon" data-notify="container" id="alert-danger"><button type="button" aria-hidden="true" class="close" data-dismiss="alert"><i class="nc-icon nc-simple-remove"></i></button><span data-notify="icon" class="nc-icon nc-bell-55"></span><span data-notify="message" id="alert-danger-message">'+result.messages+'</span></div>')
                $('#getpremiumdone').show()
            }
            if(result.status == 0){
                $("#alert-spinner").hide()
                $("#alert-danger").show() 
                $(".alert_req_currency").html('<div class="alert alert-danger alert-with-icon" data-notify="container" id="alert-danger"><button type="button" aria-hidden="true" class="close" data-dismiss="alert"><i class="nc-icon nc-simple-remove"></i></button><span data-notify="icon" class="nc-icon nc-bell-55"></span><span data-notify="message" id="alert-danger-message">'+result.messages+'</span></div>')
                
                $('#getpremiumdone').show()

            }
        });
        
    })

    $('body').addClass('sidebar-mini');

    // DATE RANGE
                    
       

    function closedetailsignal(){
        
        $(".signal-detail").hide()
        $('.col-signals').show()
    }

    $(document).ready(function() { 
        
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('input[name="dayrange"]').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
           
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);
    
    
        $('input[name="datefilter"]').daterangepicker({
            // autoUpdateInput: true,
            timePicker: true,
            locale: {
                cancelLabel: 'Clear',
                format: 'MMMM D, YYYY hh:mm A'
            }
        });
       
        function daterange(dateStart, dateEnd){
            $.post( "{{url('signaldaterange/')}}", {
                        "_token": "{{csrf_token()}}",
                        "dateStart": dateStart,
                        "dateEnd": dateEnd,
                        // "dateStart": "03/10/2020 12:00 AM",
                        // "dateEnd": "03/28/2020 11:59 PM",
            }).done(function( response ) {

                var daterangesignalappend = '';
                var footerdaterange = '';
                var totalpips = 0;
                var c = [];
                for (var i = 0; i < response.length; i++) {

                    let date_finish =  new Date(response[i].date_time).getFormatDate();
                    let status = response[i].status == 1 ? "<p style='color:green'>Active</p>" : "<p class='text-primary'>Finished</p>";
                    let status_css = response[i].status == 1 ? "success" : "danger";
                    let signal_result =  response[i].result > 0 ? '<p><b style="color:green">+'+response[i].result+'</b></p>' : response[i].result < 0 ? '<p><b style="color:red">'+response[i].result+'</b>' : '<b>-</b>'; 
                    totalpips += response[i].result
                    daterangesignalappend += '<tr id="listcurrency" data-id="'+response[i].id+'" data-currency="'+response[i].currency_name+'"> <td> <b>'+response[i].currency_name+'</b> <br> <small>'+date_finish+'</small> </td><td class="text-center">'+status+'</td><td class="text-center">'+signal_result+'</td></tr>'
                    
                    c.push(response[i].currency_name);
                }

                var count = [];
                var cc = [];
                var check = '';
                c.forEach(function(item) { count[item] = (count[item] || 0) + 1;  });
                // console.log(count[item])
                console.log(count);
                if(count['GBPUSD'] > 0){
                    let item = 'GBPUSD';
                    check += '<div class="input-group mb-3"><div class="input-group-prepend"><div class="input-group-text"> <input class="filter_gbpusd" type="checkbox" name="filter_gbpusd" aria-label="Checkbox for following text input"></div></div> <p class="px-2">'+item+' ('+count[item]+')</p></div>';
                }
                if(count['AUDUSD'] > 0){
                    let item = 'AUDUSD';
                    check += '<div class="input-group mb-3"><div class="input-group-prepend"><div class="input-group-text"> <input class="filter_audusd" type="checkbox" name="filter_audusd" aria-label="Checkbox for following text input"></div></div> <p class="px-2">'+item+' ('+count[item]+')</p></div>';

                }
                if(count['XAUUSD'] > 0){
                    let item = 'XAUUSD';
                    check += '<div class="input-group mb-3"><div class="input-group-prepend"><div class="input-group-text"> <input class="filter_xauusd" type="checkbox" name="filter_xauusd" aria-label="Checkbox for following text input"></div></div> <p class="px-2">'+item+' ('+count[item]+')</p></div>';

                }
                if(count['HKK50'] > 0){
                    let item = 'HKK50';
                    check += '<div class="input-group mb-3"><div class="input-group-prepend"><div class="input-group-text"> <input class="filter_hkk50" type="checkbox" name="filter_hkk50" aria-label="Checkbox for following text input"></div></div> <p class="px-2">'+item+' ('+count[item]+')</p></div>';

                }
                if(count['USDJPY'] > 0){
                    let item = 'USDJPY';
                    check += '<div class="input-group mb-3"><div class="input-group-prepend"><div class="input-group-text"> <input class="filter_usdjpy" type="checkbox" name="filter_usdjpy" aria-label="Checkbox for following text input"></div></div> <p class="px-2">'+item+' ('+count[item]+')</p></div>';

                }
                if(count['EURUSD'] > 0){
                    let item = 'EURUSD';
                    check += '<div class="input-group mb-3"><div class="input-group-prepend"><div class="input-group-text"> <input class="filter_eurusd" type="checkbox" name="filter_eurusd" aria-label="Checkbox for following text input"></div></div> <p class="px-2">'+item+' ('+count[item]+')</p></div>';

                }
                if(count['USDCHF'] > 0){
                    let item = 'USDCHF';
                    check += '<div class="input-group mb-3"><div class="input-group-prepend"><div class="input-group-text"> <input class="filter_usdchf" type="checkbox" name="filter_usdchf" aria-label="Checkbox for following text input"></div></div> <p class="px-2">'+item+' ('+count[item]+')</p></div>';

                }
                
                    // check += '<div class="input-group mb-3"><div class="input-group-prepend"><div class="input-group-text"> <input type="checkbox" aria-label="Checkbox for following text input"></div></div> <p class="px-2">'+item+'</p></div>';
                    $('#check-filter').html(check)

                // count.forEach(function (item, index) {
                //     console.log(index)
                // });

                // <small class="text-primary">Pips</small>
                var pipstotal = totalpips > 0 ? '<b style="color:green">+'+totalpips+' <small class="text-primary">Pips</small></b>' : totalpips < 0 ? '<b style="color:red">'+totalpips+' <small class="text-primary">Pips</small></b>' : '<b>-</b>'; 
                // footerdaterange += '<tr> <td class=""></td><td class="text-right">Total Result :</td> <td class="text-center">'+pipstotal+'</td><td class=""></td>  </tr>';
                $('#totalresult').html(pipstotal)
                // daterange += footerdaterange;
                $('#body-filter-signal').html(daterangesignalappend + footerdaterange)

                $('#filters-signal').attr('data-start', dateStart)
                $('#filters-signal').attr('data-end', dateEnd)

            });
            
        }

        // $('#filters-signal').on('click', function(){
        //     var dd = $("input[type='checkbox']").val();
        //     console.log(dd)
        // });

        

        // name range filter

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('input[name="dayrange"]').val(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            var dateStart  = start.format('MM/DD/YYYY hh:mm A')
            var dateEnd  = end.format('MM/DD/YYYY hh:mm A')
            daterange(dateStart, dateEnd)
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

    
    
        $('input[name="datefilter"]').daterangepicker({
            // autoUpdateInput: true,
            timePicker: true,
            locale: {
                cancelLabel: 'Clear',
                format: 'MMMM D, YYYY hh:mm A'
            }
        });
       
        // date range filter
     
        $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MMMM D, YYYY hh:mm A') + ' - ' + picker.endDate.format('MMMM D, YYYY hh:mm A'));
            
            sessionStorage.clear()

            var dateStart = picker.startDate.format('MM/DD/YYYY hh:mm A');
            var dateEnd = picker.endDate.format('MM/DD/YYYY hh:mm A');
            
            daterange(dateStart, dateEnd)

        });

        $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

        
        // END  date range filter


    });

    // $('.filter_gbpusd:checked').each(function() {

    //         if ($(this).is(':checked')) {
    //         // Do something...
    //             alert('You can rock now...');
    //         };
    // });

    let filter_data = [];
    $('#filters-signal').on('click', function(){
        
        let filter_data = [];
        let date = [];

        if($('.filter_gbpusd').is(':checked')){
            filter_data.push("GBPUSD");
        }
        if($('.filter_audusd').is(':checked')){
            filter_data.push("AUDUSD");
        } 
        if($('.filter_xauusd').is(':checked')){
            filter_data.push("XAUUSD");
        }
        if($('.filter_hkk50').is(':checked')){
            filter_data.push("HKK50");
        }
        if($('.filter_usdjpy').is(':checked')){
            filter_data.push("USDJPY");
        }
        if($('.filter_eurusd').is(':checked')){
            filter_data.push("EURUSD");
        }
        if($('.filter_eurusd').is(':checked')){
            filter_data.push("USDCHF");
        }

        var dateStart = $(this).data('start')
        var dateEnd = $(this).data('end')

        filtershow(filter_data, dateStart, dateEnd);

    });

    function filtershow(filter_data, dateStart, dateEnd){

        $.ajax({
            method: "POST",
            url: "{{url('getfilterportfoliobycurrency')}}",
            data: { _token:"{{csrf_token()}}", currency: filter_data, datestart: dateStart, dateend:dateEnd }
        })
        .done(function( response ) {

            var daterangesignalappend = '';
            var footerdaterange = '';
            var totalpips = 0;
            // var c = [];
            for (var i = 0; i < response.length; i++) {

                let date_finish =  new Date(response[i].date_time).getFormatDate();
                let status = response[i].status == 1 ? "<p style='color:green'>Active</p>" : "<p class='text-primary'>Finished</p>";
                let status_css = response[i].status == 1 ? "success" : "danger";
                let signal_result =  response[i].result > 0 ? '<p><b style="color:green">+'+response[i].result+'</b></p>' : response[i].result < 0 ? '<p><b style="color:red">'+response[i].result+'</b>' : '<b>-</b>'; 
                totalpips += response[i].result
                daterangesignalappend += '<tr id="listcurrency" data-id="'+response[i].id+'" data-currency="'+response[i].currency_name+'"> <td> <b>'+response[i].currency_name+'</b> <br> <small>'+date_finish+'</small> </td><td class="text-center">'+status+'</td><td class="text-center">'+signal_result+'</td></tr>'
                
            }
            var pipstotal = totalpips > 0 ? '<b style="color:green">+'+totalpips+' <small class="text-primary">Pips</small></b>' : totalpips < 0 ? '<b style="color:red">'+totalpips+' <small class="text-primary">Pips</small></b>' : '<b>-</b>'; 
            // footerdaterange += '<tr> <td class=""></td><td class="text-right">Total Result :</td> <td class="text-center">'+pipstotal+'</td><td class=""></td>  </tr>';
            $('#totalresultfilter').html(pipstotal)
            // daterange += footerdaterange;
            $('#body-filter-signal-currency').html(daterangesignalappend + footerdaterange)
            

            // body-filter-signal
        });


    }

    </script>


@endsection