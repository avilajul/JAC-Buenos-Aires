@extends('main')

@section('title', '| Crear Nueva Noticia')

@section('content')
  <div class="row container">
    <div class="col s12 m6 l12">
      <div class="card ">
        <div class="card-content">
          <h4>Crear nueva noticia</h4>
          {!! Form::open([ 'id'=>'formNoticia', 'route' => 'noticias.store']) !!}
            <div class="row">
              <div class="input-field col s12 m6 l10">
                <i class="material-icons prefix">title</i>
                {{ Form::label('campo_titulo', 'Titulo') }}
                {{ Form::text('campo_titulo', null, array('id'=>'campo_titulo', 'name' => 'campo_titulo', 'data-validation' =>'text', 'data-content' => 'El campo Titulo es obligatorio', 'data-length'=> '60')) }}
              </div>
              <div class="input-field col s12 m6 l12">
                <i class="material-icons prefix">subject</i>
                {{ Form::label('campo_contenido', 'Contenido') }}
                {{ Form::textarea('campo_contenido', null, array( 'id'=>'campo_contenido', 'name'=>'campo_contenido', 'data-validation' =>'text', 'data-content' => 'El campo Contenido es obligatorio', 'class'=> 'materialize-textarea')) }}
              </div>
            </div>
        </div>
        <div class="card-action">
          <div class="row">
            <div class="col s12">
              <button class="btn waves-effect waves-light  red lighten-2" type="submit" name="action">Crear Noticia
                  <i class="material-icons right">send</i>
                </button>
            </div>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    <div class="col l4">
    </div>
  </div>

@endsection
