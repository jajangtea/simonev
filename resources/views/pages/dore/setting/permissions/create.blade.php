@extends('layouts.dore.l_main')
@section('page_title')
    USER PERMISSIONS
@endsection
@section('page_header')
    <h1>
        <i class="simple-icon-bag"></i>
        USER PERMISSIONS
    </h1> 
@endsection
@section('page_header_button')
<div class="text-zero top-right-button-container">    
    <div class="btn-group">
        <button type="button"
            class="btn btn-sm btn-outline-primary dropdown-toggle dropdown-toggle-split top-right-button top-right-button-single default"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="simple-icon-menu"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{!!route('permissions.index')!!}" title="Tutup Halaman ini">
                <i class="simple-icon-close"></i> CLOSE
            </a>
        </div>
    </div>
</div>
@endsection
@section('page_info')
    @include('pages.dore.setting.usersopd.info')
@endsection
@section('page_breadcrumb')
    <li class="breadcrumb-item">SETTING</li>
    <li class="breadcrumb-item" aria-current="page">
        <a href="{!!route('rkakegiatanmurni.index')!!}"> USER PERMISSIONS</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">TAMBAH DATA</li>
@endsection
@section('page_content')
<div class="content">
    <div class="card mb-4">
        <div class="card-body">
            <h4 class="mb-4">
                <i class="simple-icon-note"></i>
                TAMBAH DATA
            </h4>
            <div class="separator mb-5"></div>
            {!! Form::open(['action'=>'Setting\PermissionsController@store','method'=>'post','class'=>'form-horizontal','id'=>'frmdata','name'=>'frmdata'])!!}                              
                <div class="form-group row">
                    {{Form::label('name','NAMA PERMISSION',['class'=>'col-sm-2 col-form-label'])}}
                    <div class="col-sm-10">
                        {{Form::text('name','',['class'=>'form-control','placeholder'=>'NAMA PERMISSION'])}}
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="col-sm-10">
                        <div class="form-check">
                            {{ Form::checkbox('aksi[]', 'browse',true,['class'=>'form-check-input']) }}    
                            BROWSE
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            {{ Form::checkbox('aksi[]', 'show',true,['class'=>'form-check-input']) }}    
                            SHOW
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            {{ Form::checkbox('aksi[]', 'add',true,['class'=>'form-check-input']) }}
                            ADD
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            {{ Form::checkbox('aksi[]', 'edit',true,['class'=>'form-check-input']) }}
                            EDIT
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            {{ Form::checkbox('aksi[]', 'delete',true,['class'=>'form-check-input']) }}
                            DELETE
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    {{Form::label('','',['class'=>'col-sm-2 col-form-label'])}}
                    <div class="col-sm-10">
                        {{ Form::button('SIMPAN', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm default'] ) }}
                    </div>
                </div>
            {!! Form::close()!!}
        </div>
    </div>
</div>

@endsection
@section('page_asset_js')
<script src="{!!asset('js/vendor/jquery-validation/jquery.validate.min.js')!!}"></script>
<script src="{!!asset('js/vendor/jquery-validation/additional-methods.min.js')!!}"></script>
@endsection
@section('page_custom_js')
<script type="text/javascript">
$(document).ready(function () {
    $('#frmdata').validate({
        ignore:[],
        rules: {
            name : {
                required: true,
                minlength: 2
            },
        },
        messages : {
            name : {
                required: "Mohon untuk di isi karena ini diperlukan.",
                minlength: "Mohon di isi minimal 2 karakter atau lebih."
            },
            email : {
                required: "Mohon untuk di isi karena ini diperlukan.",
                email: "Format email tidak benar."
            },
            username : {
                required: "Mohon untuk di isi karena ini diperlukan.",
                minlength: "Mohon di isi minimal 5 karakter atau lebih."
            },
            password : {
                required: "Mohon untuk di isi karena ini diperlukan.",
                minlength: "Mohon di isi minimal 5 karakter atau lebih."
            }
        },        
    });    
});
</script>
@endsection