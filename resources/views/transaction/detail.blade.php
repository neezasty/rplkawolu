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
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Transaction ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_transaction as $row)
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration }}</td>
                                <td>{{ $row->name}}</td>
                                <td>{{ $row->qty}}</td>
                                <td>{{ $row->id_trans}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
