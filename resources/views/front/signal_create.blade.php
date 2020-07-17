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
            <div class="col-lg-5">
                <div class="card stacked-form">

                    <div class="card-header ">
                        <h4 class="card-title">Create Signal</h4>
                    </div>
                   
                    <div class="card-body ">
                        <form method="post" action="{{url('signalcreate')}}" enctype="multipart/form-data" >
                            {{ csrf_field() }}

                            {{-- <div class="form-group">
                                <label>Currency Name</label>
                                <input type="text" placeholder="00" class="form-control" >
                            </div> --}}
                            
                            <div class="row">
                                <div class=" col-lg-6">
                                    <label for=""></label>
                                    <select name="buy_sell" class="form-control" id="">

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
                                    <input type="text" class="form-control"  name="buy_sell_number" placeholder="00" id="number-format-bs" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Currency Name</label>
                                <select class="form-control" name="currency_name">
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
                                <input type="text" placeholder="00" class="form-control" name="take_profile" id="number-format-tp" required>
                            </div>
                            <div class="form-group">
                                <label>Stop Lost</label>
                                <input type="text" placeholder="00" class="form-control" name="stop_lost" id="number-format-sl" required>
                            </div>
                            <div class="form-group">
                                <label>Reason Open</label>
                                <textarea rows="14" cols="50" rows="10" placeholder="Reason Open" class="form-control" name="desc_open" id="editor" ></textarea>
                            </div>
                            

                            <div class="row">

                                <div class=" col-lg-6">
                                    <label for="">Status</label>
                                    <select name="status" class="form-control" id="">
                                        <option value="1">Active</option>
                                        <option value="2">Finish</option>
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                        
                                    <div class="form-group">
                                        <label for="">Date Time</label>
                                        <div class="form-group">
                                            <input id="datetimepicker" name="date_time" type="text" class="form-control datetimepicker" placeholder="Datetime " style="" required>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="form-group">
                                <label>Reason Close</label>
                                <textarea rows="14" cols="50" rows="10" placeholder="Reason Close" class="form-control" name="desc_close" id="editor2" ></textarea>
                            </div>
                                
                            <div class="row">

                                <div class=" col-lg-3">
                                    <label for="">Result</label>
                                    <input type="text" placeholder="00" class="form-control" name="result" id="number-format-rs" required>
                                    <small>*Pips</small>
                                </div>

                            </div>
                    </div>

                    <div class="card-footer ">
                        <input type="submit" class="btn btn-fill btn-sm btn-info" value="Submit" />
                    </div>

                        </form>
                </div>
            </div>

      
            
            <div class="col-lg-7">
                <div class="card data-tables">
                    <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="fresh-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>CN</th>
                                        <th>Result</th>
                                        <th>TP & SL</th>
                                        <th></th>
                                        <th>View</th>
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
                    <a href="#" class="btn btn-outline btn-danger btn-sm" id="btn-delete-signal">Delete</a>
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

        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>


        <script type="text/javascript">

            CKEDITOR.replace('editor', {
                filebrowserUploadUrl: "{{route('post.image', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
            CKEDITOR.replace('editor2', {
                filebrowserUploadUrl: "{{route('post.image', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });

            $(document).ready(function() {


            
                Date.prototype.getFormatDate = function() {
                    var monthNames = ["January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December"
                    ];
                    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                    return  days[this.getDay()] + ', ' + this.getDate() + ' ' + monthNames[this.getMonth()] + ' ' + this.getFullYear() + ' ' + this.getHours() + ':' + this.getMinutes() ;
                }

                $('#datatables').DataTable({
                    // http://build.signal/data_signal
                    "deferRender": true,
                    "ajax": "{{url('/data_signal')}}",
                    "columns": [
                        
                        { "data": "id" },
                        { "render": function ( data, type, row ) { 
                            
                               
                                var date = new Date(row.date_time).getFormatDate() ;
                                // console.log(row)
                                return row.currency_name + '<br /><small >'+date+'</small>' 
                            }
                        },
                        { "render": function ( data, type, row ) { 
                            // console.log(row.result)
                                // return row.result
                                
                                if (row.result > 0) {
                                    return '<p style="color:green">+'+row.result+'</p>';
                                } else if(row.result < 0){
                                    return '<p class="text-danger">'+row.result+'</p>';
                                } else {
                                    return '<p class="text-muted">-</p>';
                                }
                                // console.log(row)
                            }
                        },
                        
                        { "render": function ( data, type, row ) { 
                                var tp  = 'TP : '+row.take_profile 
                                var sl  = '<br /> SL : '+row.take_profile 
                                // console.log(row)
                                return tp + sl 
                            }
                        },
                        { "render": function ( data, type, row ) { 
                                var buy_sell  = row.buy_sell + ' - '+row.buy_sell_number
                                // console.log(row)
                                return buy_sell 
                            }
                        },
                        { "render": function ( data, type, row ) { 
                                let count_view = row.view_premium > 0 ? 'text-primary' : 'text-danger' ;
                                var view  = '<i class="fa fa-eye '+count_view+'"></i> '+row.view_premium+''
                                // console.log(row)
                                return view 
                            }
                        },
                        { "render": function ( data, type, row ) { 
                                var in_item  = '<a href="{{url("editsignal")}}/'+row.id+'" target="_blank" class="btn btn-link btn-warning "><i class="fa fa-edit"></i></a>'
                                in_item  += '<button type="button" data-id="'+row.id+'"  class="btn btn-link btn-danger remove"><i class="fa fa-times"></i></button>'
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
        
        
                var table = $('#datatables').DataTable();
        
                // Edit record
                table.on('click', '.edit', function() {
                    var usignalID = $(this).data('id');
                    
                    $.get( "{{url('findsignal')}}/" + usignalID, function( data ) {
                        $('#update-signal').attr("action", "/update-signal/"+usignalID);

                        $('input[name="u_buy_sell_number"]').val(data.buy_sell_number)
                        $('input[name="u_currency_name"]').val(data.currency_name)
                        $('input[name="u_take_profile"]').val(data.take_profile)
                        $('input[name="u_stop_lost"]').val(data.stop_lost)
                        $('.ck-editor__editable_inline p').eq(1).html(data.description)
                        $('#edit-signal').modal('show')
                        console.log(data)

                    })
                    
                    // alert('You press on Row: ' +  $tr );
                });
        
                // Delete a record
                table.on('click', '.remove', function(e) {
                    var usignalID = $(this).data('id');
                    $.get( "{{url('findsignal')}}/" + usignalID, function( data ) {

                        $('#delete-signal-body').html("<p><b>"+data[0].currency_name+"</b><br /><small>"+data[0].buy_sell_number+" - "+data[0].buy_sell+"</small></p><p>Take Profit : "+data[0].take_profile+"</p><p> Stop lost : "+data[0].stop_lost+"</p><p> Date : "+data[0].date_time+"</p>")
                        $('#delete-signal').modal('show')
                        $('#btn-delete-signal').attr("href", "{{url('/deletesignal')}}/"+data[0].id)
                        
                    })

                });
        
                //Like record
                table.on('click', '.like', function() {
                    alert('You clicked on Like button');
                });

            });

        
            var rs = document.getElementById('number-format-rs');
            rs.addEventListener('keyup', function(e)
            {
                rs.value = formatRupiah(this.value);
            });
            
            rs.addEventListener('keydown', function(event)
            {
                limitCharacter(event);
            });
        
            var bs = document.getElementById('number-format-bs');
            bs.addEventListener('keyup', function(e)
            {
                bs.value = formatRupiah(this.value);
            });
            
            bs.addEventListener('keydown', function(event)
            {
                limitCharacter(event);
            });

            var sl = document.getElementById('number-format-sl');
            sl.addEventListener('keyup', function(e)
            {
                sl.value = formatRupiah(this.value);
            });
            
            sl.addEventListener('keydown', function(event)
            {
                limitCharacter(event);
            });

            var tp = document.getElementById('number-format-tp');
            tp.addEventListener('keyup', function(e)
            {
                tp.value = formatRupiah(this.value);
            });
            
            tp.addEventListener('keydown', function(event)
            {
                limitCharacter(event);
            });
            
            /* Fungsi */
            function formatRupiah(bilangan, prefix)
            {
                var number_string = bilangan.replace(/[^,\d]/g, '').toString(),
                    split	= number_string.split(','),
                    sisa 	= split[0].length % 3,
                    rupiah 	= split[0].substr(0, sisa),
                    ribuan 	= split[0].substr(sisa).match(/\d{1,3}/gi);
                    
                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah +=  ribuan.join('');
                }
                
                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
            }
            
            function limitCharacter(event)
            {
                key = event.which || event.keyCode;
                if ( key != 188 // Comma
                    && key != 8 // Backspace
                    && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
                    && (key < 48 || key > 57) // Non digit
                    // Dan masih banyak lagi seperti tombol del, panah kiri dan kanan, tombol tab, dll
                    ) 
                {
                    event.preventDefault();
                    return false;
                }
            }

            
            
            
        </script>
        
    @endsection