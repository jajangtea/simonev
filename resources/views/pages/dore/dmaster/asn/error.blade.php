@extends('layouts.dore.l_main')
@section('page_title')
    ASN
@endsection
@section('page_header')    
    <h1>
        <i class="simple-icon-people"></i> 
        ASN
    </h1>
@endsection
@section('page_info')
    @include('pages.dore.dmaster.asn.info')
@endsection
@section('page_header_button')
    <div class="text-zero top-right-button-container">
        <button type="button" class="btn btn-lg btn-outline-primary dropdown-toggle dropdown-toggle-split top-right-button top-right-button-single" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            AKSI
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{!!route('asn.index')!!}">
                <i class="simple-icon-close"></i> CLOSE
            </a>            
        </div>
    </div>
@endsection
@section('page_breadcrumb')
    <li class="breadcrumb-item">DATA MASTER</li>
    <li class="breadcrumb-item">PEGAWAI</li>
    <li class="breadcrumb-item">
        <a href="{!!route('asn.index')!!}">ASN</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">ERROR</li>
@endsection
@section('page_content')
<div class="alert alert-danger">
    <button type="button" class="close" onclick="location.href='{{route('asn.index')}}'">×</button>
    {{$errormessage}}
</div>
@endsection