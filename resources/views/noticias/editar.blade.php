@extends('main')

@section('title', '| Editar Publicación')

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
        {!! Html::linkRoute('noticia.show', 'Cancelar', array($noticia->id), array('class' => 'waves-effect waves-light btn-large')) !!}
        <i class="material-icons">cancel</i>
        {!! Html::linkRoute('noticia.update', 'Guardar', array($noticia->id), array('class' => 'waves-effect waves-light btn-large')) !!}
        <i class="material-icons">save</i>
      </div>
    </div>
  </div>

@endsection
