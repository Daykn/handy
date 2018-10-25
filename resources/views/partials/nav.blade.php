<link rel="stylesheet" href="{{asset('/css/nav.css')}}">

<nav class="navbar" style="background:#4a76a8;">
  <div class="container-fluid col-md-12">
    <div class="navbar-header col-md-2">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color:white;">RELIANCE</a>
    </div>
   
    <div  class="collapse navbar-collapse " id="myNavbar">
      <ul  class="nav navbar-nav col-md-8" >
        <li class="col-md-offset-2"><a id="li" href="#">Главная</a></li>
        <li class="dropdown col-md-offset-1">
          <a class="dropdown-toggle" id="li" data-toggle="dropdown" href="#" >Новости<span class="caret"></span></a>
          <ul class="dropdown-menu" style="background:#eee;">
            <li><a href="{{ asset('\resources\views\news.blade.php') }}" id="drop">Основные</a></li>
            <li><a href="#" id="drop">Проекты</a></li>
            <li><a href="#" id="drop">Тренинги и семинары</a></li>
            <li><a href="#" id="drop">Волонтерская деятельность</a></li>
            <li><a href="#" id="drop">Образовательная деятельность</a></li>
            <li><a href="#" id="drop">Конкурсы</a></li>
          </ul>
        </li>
        <li class="col-md-offset-1"><a href="#" id="li">Отчеты</a></li>
        <li class="col-md-offset-1"><a href="" id="li">Контакты</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="#" style="color:white;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>

  </div>
</nav>
