<link rel="stylesheet" href="{{asset('/css/footer.css')}}">

<footer class="footer col-md-12" style="height:350px; background:#00a1ba;">
<div class="container-fluid">
<form action="/action_page.php " class="col-md-6 col-md-offset-5">
    <label for="fname">Имя</label>
    <input type="text" id="fname" name="firstname" placeholder="Ваше имя">

    <label for="lname">Mail</label>
    <input type="text" id="lname" name="lastname" placeholder="Ваш email">

    <label for="subject">Отзывы / Пожелания</label>
    <textarea id="subject" name="subject" placeholder="Обратная связь" style="height:100px;width:270px;"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</footer>