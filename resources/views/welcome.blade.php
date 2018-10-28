@extends('layouts.master')
@push('styles')
<link rel="stylesheet" href="{{asset('/css/welcome.css')}}">
@endpush
@push('scripts')
@section('title')
index page
@stop
@section('description')
this is description
@stop
@section('content')
    <div class="content col-md-12">
        <div class="container-fluid">
            <div class="Mtext col-md-8 col-md-offset-2">
                <h3 style="color:#00a1ba;">Общественный Фонд «Reliance» существует с 9 октября 2009 года. Фонд занимается поддержкой молодежных инициатив и реализацией проектов, формирующих активную гражданскую позицию, социальную ответственность, привитие лидерских качеств и интеллектуальное образование молодежи. </h3>
            </div>

            <div class="plitka col-md-12 col-xs-12 " style="margin-bottom:50px;">
                <div class="pl pl1 col-md-5 col-md-offset-1 col-xs-12">
                    <p>При фонде более 4 лет существует волонтерское движение «От сердца к сердцу», в рядах, которого задействованы более 250 человек разных возрастных категорий.  Фонд реализовал более 20 проектов при участии государственных, международных, бизнес - организаций  по профилактике здорового образа жизни, патриотического, экологического, культурного, правового воспитания, социализации и т.д. </p>
                </div>
                <div class="pl pl2 col-md-5 col-xs-12">
                    <img style="max-width:100%;max-height:100%;margin:auto;" src="{{ asset('images/2.jpg') }}">
                </div>
                <div class="pl pl3 col-md-5 col-md-offset-1 col-xs-12">
                    <img style="max-width:100%;max-height:100%;margin:auto;" src="{{ asset('images/1.jpg') }}">
                </div>
                <div class="pl pl4 col-md-5  col-xs-12">
                    <p>Благодаря активной работе лидеров центра были налажены связи с международными волонтерскими движениями. На сегодняшний день Фонд сотрудничает с международной организацией ГРИНПИС с Южной Кореей, Фондом поддержки детей «Адвит», Сеульским государственным Университетом, 5 волонтеров прошли волонтерскую практику в рамках международного обмена опытом.</p>
                </div>
            </div>

            <div class="Mtext2 col-md-8 col-md-offset-2">
                <h3 style="color:#00a1ba;"> «ОФ «Reliance» работает более 8 лет, как с государственными учреждениями, так и  с бизнес-структурами, и имеет  опыт работы со спонсорами и меценатами для оказания помощи социально-незащищенным слоям населения, а также имеет профессиональных тренеров, фрилансеров, экспертов, специалистов для эффективной реализации проектов.</h3>
            </div>

             <section class="testimonials text-center col-md-12">
      <div class="container-fluid ">
        <h2 class="mb-5" style="color: #007bff;">Основные лица</h2>
        <div class="col-md-12 col-xs-12" >
          
            <div class="card col-md-2 col-md-offset-1 col-xs-12">
              <img src="{{ asset('images/testimonials-1.jpg') }}" alt="asdf" style="width:100%;margin-bottom: 5px;">
              <h3>Имя Фамилия</h3>
              <p class="title" style="color: #007bff;">Founder </p>
              
            </div>

            <div class="card  col-md-2 col-md-offset-2 col-xs-12">
              <img src="{{ asset('images/testimonials-1.jpg') }}" alt="asdf" style="width:100%;margin-bottom: 5px;">
              <h3>Имя Фамилия</h3>
              <p class="title" style="color: #007bff;">Social Media Manager</p>
              
            </div>

            <div class="card  col-md-2 col-md-offset-2 col-xs-12">
              <img src="{{ asset('images/testimonials-1.jpg') }}" alt="asdf" style="width:100%;margin-bottom: 5px;">
              <h3>Имя Фамилия</h3>
              <p class="title" style="color: #007bff;">Research manager</p>
              
            </div>            

        </div>
      </div>
    </section>


        </div>
    </div>
@stop