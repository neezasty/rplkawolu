@extends('layout.app')
@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="page-title">
        <h4 class="">DataTables</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item active">Tables</li>
                <li class="breadcrumb-item active">DataTables</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <a href="{{url('addtrans')}}" class="btn btn-primary">Input</a>
        </br>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <!-- DataTable within card -->
            <div class="card">
                <h6 class="card-header">Transaction List</h6>
                <div class="card-datatable table-responsive">
                    <table class="datatables-demo table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Date Time</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction as $row)
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration }}</td>
                                <td>{{ $row->datetime}}</td>
                                <td>Rp. {{number_format($row->total,2,",",".");}}</td>
                                <td>
                                <button type="button" data-toggle="modal" data-target="#detail_modal" class="btn btn-info detail" value="{{$row->id}}">
                                    <i class="fas fa-info"></i> Detail
                                </button>
                               </button>
                            </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-top fade" id="detail_modal">
    <div class="modal-dialog">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Transaction
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody id="data_detail_transaction">
                        {{-- baris ini diambil dari script ajax --}}
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>

<script>
    $(".detail").click(function(){
        var id_transaction = $(this).val();
        var nom = 1;
        $.ajax({
            type:"POST",
            url :"/detail-transaction",
            data:{
                _token: '{{csrf_token()}}',
                id_transaction: id_transaction,
            },
            success: function(response){
                $("#data_detail_transaction").html('');
                $.each(response.detail_transaction, function(key, item){
                    $('#data_detail_transaction').append('<tr>\
                                <td>'+ nom +'</td>\
                                <td>'+ item.name +'</td>\
                                <td>'+ item.price +'</td>\
                                <td>'+ item.qty +'</td>\
                                <td>'+ item.price * item.qty +'</td>\
                            </tr>');
                        nom++;
                });
            }
        });
     })
</script>
@endsection
