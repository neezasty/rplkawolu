@extends('layout.app')
@section('content')

<div class="container-fluid flex-grow-1 container-p-y">
    <div class="page-title">
        <h4 class="">Layouts and elements</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item active">Forms</li>
                <li class="breadcrumb-item active">Layouts and elements</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h6 class="card-header">Default</h6>
                <div class="card-body">
                    <form action="{{url('save')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">NIS</label>
                            <input type="text" name="nis" class="form-control" placeholder="NIS">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Gender</label>
                            <label class="custom-control custom-radio">
                                <input name="gender" type="radio" class="custom-control-input" value="Female">
                                <span class="custom-control-label">Female</span>
                            </label>
                            <label class="custom-control custom-radio">
                                <input name="gender" type="radio" class="custom-control-input" value="Male">
                                <span class="custom-control-label">Male</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Class</label>
                            <select class="form-control" name="class">
                                @foreach ($class as $row)
                                <option value="{{$row->id}}">{{$row->classname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
