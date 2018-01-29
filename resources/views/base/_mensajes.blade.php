@if (Session::has('success'))
  <script type="text/javascript">
     Materialize.toast({{ Session::get('success')}}, 6000);
  </script>

@endif

@if (count($errors) > 0)
  <script type="text/javascript">
    @foreach ($errors->all() as $error)
     Materialize.toast({{$error}}, 6000);
    @endforeach
  </script>


@endif
