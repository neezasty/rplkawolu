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
            <a href="{{url('add')}}" class="btn btn-primary">Input</a>
        </br>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <!-- DataTable within card -->
            <div class="card">
                <h6 class="card-header">Student Data</h6>
                <div class="card-datatable table-responsive">
                    <table class="datatables-demo table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Class</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $row)
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration }}</td>
                                <td>{{ $row->nis}}</td>
                                <td>{{ $row->name}}</td>
                                <td>{{ $row->address}}</td>
                                <td>{{ $row->gender}}</td>
                                <td>{{ $row->classname}}</td>
                                <td>
                                <form action="{{url('delete', $row->id)}}" method="post">
                                    @csrf {{-- wajib pakai ini untuk form --}}
                                    @method('DELETE')
                                <a href="{{url('edit/'.$row->id)}}" ><button class="btn btn-outline-primary" type="button">Ubah</button></a>
                                <button href="{{url('delete/'.$row->id)}}" class="btn btn-outline-danger" type="submit">Hapus</button>
                                <button type="button" class="btn btn-outline-success">Detail</button>
                                <button type="button" class="btn btn-outline-warning">Confirm</button>
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

@endsection
