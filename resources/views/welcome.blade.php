
<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {!! MaterializeCSS::include_css() !!}

        <title>Laravel</title>
        <body>
          <h1 class="">HOLA MUNDO LARAVEL</h1>

          <div class="row">
             <form class="col s12">
               <div class="row">
                 <div class="input-field col s6">
                   <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                   <label for="first_name">First Name</label>
                 </div>
                 <div class="input-field col s6">
                   <input id="last_name" type="text" class="validate">
                   <label for="last_name">Last Name</label>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                   <label for="disabled">Disabled</label>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <input id="password" type="password" class="validate">
                   <label for="password">Password</label>
                 </div>
               </div>
               <div class="row">
                 <div class="input-field col s12">
                   <input id="email" type="email" class="validate">
                   <label for="email">Email</label>
                 </div>
               </div>
               <div class="row">
                 <div class="col s12">
                   This is an inline input field:
                   <div class="input-field inline">
                     <input id="email" type="email" class="validate">
                     <label for="email" data-error="wrong" data-success="right">Email</label>
                   </div>
                 </div>
               </div>
             </form>
           </div>


          {!!Html::script('materialize-css/js/jquery-2.1.1.min.js')!!}
          {!! MaterializeCSS::include_js() !!}
        </body>
</html>

        <!-- Fonts -->
        <!--
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
-->
        <!-- Styles -->
<!--        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
-->
