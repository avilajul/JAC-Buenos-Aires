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
    <a class="red-text" href="quienes_somos">Quiénes somos</a>
    <a class="red-text" href="normatividad_comunal">Normatividad comunal</a>
    <a class="red-text" href="organizacion">Organización</a>
  </li>
</ul>
<!-- Dropdown Structure -->
<ul id="dropdown2" class="dropdown-content">
  <li>
    <a class="red-text" href="quienes_somos">Quiénes somos</a>
    <a class="red-text" href="normatividad_comunal">Normatividad comunal</a>
    <a class="red-text" href="organizacion">Organización</a>
  </li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">J.A.C. Buenos Aires</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
      <!-- Dropdown Trigger -->
      <li class="{{ Request::is('dropdown1') ? "active" : "" }}"><a class="dropdown-button" href="#!" data-activates="dropdown1">Quiénes somos<i class="material-icons right">arrow_drop_down</i></a></li>
      <li class="{{ Request::is('sitios_interes') ? "active" : "" }}"><a href="sitios_interes">Sitios de interés</a></li>
      <li class="{{ Request::is('cronograma') ? "active" : "" }}"><a href="cronograma">Cronograma</a></li>
      <li class="{{ Request::is('contactenos') ? "active" : "" }}"><a href="contactenos">Contáctenos</a></li>
      <!-- Modal Trigger -->
      <li><a href="#modal1" class="modal-trigger waves-effect waves-light">Inciar Sesión</a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
      <!-- Modal Trigger -->
      <li><a href="#modal1" class="modal-trigger waves-effect waves-light">Inciar Sesión</a></li>
      <!-- Dropdown Trigger -->
      <li ><a class="dropdown-button" href="#!" data-activates="dropdown2">Quiénes somos<i class="material-icons right">arrow_drop_down</i></a></li>
      <li class="{{ Request::is('sitios_interes') ? "active" : "" }}"><a href="sitios_interes">Sitios de interés</a></li>
      <li class="{{ Request::is('cronograma') ? "active" : "" }}"><a href="cronograma">Cronograma</a></li>
      <li class="{{ Request::is('contactenos') ? "active" : "" }}"><a href="contactenos">Contáctenos</a></li>
    </ul>
  </div>
</nav>
