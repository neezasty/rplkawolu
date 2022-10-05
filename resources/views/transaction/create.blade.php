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
                <h6 class="card-header">Form row</h6>
                <div class="card-body">
                    <form action="{{url('savetrans')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="form-label">Date</label>
                                <input type="datetime-local" name="datetime" class="form-control">
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label">Click button here</label></br>
                                <button type="button" class="btn btn-success add" id="addtrans">Add Product</button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="products">
                            {{-- digunakan untuk menampung data/textfield yang akan ditambahkan --}}
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h6 class="card-header">Default</h6>
                <div class="card-body">
                    <button type="button" class="btn btn--success add" id="tambah">
                        tambah barang
                    </button>
                    <button type="button" class="btn btn--success tombol1" id="tombol_1">
                        Tombol 1
                    </button>
                    <button type="button" class="btn btn--success tombol2" id="tombol_2">
                        Tombol 2
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
    // ini script javascript
    const tombol1= document.getElementById('tombol_1');
    tombol1.addEventListener('click', function(){
        alert('tombol 1');
    })

    // ini script jquery
    $("#tombol_2").click(function(){
        alert('tombol 2');
    })

    //ini script digunakan untuk menambahkan data products
    $(".add").click(function(){
        $(".products").append('\
            <div class="form-row lines">\
                <div class="form-group col-6">\
                    <label for=""> Product</label>\
                    <select class="form-control" name="product[]" required>\
                        <option value="" disabled selected>Select Product</option>\
                        @foreach ($product as $row)\
                            <option value="{{$row->id}}">{{$row->name}}</option>\
                        @endforeach\
                    </select>\
                </div>\
                <div class="form-group col-3">\
                    <label for="">Qty</label>\
                    <input type="number" name="qty[]" id="" class="form-control" placeholder="input your quantity" required>\
                </div>\
                <div class="form-group col-3">\
                    <label for="">Delete</label></br>\
                    <button type="button" class="btn btn-danger delete_line">\
                        <i class="fas fa-trash"></i>\
                    </button>\
                </div>\
            </div>\
        ');

        $('body').on('click','.delete_line', function(){
            $(this).closest('.lines').remove();
        })
    })
</script>

@endsection
