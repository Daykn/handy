<link rel="stylesheet" href="{{asset('/css/footer.css')}}">

<footer class="footer col-md-12 col-xs-12" id="footer" style=" background:#4a76a8;">
<div class="container-fluid">
    
  <div class="contact col-md-6" style="text-align:start;">
    <h2 style="color:white;">Контакты</h2>   
    
  <h4 style="color:white;"> Телефон</h4>
      <p style="color:white;">- 8 777 77 77</p>
      <p style="color:white;">- 8 444 44 44</p>
  </div>

<form action="/action_page.php " class="col-md-4 col-md-offset-2">
<label><h2 style="color:white;">Обратная Связь</h2></label>
    <label for="fname">Имя</label>
    <input type="text" id="fname" name="firstname" placeholder="Ваше имя">

    <label for="lname">Mail</label>
    <input type="text" id="lname" name="lastname" placeholder="Ваш email">

    <label for="subject">Отзывы / Пожелания</label>
    <textarea id="subject" name="subject" placeholder="Обратная связь" style="height:70px;width:300px;"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</footer>