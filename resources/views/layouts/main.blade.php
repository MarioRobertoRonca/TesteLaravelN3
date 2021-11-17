<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS bood strap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">

        <!-- script da aplicação -->
        <script src="/js/scripts.js"></script>

    </head>
    <body>
        <header>
           <nav class="navbar navbar-expand-lg navbar-light">
              <div class="collapse navbar-collapse" id="navbar">
                  <a href="/" class="navbar-brand">
                    <img src="/img/consulta-medica_log.svg" alt="consulta-medica_log.svg">
                 </a>
                 <ul class="navbar-nav">
                  <li class="nav-item">
                     <a href="/" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item">
                     <a href="/reserves/reserves" class="nav-link"> Meus Agendamento</a>
                  </li>
                  <li class="nav-item">
                     <a href="/reserves/create" class="nav-link">Agendar consulta</a>
                  </li>
              </ul>
              </div>
           </nav>
        </header>
        @yield('content')

        <footer>
            <p> Consulta Médica &copy; 2021</p>
        </footer>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
