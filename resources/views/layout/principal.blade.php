<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js" charset="utf-8"></script>
    <title>Controle de Estoque</title>
  </head>
  <body>
    <div class="container">

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="/produtos">
              Estoque Laravel
            </a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/produtos">Listagem</a></li>
          </ul>
        </div>
      </nav>

      @yield('conteudo')

      <footer class="footer">
          <p>© Livro de Laravel da Casa do Código.</p>
    </footer>

    </div>
  </body>
</html>
