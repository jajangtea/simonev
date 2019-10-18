@extends('layouts.dore.l_main')
@section('page_title')
    APBD MURNI
@endsection
@section('page_header')
    <i class="icon-database-refresh position-left"></i>
    <span class="text-semibold">
        APBD MURNI TAHUN ANGGARAN {{config('simonev.tahun_anggaran')}}
    </span>
@endsection
@section('page_info')
    @include('pages.dore.rka.rkakegiatanmurni.info')
@endsection
@section('page_breadcrumb')
    <li><a href="{!!route('rkakegiatanmurni.index')!!}">APBD MURNI</a></li>
    <li class="active">ERROR</li>
@endsection
@section('page_content')
<div class="alert alert-danger alert-styled-left alert-bordered">
    <button type="button" class="close" onclick="location.href='{{route('rkakegiatanmurni.index')}}'">×</button>
    {{$errormessage}}
</div>
@endsection