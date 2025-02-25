@extends('layouts.dore.l_main')
@section('page_title')
    UNIT KERJA
@endsection
@section('page_header')    
    <h1>
        <i class="simple-icon-bag"></i> 
        UNIT KERJA
    </h1>
@endsection
@section('page_info')
    @include('pages.dore.dmaster.unitkerja.info')
@endsection
@section('page_header_button')
    <div class="text-zero top-right-button-container">
        <button type="button" class="btn btn-lg btn-outline-primary dropdown-toggle dropdown-toggle-split top-right-button top-right-button-single" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            AKSI
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{!!route('unitkerja.index')!!}">
                <i class="simple-icon-close"></i> CLOSE
            </a>            
        </div>
    </div>
@endsection
@section('page_breadcrumb')
    <li class="breadcrumb-item">DATA MASTER</li>
    <li class="breadcrumb-item">FUNGSIONAL</li>
    <li class="breadcrumb-item">
        <a href="{!!route('unitkerja.index')!!}">UNIT KERJA</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">ERROR</li>
@endsection
@section('page_content')
<div class="alert alert-danger">
    <button type="button" class="close" onclick="location.href='{{route('unitkerja.index')}}'">×</button>
    {{$errormessage}}
</div>
@endsection