@extends('main')

@section('title', '| Todas las noticias')

@section('content')

  <div class="row">
    <div class="col m10 l7">
      <h1>Todas las noticias</h1>
    </div>
    <div class="col m2 l5">
      <a href="{{ route('noticias.create') }}" class="waves-effect waves-light btn">
        <i class="material-icons left">create</i>Crear nueva noticia</a>
    </div>
  </div>

  <div class="row">
    <div class="col l12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Titulo</th>
          <th>Cuerpo</th>
          <th>Creado por</th>
          <th></th>
        </thead>
        <tbody>
           @foreach ($noticias as $noticia)
             <tr>
               <th>{{ $noticia->id }}</th>
               <td>{{ $noticia->titulo }}</td>
               <td>{{ substr($noticia->cuerpo, 0, 50) }} {{strlen($noticia->contenido) > 50 ?  "..." : ""  }}</td>
               <td>{{ date('M j, Y', strtotime($noticia->created_at)) }}</td>
               <td>
                 <a href="{{route('noticias.noticia', $noticia->id)}}" class="waves-effect waves-light btn"><<i class="material-icons">visibility</i>Ver</a>
                 <a href="{{route('noticias.edit'), $noticia->id}}" class="waves-effect waves-light btn"><i class="material-icons left">edit</i>Editar</a>
               </td>
             </tr>

           @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
