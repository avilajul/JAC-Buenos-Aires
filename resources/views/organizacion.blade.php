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
  <title>Organización</title>
</head>
<body class="blue-grey lighten-4">
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Inicia sesión</h4>
      <div class="row">
        <form action="#!" method="POST" class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" name="usuario" id="icon_prefix" class="validate" required="">
            <label for="icon_prefix">Usuario</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock</i>
            <input type="password" name="contrasena" id="password" class="validate" required="">
            <label for="password" class>Contraseña</label>
          </div>
        </div>
          <div class="row modal-footer">
          <button class="btn  red lighten-2 waves-effect left waves-light col m6 l3 s12" type="submit" name="login">Iniciar sesión
            </button>
            </div>
        </form>
      </div>
    </div>
    <div class="modal-footer">
       <a href="#!" class="  red-text modal-action modal-close waves-effect waves-light btn-flat">Crear cuenta</a>
    </div>
  </div>
  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li>
      <a class="red-text" href="#!">Quiénes somos</a>
      <a class="red-text" href="#!">Normatividad comunal</a>
      <a class="red-text" href="#!">Organización</a>
    </li>
  </ul>
  <!-- Dropdown Structure -->
  <ul id="dropdown2" class="dropdown-content">
    <li>
      <a class="red-text" href="#!">Quiénes somos</a>
      <a class="red-text" href="#!">Normatividad comunal</a>
      <a class="red-text" href="#!">Organización</a>
    </li>
  </ul>
  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">J.A.C. Buenos Aires</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="home.html">Home</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Quiénes somos<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="sitiosinteres.html">Sitios de interés</a></li>
        <li><a href="contactenos.html">Contáctenos</a></li>
        <!-- Modal Trigger -->
        <li><a href="#modal1" class="modal-trigger waves-effect waves-light">Inciar Sesión</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="home.html">Home</a></li>
        <!-- Modal Trigger -->
        <li><a href="#modal1" class="modal-trigger waves-effect waves-light">Inciar Sesión</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Quiénes somos<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="sitiosinteres.html">Sitios de interés</a></li>
        <li><a href="cronograma.html">Cronograma de actividades</a></li>
        <li><a href="contactenos.html">Contáctenos</a></li>
      </ul>
    </div>
  </nav>
  <div class="row ">
    <div class="col s12 m6 l6">
      <div class="col s12 m12 l12 card-panel white z-depth-4 ">
        <table class="striped">
          <thead>
            <tr>
              <h5 class="header center-align">REPRESENTANTES 2016 - 2020</h5>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><b>Cargo</b></td>
              <td><b>Representante</b></td>
            </tr>
            <tr>
              <td>Presidente</td>
              <td>Willian Caicedo M.</td>
            </tr>
            <tr>
              <td>Vicepresidente</td>
              <td>Victor Manuel Orobio</td>
            </tr>
            <tr>
              <td>Tesorero</td>
              <td>Gerardo Solarte</td>
            </tr>
            <tr>
              <td>Secretario</td>
              <td>Julián Eduardo Avila</td>
            </tr>
            <tr>
              <td>Fiscal</td>
              <td>Daniel Castro S.</td>
            </tr>
            <tr>
              <td>Delegados de Asojuntas</td>
              <td>
                Jorge Humberto Rodriguez <br>
                Luis Evelio Castaño <br>
                Edy Pedroza <br>
                Willian Caicedo M.
              </td>
            </tr>
            <tr>
              <td>Conciliadores</td>
              <td>
                Nidia Martinez Hurtado <br>
                Alvaro Hugo Girón <br>
                Luz Dary Castro <br>
              </td>
            </tr>
            <tr>
              <td>Obras</td>
              <td>Fidel Obando</td>
            </tr>
            <tr>
              <td>Salud</td>
              <td>Dora Lilia Marín</td>
            </tr>
            <tr>
              <td>Deportes</td>
              <td>José Ney Murillo</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col s12 m6 l6">
      <div class="col s12 m12 l12 card-panel z-depth-4">
        <span class="card-title "><h4 class="center">Organización</h4></span>
        <p style="text-align: justify;">
          La Junta de Acción Comunal del Barrio Buenos Aires, está conformada por un Presidente,
          Vicepresidente, Fiscal, Tesorero, Secretaria y los comités de deporte, obras y salud
          y los delegados ante la asociación comunal de juntas (ASOJUNTAS).
        </p>
        <p style="text-align: justify;">
          Consulta aquí los estatutos de la Junta de Acción Comunal del Barrio Buenos Aires del Municipio de Tuluá:
        </p>
        <p style="text-align:justify;">
          La Junta de Acción Comunal actual cuya vigencia transcurre desde el periodo 2016 - 2020,
          está integrada por los siguientes representantes elegidos por votación:
        </p>
      </div>
    </div>
    <div class="col s12 m6 l6">
      <div class="col s12 m12 l12 card-panel white z-depth-4 ">
        <table class="striped">
          <thead>
            <tr>
              <h5 class="header center-align">Radio de Acción y Juridicción Junta Comunal</h5>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><b>Norte</b></td>
              <td>Calle 26 D - Barrios San Pedro Claver y Bolivar</td>
            </tr>
            <tr>
              <td><b>Sur</b></td>
              <td>Calle 27 Vía a Ríofrío</td>
            </tr>
            <tr>
              <td><b>Oriente</b></td>
              <td>Transversal 12 - Urbanización La Esperanza</td>
            </tr>
            <tr>
              <td><b>Occidente</b></td>
              <td>Carrera 1<sup>a</sup> Oeste - Urbanización Asogrín farfán</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
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
      $('.parallax').parallax();
    });
  </script>
</body>
</html>
