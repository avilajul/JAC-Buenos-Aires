<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  {!! MaterializeCSS::include_css() !!}
  {!!Html::style('css/estilos.css')!!}
  <title>Contáctenos</title>
</head>
<body class="blue-grey lighten-4">

  <main>
    <div class="row">
      <div class="col s12 l12 center-align">
        <h3 class="red-text">Contáctenos</h3>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m6 l8">
        <div class="card">
          <div class="card-content">
            <h4>Contáctenos para sus inquietudes y sugerencias</h4>
            <span class="card-title">Contáctenos para sus inquietudes y sugerencias</span>
            <form class="" action="index.html" method="post">
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">emails</i>
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">short_text</i>
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Asunto</label>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                  <label for="icon_prefix2">Mensaje</label>
                </div>
              </div>
          </div>
          <div class="card-action">
            <div class="row">
              <div class="col s12">
                <button class="btn waves-effect waves-light  red lighten-2" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col l4">
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
    });

  </script>
</body>
</html>
