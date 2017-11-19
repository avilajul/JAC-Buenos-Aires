@extends('main')

@section('title', '| Crear Nueva Noticia')

@section('content')
  <div class="row container">
    <div class="col s12 m6 l12">
      <div class="card ">
        <div class="card-content">
          <h4>Crear nueva noticia</h4>
          {!! Form::open(['route' => 'noticias.store']) !!}
            <div class="row">
              <div class="input-field col s12 m6 l10">
                <i class="material-icons prefix">title</i>
                {{ Form::label('title', 'Titulo') }}

                {{ Form::text('title', null, array('id'=>'input_text', 'data-length'=> '255')) }}
              </div>
              <div class="input-field col s12 m6 l12">
                <i class="material-icons prefix">subject</i>
                {{ Form::label('body', 'Contenido') }}
                {{ Form::textarea('body', null, array('class'=> 'validate, materialize-textarea')) }}
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
