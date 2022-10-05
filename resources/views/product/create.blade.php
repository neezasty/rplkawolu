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
                    <form action="{{url('saveproduct')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Product Name">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <input type="text" name="desc" class="form-control" placeholder="Description">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Stock</label>
                            <input type="text" name="stock" class="form-control" placeholder="Stock">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Upload Picture</label>
                            <input type="file" name="pict" class="form-control" placeholder="Upload Picture">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Price">
                            <div class="clearfix"></div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
