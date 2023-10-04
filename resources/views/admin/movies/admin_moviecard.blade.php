@extends('layouts.admin')
@section('content')

    @vite(['resources/css/admin/moviecard.css'])

    <!DOCTYPE html>
<html lang="ru">
  <head>
    <!--  Created by Netology special for Netology Education Show  -->
    <meta charset="UTF-8">
    <title>Educational Show</title>
    <link rel="shortcut icon" href="https://netology-code.github.io/Education-Show/img/favicon.ico">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
    
    <main class="movie-info" style="height: 640px">
      <div class="centered-container">
        <img src="https://netology-code.github.io/Education-Show/img/title.png">
        <div class="movie-meta">
           <span class="movie-duration">2 сезона</span>
           <span class="movie-year">2019</span>
           <span class="movie-lang">РУС / ENG</span>
         </div>
        <p>История Лиры начинается в Оксфорде, где она живет под присмотром своего дяди лорда Азриела. Она ведет уединённую жизнь в окружении учителей и студентов. Когда судьба столкнет ее с загадочной миссис Коултер, девочка отправится в опасное и полное приключений путешествие в Лондон, а затем и дальше — на Северный полюс.<p>
        <div class="btn-block">
          <button class="btn-watch">Смотреть</button>
          <button class="btn-wait">Посмотреть позже</button>
        </div>
      </div>
    </main>
    
    <aside class="additional-info">
      <div class="centered-container _dotted">
        <section class="section movie-details">
          <h2 class="section-header">Детали</h2>
          <p class="movie-details-text"><span class="movie-details-highlight">В главных ролях:</span> Дафни Кин, Джеймс МакЭвой, Рут Уилсон, Лин-Мануэль Миранда, Кларк Питерс, Иэн Гелдер, Уилл Кин, Эрион Бакаре, Джорджина Кэмпбелл, Энн-Мэри Дафф</p>
          <p class="movie-details-text"><span class="movie-details-highlight">Режиссер:</span> Джейми Чайлдс</p>
          <p class="movie-details-text"><span class="movie-details-highlight">Жанр:</span> фэнтези, драма, приключения, семейный</p>
          <p class="movie-details-text"><span class="movie-details-highlight">Время:</span> 1ч 00мин</p>
        </section>
      </div>  
    </aside>
      
    <footer class="footer">
      <div class="centered-container">
        <span class="footer-copyright">© 2019, Educational Show</span>
      </div>
    </footer>
  </body>
</html>

@endsection