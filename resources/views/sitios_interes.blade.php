@extends('main')

@section('title', '| Home')

@section('content')
  <main>
    <div class="row">
      <div class="col s12 l12 center-align">
        <h3 class="red-text">Sitios de Interés</h3>
        </div>
    </div>
    <div class="row">
      <div class="carousel carousel-slider">
        <a class="carousel-item center-align red-text" href="#one!">
          <h2>Cancha de Fútbol</h2>
          <img src="https://lorempixel.com/800/400/food/1">
        </a>
        <a class="carousel-item center-align red-text" href="#two!">
          <h2>Parroquia Cristo Resucitado</h2>
          <img src="https://lorempixel.com/800/400/food/2">
        </a>
        <a class="carousel-item center-align red-text" href="#three!">
          <h2>Canchas Sintéticas</h2>
          <img src="https://lorempixel.com/800/400/food/3">
        </a>
        <a class="carousel-item center-align red-text" href="#four!">
          <h2>Zonas Verdes</h2>
          <img src="https://lorempixel.com/800/400/food/4">
        </a>
      </div>
    </div>
  </main>
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Footer Content</h5>
          <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2014 Copyright Text
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
      </div>
    </div>
    </main>
  </footer>
  {!!Html::script('materialize-css/js/jquery-2.1.1.min.js')!!}
  {!! MaterializeCSS::include_js() !!}
  <script type="text/javascript">
    // Inicializa  boton collapse
    $(document).ready(function(){
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      //$('.modal-trigger').leanModal();
      $('.modal').modal();
      $(".button-collapse").sideNav();
      $(".dropdown-button").dropdown();
      $('.carousel.carousel-slider').carousel(
        {fullWidth: true, padding:200},
        setTimeout(autoplay, 5500)
      );
    });
    function autoplay() {
      $('.carousel').carousel('next');
      setTimeout(autoplay, 5500);
    }
@endsection
