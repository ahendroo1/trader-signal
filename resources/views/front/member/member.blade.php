@extends('front.master.base')
@section('content')
<style>
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }
    
    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    input:checked + .slider {
      background-color: #2196F3;
    }
    
    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
    
    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }
    
    .slider.round:before {
      border-radius: 50%;
    }
</style>

<script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>

<script>tinymce.init({selector:'textarea'});</script>

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
                        <b> Success - </b> {{Session::get('warning')}}
                    </span>
                </div>
            @endif
            @if (Session::get('error'))
                <div class="alert alert-danger">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span>
                        <b> Success - </b> {{Session::get('error')}}
                    </span>
                </div>
            @endif
            
        </div>
        <div class="col-lg-6">
            <div class="card data-tables">
                
                <div class="card-header ">
                    <h5 class="card-title">Member</h5>
                </div>
               
                <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                    {{-- <div class="toolbar">
                               Here you can write extra buttons/actions for the toolbar             
                    </div> --}}
                    <div class="fresh-datatables">
                        <table id="datatablesmember" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th class="disabled-sorting text-right">Tools</th>
                                </tr>
                            </thead>

                            {{-- <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </tfoot> --}}


                            {{-- <td class="text-right" style="display: none;">
                                <a href="#" class="btn btn-link btn-info like"><i class="fa fa-heart"></i></a>
                                <a href="#" class="btn btn-link btn-warning edit"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-link btn-danger remove"><i class="fa fa-times"></i></a>
                            </td> --}}
                            <tbody>
                              

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

  
        
        <div class="col-lg-6">
            <div class="card data-tables table-with-switches">
                
                <div class="card-header ">
                    <h5 class="card-title">Request Signal</h5>
                </div>
               
                <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                    {{-- <div class="toolbar">
                               Here you can write extra buttons/actions for the toolbar             
                    </div> --}}
                    <div class="fresh-datatables">
                        <table id="datatablessignal" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Currency Name</th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                            </thead>

                            {{-- <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </tfoot> --}}


                            {{-- <td class="text-right" style="display: none;">
                                <a href="#" class="btn btn-link btn-info like"><i class="fa fa-heart"></i></a>
                                <a href="#" class="btn btn-link btn-warning edit"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-link btn-danger remove"><i class="fa fa-times"></i></a>
                            </td> --}}
                            <tbody>
                              

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->

<div class="modal fade " id="edit-signal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Request Signal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="edit-signal-body">
                <div class="row">
                    <div class="col-md-4" id="regsignalpreview">
                        <h5></h5>
                        <p class="category"></p>
                        
                        <label class="switch">
                            <input id="currencyopen" type="checkbox" data-id="">
                            <span class="slider round"></span>
                        </label>
  
                    </div>
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                {{-- <button type="submit" class="btn btn-outline btn-danger btn-sm">Delete</button> --}}
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="delete-signal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Delete Signal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="delete-signal-body">
               
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('footer-content')

    <script src="{{asset('assets/js/plugins/bootstrap-table.js')}}"></script>
    <!--  DataTable Plugin -->
    <script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
    <!--  Full Calendar   -->
    <script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>


    <script type="text/javascript">

            ClassicEditor.create(

                document.querySelector( '#editor2' ), {
                    image: {
                        // You need to configure the image toolbar, too, so it uses the new style buttons.
                        toolbar: [ 'imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight' ],

                        styles: [
                            // This option is equal to a situation where no style is applied.
                            'full',

                            // This represents an image aligned to the left.
                            'alignLeft',

                            // This represents an image aligned to the right.
                            'alignRight'
                        ]
                    }
                } 


            ).catch( error => {

            console.error( error );

            });
    
            ClassicEditor.create(

                document.querySelector( '#editor' ), {
                    image: {
                        // You need to configure the image toolbar, too, so it uses the new style buttons.
                        toolbar: [ 'imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight' ],

                        styles: [
                            // This option is equal to a situation where no style is applied.
                            'full',

                            // This represents an image aligned to the left.
                            'alignLeft',

                            // This represents an image aligned to the right.
                            'alignRight'
                        ]
                    }
                } 

            ).catch( error => {

                console.error( error );

            });

        $(document).ready(function() {


            $('#datatablesmember').DataTable({
                // http://build.signal/data_signal
                "deferRender": true,
                "ajax": "{{url('/allmember')}}",
                "columns": [

                    { "data": "user_id" },
                    { "data": "email" },
                    { "data": "name" },
                    { "render": function ( data, type, row ) { 
                            var in_item  = '<a target="_blank" href="{!!url("member/update/data/")!!}'+'/'+row.user_id+'" data-id="'+row.user_id+'" class="btn btn-link btn-warning edit"><i class="fa fa-edit"></i></a>'
                            var confrm = "Delete ";
                            in_item  += '<a href="{!!url("member/delete/data")!!}'+'/'+row.user_id+'" data-id="'+row.user_id+'" onclick="confirm(\'Delete ?\')" class="btn btn-link btn-danger remove"><i class="fa fa-times"></i></a>'
                            // console.log(row)
                            return in_item ;
                        }
                    }

                ],
               
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                },
                // "order": [[ data.id, "desc" ]]
            });

            
            var tablemember = $('#datatablesmember').DataTable();

            // tablemember.on('click', '.edit', function(e) {
            //     var memberId = $(this).data('id');

            // });

    
            
    
            $('#datatablessignal').DataTable({
                // http://build.signal/data_signal
                "deferRender": true,
                "ajax": "{{url('/request-data-signals')}}",
                "columns": [
                    
                    { "data": "id" },
                    { "data": "email" },
                    { "data": "currency_request" },
                    { "render": function ( data, type, row ) { 

                            let fa = row.currency_open == 0 ? 'fa-close' : 'fa-check' ;
                            let colors = row.currency_open == 0 ? 'btn-danger' : 'btn-success' ;
                            var in_item  = '<button type="button" data-id="'+row.id+'"  class="btn btn-link '+colors+' edit"><i class="fa '+ fa +'"></i></button>'
                            // console.log(row)
                            return in_item 

                        }
                    },

                ],
               
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                },
                // "order": [[ data.id, "desc" ]]
            });
    
            var table = $('#datatablessignal').DataTable();
    
            // Edit record
            table.on('click', '.edit', function() {
                var usignalID = $(this).data('id');
                $('#edit-signal').modal('show')
                
                $.get( "{{url('/findrequest')}}/" + usignalID, function( data ) {
                    $('#regsignalpreview h5').text(data[0].currency_request)
                    if(data[0].currency_open == 0){

                        $("#currencyopen").attr('value', data[0].id);
                        $("#currencyopen").prop( "checked", false );
                    }
                    if(data[0].currency_open == 1){

                        $("#currencyopen").attr('value', data[0].id);
                        $("#currencyopen").prop( "checked", true );
                    }
                    // $('.currency_open').attr('checked', true);
                    
                })
                
                // alert('You press on Row: ' +  $tr );
            });
    
            // Delete a record
            table.on('click', '.remove', function(e) {
                var usignalID = $(this).data('id');

                $.get( "{{url('/findsignal')}}/" + usignalID, function( data ) {

                    $('#delete-signal-body').html("<p><b>"+data.currency_name+"</b><br /><small>"+data.buy_sell_number+" - "+data.buy_sell+"</small></p><p>Take Profit : "+data.take_profile+"</p><p> Stop lost : "+data.stop_lost+"</p>")
                    $('#delete-signal').modal('show')
                    
                })
            });
    
            //Like record
            table.on('click', '.like', function() {
                alert('You clicked on Like button');
            });
            
            $('#currencyopen').on('click', function() {

                        
                var data = { 
                                "_token": "{{ csrf_token() }}",
                                "id": $(this).val(),
                                "currency_open": $(this).prop("checked") == true ? 1 : 0 
                            };

                $.post("{{url('/updatecurrencyopen')}}", data, function(result){
                    // console.log(result);
                    
                    table.ajax.reload();
                })

            });

        });

        
    </script>
    
@endsection