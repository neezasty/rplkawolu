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
                    <form action="{{url('updateclass', $studentclass->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="form-label">Class Name</label>
                            <input type="text" name="classname" class="form-control" placeholder="Name" value="{{$studentclass->classname}}">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">School Year</label>
                            <input type="text" name="school_year" class="form-control" placeholder="School Year" value="{{$studentclass->school_year}}">
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Level</label>
                            <select class="form-control" name="level">
                                <option value="10" @if($studentclass->level == "10") selected @endif>10</option>
                                <option value="11" @if($studentclass->level == "11") selected @endif>11</option>
                                <option value="12" @if($studentclass->level == "12") selected @endif>12</option>
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
