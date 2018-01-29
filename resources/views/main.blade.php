<!DOCTYPE html>
<html lang="es">
<head>
  @include('base._head')
</head>
<body class="blue-grey lighten-4">
  @include('base._nav')
  @include('base._mensajes')
  @yield('content')

  @include('base._footer')

@include('base._javascript')
@include('base._parallax')

</body>
</html>
