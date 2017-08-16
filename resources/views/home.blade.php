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
  <title>Home</title>
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
       <a href="#!" class="  red-text modal-action modal-close waves-effect waves-green btn-flat">Crear cuenta</a>
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
        <li><a href="cronograma.html">Cronograma</a></li>
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
        <li><a href="cronograma.html">Cronograma</a></li>
        <li><a href="contactenos.html">Contáctenos</a></li>
      </ul>
    </div>
  </nav>
  <div class="parallax-container">
    <div class="parallax"><img src="images/portada.jpg"></div>
  </div>
  <div class="row">
        <div class="col s6 l8">
          <div class="row">
            <div class="col l6">
              <div class="card">
                <div class="card-image">
                  <img src="images/portada.jpg"><!--
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>-->
                </div>
                <div class="card-content">
                  <span class="card-title">Título de la Tarjeta</span>
                  <p>Soy una tarjeta muy simple. Soy buena mostrando pequeños trozos de información. Soy conveniente porque requiero pocas etiquetas para usarme efectivamente.</p>
                </div>
                <div class="card-action">
                  <a href="#">Leer más...</a>
                  <a class="btn-floating  waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
              </div>
            </div>
            <div class="col l6">
              <div class="card">
                <div class="card-image">
                  <img src="images/portada.jpg"><!--
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>-->
                </div>
                <div class="card-content">
                  <span class="card-title">Título de la Tarjeta</span>
                  <p>Soy una tarjeta muy simple. Soy buena mostrando pequeños trozos de información. Soy conveniente porque requiero pocas etiquetas para usarme efectivamente.</p>
                </div>
                <div class="card-action">
                  <a href="#">Leer más...</a>
                  <a class="btn-floating  waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
              </div>
            </div>
            <div class="col l6">
              <div class="card">
                <div class="card-image">
                  <img src="images/portada.jpg"><!--
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>-->
                </div>
                <div class="card-content">
                  <span class="card-title">Título de la Tarjeta</span>
                  <p>Soy una tarjeta muy simple. Soy buena mostrando pequeños trozos de información. Soy conveniente porque requiero pocas etiquetas para usarme efectivamente.</p>
                </div>
                <div class="card-action">
                  <a href="#">Leer más...</a>
                  <a class="btn-floating  waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
              </div>
            </div>
            <div class="col l6">
              <div class="card">
                <div class="card-image">
                  <img src="images/portada.jpg"><!--
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>-->
                </div>
                <div class="card-content">
                  <span class="card-title">Título de la Tarjeta</span>
                  <p>Soy una tarjeta muy simple. Soy buena mostrando pequeños trozos de información. Soy conveniente porque requiero pocas etiquetas para usarme efectivamente.</p>
                </div>
                <div class="card-action">
                  <a href="#">Leer más...</a>
                  <a class="btn-floating  waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s6  l4">
          <div class="white">
            <table class="striped">
                    <thead>
                      <tr>
                        <h5 class="header center-align">Datos de Interés</h5>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Año de fundación</td>
                        <td>2007</td>
                      </tr>
                      <tr>
                        <td>Barrios que la comprenden</td>
                        <td>Buenos Aires</td>
                      </tr>
                      <tr>
                        <td>Comuna</td>
                        <td>Comuna No. 6</td>
                      </tr>
                      <tr>
                        <td>Número de habitantes</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Número de predios</td>
                        <td> </td>
                      </tr>
                      <tr>
                        <td>Personería Jurídica</td>
                        <td>0447 de Marzo 24 de 2011-05-24</td>
                      </tr>
                      <tr>
                        <td>Periodo actual</td>
                        <td>2016 - 2020</td>
                      </tr>
                      <tr>
                        <td>Presidente</td>
                        <td>William Caicedo Melecio</td>
                      </tr>
                    </tbody>
                  </table>
          </div>
          <div class="card l12 s12">
            <div class="card-content">
              <h5 class="center-align ">Simbolos de las Juntas de Acción Comunal</h5>

            </div>
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#test4">Himno</a></li>
                <li class="tab"><a  href="#test5">Bandera</a></li>
                <li class="tab"><a href="#test6">Escudo</a></li>
              </ul>
            </div>
            <div class="card-content grey lighten-4">
              <div id="test4" class="center-align">
                <a href="https://drive.google.com/folderview?id=0B4ZVQzzDMVwBeHZYUzlyek05dzQ&amp;usp=sharing" imageanchor="1" target="_blank">
                  <img class="circle responsive-img" alt="https://drive.google.com/folderview?id=0B4ZVQzzDMVwBeHZYUzlyek05dzQ&amp;usp=sharing" border="0" src="https://sites.google.com/site/jacbuenosairestulua/home/sonido1.png">
                </a>
                <p>
                  <span class="center-align"> Descargar Himno y Letra de La Acción Comunal</span>
                </p>
              </div>
              <div id="test5" class="center-align">
                <p style="text-align: justify;">
                  La bandera comunal se compone de tres colores: blanco, amarillo, verde. Fue aprobada en el VI Congreso en la ciudad de Manizales en marzo 28 al 31 de 1979.
                </p>
                <br>
                <a href="https://sites.google.com/site/jacbuenosairestulua/jacbarrioelprincipe/nuestros-simbolos" imageanchor="1" style="line-height:1.5">
                  <img class="responsive-img" alt="https://sites.google.com/a/tulua.gov.co/jacbarrioelprincipe/jacbarrioelprincipe/nuestros-simbolos" border="0" src="https://sites.google.com/site/jacbuenosairestulua/home/Bandera%20Accion%20Comunal%201.GIF">
                </a>
              </div>
              <div id="test6" class="center-align">
                <p style="text-align: justify;">
                  El escudo que representa las Juntas de Acción Comunal, esta dividida en tres franjas horizontales,
                  la primera franja superior tiene fondo blanco como símbolo de paz, resalta la bandera Colombiana
                  símbolo de nuestra patria y orgullo de lo que somos: ¡Colombianos ante todo!.
                </p> <br>
                <p style="text-align: justify;">
                  En la franja central resalta fondo verde el cual lleva la pica, la pala y un hacha que se entrelazan.
                  El color verde significa esperanza, vida y abundancia; la pica, la pala y el hacha, significan
                  el trabajo como deber natural, personal y social que contribuye al bien común y dignifica al hombre.
                  Las herramientas entrelazadas significan la cooperación, unión de esfuerzos, deseos de superación,
                  de cambio, de organización para el desarrollo integral de toda comunidad.

                </p>
                <p style="text-align: justify;">
                  En la franja inferior sobre fondo amarillo como significado de sabiduría y riqueza, resalta la familia;
                  esta como célula primaría de la sociedad es la esencia y base del sistema comunal, su unión es el fundamento
                  que permite lograr el progreso integral de la comunidad. El escudo está rodeado en color verde, con las palabras
                  Acción Comunal Colombia en blanco y fue aprobado en el IV Congreso Nacional de Acción Comunal
                  realizado en Villavicencio en 1974.
                </p>
                <br>
                <a href="https://sites.google.com/site/jacbuenosairestulua/jacbarrioelprincipe/nuestros-simbolos" imageanchor="1" style="line-height:1.5">
                  <img alt="https://sites.google.com/a/tulua.gov.co/jacbarrioelprincipe/jacbarrioelprincipe/nuestros-simbolos" border="0" src="https://sites.google.com/site/jacbuenosairestulua/_/rsrc/1472158651108/home/Escudo%20Accion%20Comunal%201.GIF" data-pin-nopin="true">
                </a>
              </div>
            </div>
          </div>
          <div class="col l12 white center-align">
          <p><h5 class="center-align red-text">Próximamente</h5></p>
          <span >Visitanos también en facebook y  Visitanos en Twitter</span>
          </div>
        </div>
      </div>


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
