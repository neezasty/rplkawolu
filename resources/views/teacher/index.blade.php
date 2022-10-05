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
            <button class="btn btn-primary" data-toggle="modal" data-target="#add_modal">Add Data</button>
        </br>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <!-- DataTable within card -->
            <div class="card">
                <h6 class="card-header">Teacher List Data</h6>
                <div class="card-datatable table-responsive">
                    <table class="datatables-demo table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Number Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="data_teacher">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-top fade" id="add_modal">
    <div class="modal-dialog">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Entry Teacher Data
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" id="name" class="form-control">
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label">Gender</label>
                                            <input type="text" name="gender" id="gender" class="form-control">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" id="address" name="address"></textarea>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label class="form-label">Number Phone</label>
                                            <input type="text" name="nohp" id="nohp" class="form-control">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save" data-dismiss="modal">Save</button>
            </div>
        </form>
    </div>
</div>



<div class="modal modal-top fade" id="edit_modal">
    <div class="modal-dialog">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Data
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="hidden" name="id" id="id_edit" class="form-control" >
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" id="name_edit" class="form-control" >
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label">Gender</label>
                                            <input type="text" name="gender" id="gender_edit" class="form-control" >
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label class="form-label">Address</label>
                                            <textarea class="form-control" id="address_edit" name="address"></textarea>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label class="form-label">Number Phone</label>
                                            <input type="text" name="nohp" id="nohp_edit" class="form-control">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary update" data-dismiss="modal">Update</button>
            </div>
        </form>
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(window).ready(function(){
        function get_teacher(){
            var nom = 1;
            $.ajax({
                type:"GET",
                url :"/getdata-teacher",
                success: function(response){
                    $("#data_teacher").html('');
                    $.each(response.teacher, function(key, item){
                        var url_delete = "{{url('delete-teacher')}}"+"/"+item.id;
                        $('#data_teacher').append('<tr>\
                                    <td>'+ nom +'</td>\
                                    <td>'+ item.name +'</td>\
                                    <td>'+ item.gender +'</td>\
                                    <td>'+ item.address +'</td>\
                                    <td>'+ item.nohp +'</td>\
                                    <td>\
                                        <button type="button" class="btn btn-warning edit" data-toggle="modal" data-target="#edit_modal" value="'+item.id+'">Edit</button>\
                                        <button type="button" class="btn btn-danger delete" value="'+item.id+'">Delete</button>\
                                    </td>\
                                </tr>');
                            nom++;
                    });
                }
            });
        }
        get_teacher();

        $(".save").click(function(){
            var name = $("#name").val();
            var gender = $("#gender").val();
            var address = $("#address").val();
            var nohp = $("#nohp").val();
            $.ajax({
                type:"POST",
                url :"/store-teacher",
                data:{
                    _token: '{{csrf_token()}}',
                    name: name,
                    gender : gender,
                    address : address,
                    nohp : nohp,
                },
                success: function(response){
                   get_teacher();
                   $("#name").val('');
                   $("#gender").val('');
                   $("#address").val('');
                   $("#nohp").val('');
                }
            });
        })

        $('body').on('click', '.edit', function(){
            var id_teacher = $(this).val();
            var nom = 1;
            $.ajax({
                type:"GET",
                url :"/detail-teacher/"+id_teacher,
                success: function(response){
                    $("#id_edit").val(response.teacher['id']);
                    $("#name_edit").val(response.teacher['name']);
                    $("#gender_edit").val(response.teacher['gender']);
                    $("#address_edit").val(response.teacher['address']);
                    $("#nohp_edit").val(response.teacher['nohp']);
                }
            });
        })

        $(".update").click(function(){
                var id = $("#id_edit").val();
                var name_update = $("#name_edit").val();
                var gender_update = $("#gender_edit").val();
                var address_update = $("#address_edit").val();
                var nohp_update = $("#nohp_edit").val();
                $.ajax({
                    type:"POST",
                    url :"/update-teacher",
                    data:{
                        _token: '{{csrf_token()}}',
                        id: id,
                        name: name_update,
                        gender : gender_update,
                        address : address_update,
                        nohp : nohp_update,
                    },
                    success: function(response){
                    get_teacher();
                    $("#name_edit").val('');
                    $("#gender_edit").val('');
                    $("#address_edit").val('');
                    $("#nohp_edit").val('');
                    }
                });
        })

        $('body').on ('click', '.delete', function(){
            var id_teacher = $(this).val();
            swal.fire({
                icon:'warning',
                title: 'Are you sure to delete this data?',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type:"DELETE",
                        url :"/delete-teacher/"+id_teacher,
                        data:{
                            _token: '{{csrf_token()}}',
                        },
                        success: function(response){
                        get_teacher();
                        }
                    });
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }else{
                    Swal.fire(
                    'Canceled!',
                    'Acrtion is cancelled',
                    'info'
                    )
                }
            })
        })
    })
   

</script>
@endsection
