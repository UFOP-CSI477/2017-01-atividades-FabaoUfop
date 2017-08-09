<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <title>{{env('APP_NAME')}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Syslabs</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!-- Styles -->
      <style>
          html, body {
              background-color: #f5f5f0;
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
              font-size: 150px;
          }
          .links > a {
              color: #636b6f;
              padding: 0 25px;
              font-size: 20px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
          }
          .m-b-md {
              margin-bottom: 30px;
          }
          footer {
            background-color: #f5f5f0;
            padding: 25px;
          }
      </style>
  </head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">{{env('APP_NAME')}}</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/welcome">Home</a></li>
        <li><a href="/procedures">Procedimentos</a></li>
        <li><a href="/fornecedores">Testes</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
<!-- Conteudo -->
@yield('conteudo')
  <footer class="container-fluid text-center">
  <p>Sistema de Analyses Fabao Ufop</p>
  </footer>
  </body>
</html>
