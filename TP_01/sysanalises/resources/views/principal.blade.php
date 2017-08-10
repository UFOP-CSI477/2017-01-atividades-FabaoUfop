<!DOCTYPE html>
<html lang="pt_BR">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <title>{{env('APP_NAME')}}</title>
      <style>
          html, body {
              background-color: #f5f5f5;
              color: #39004d;
              font-size: 50px;
              font-family: 'Raleway', sans-serif;
              font-weight: 200;
              height: 200vh;
              margin: 0;
          }
          .full-height {
              height: 100vh;
          }
          .flex-center {
              align-items: baseline;
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
              font-size: 130px;
          }
          .links > a {
              color: #1a1a00;
              padding: 0 25px;
              font-size: 25px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
          }
          .m-b-md {
              margin-bottom: 30px;
          }
          footer {
            background-color: #f5f5f5;
            padding: 25px;
          }
      </style>
  </head>
  <body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                SysAnalises
            </div>
            <div class="links">
              @if (Auth::guest())
                   <a href="{{ route('login') }}">Login</a>
                   <a href="{{ route('register') }}">Registre-se</a>
               @else
                   <li class="links">
                       <a href="#" class="links" data-toggle="dropdown" role="button" aria-expanded="false">
                           {{ Auth::user()->name }} <span class="caret"></span>
                       </a>
                       <ul class="links" role="menu">
                              <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                   Logout
                               </a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   {{ csrf_field() }}
                               </form>
                       </ul>
                   </li>
                   <a href="/geral">Geral</a>
                   <a href="/pacientes">Pacientes </a>
                   <a href="/administradores">Administradores</a>
               @endif
            </div>
        </div>
    </div>
<!-- Conteudo -->
@yield('conteudo')
  <footer class="container text-center">
  <p>Sistema de Analyses Fabao Ufop</p>
  </footer>
  </body>
</html>
