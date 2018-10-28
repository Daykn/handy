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
<div class="report col-md-12">
    <div class="container-fluid">
        <h2>ОТЧЁТЫ</h2>

        <div class="r1">
            <h4>Lorem Ipsum</h4>
            <a href=""><button class="btn">Посмотреть отчет</button></a>
            
        </div>
    </div>

</div>





@stop