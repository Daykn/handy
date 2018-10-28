@extends('layouts.master')
@push('styles')
<link rel="stylesheet" href="{{asset('/css/reports.css')}}">
@endpush
@push('scripts')
@section('title')
reports
@stop
@section('description')
this is reports
@stop
@section('content')
<div class="report col-md-12 col-xs-12">
    <div class="container-fluid text-center">
        <h2>ОТЧЁТЫ</h2>

        <div class="r1 col-md-12 col-xs-12 text-left" style="margin-bottom:20px;border:1px solid grey;padding-bottom:5px;">
            <h4>Lorem Ipsum</h4>
            <a href=""><button class="btn">Посмотреть отчет</button></a>
        </div>

    </div>

</div>





@stop