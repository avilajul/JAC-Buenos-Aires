@extends('main')

@section('title', '| Vista Noticia')

@section('content')

  <div class="row">
    <div class="col s6 l8">
      <div class="card">
        <div class="card-image">
          <img src="images/portada.jpg"><!--
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>-->
        </div>
        <div class="card-content">
          <h1>{{ $post->titulo }}</h1>
          <span class="card-title">Título de la Tarjeta</span>
          <p class="lead">{{ $noticia->contenido}}</p>
        </div>
        <div class="card-action">
          <a href="#">Leer más...</a>
          <a class="btn-floating  waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
      </div>
    </div>
    <div class="col s6 l4">
      <div class="row">
        <dl class="">
          <dt>Creado:</dt>
          <dd>{{ date('M j, Y h:ia', strtotime($noticia->created_at)) }}</dd>
        </dl>
        <dl class="">
          <dt>Acutalizado:</dt>
          <dd>{{ date('M j, Y h:ia', strtotime($noticia->updated_at)) }}</dd>

        </dl>
      </div>
      <div class="row">
        {!! Html::linkRoute('noticia.edit', 'Editar', array($noticia->id), array('class' => 'waves-effect waves-light btn-large')) !!}
        <i class="material-icons">mode_edit</i>
        {!! Html::linkRoute('noticia.destroy', 'Eliminar', array($noticia->id), array('class' => 'waves-effect waves-light btn-large')) !!}
        <i class="material-icons">delete_forever</i>
      </div>
    </div>
  </div>
  
@endsection

@endsection
