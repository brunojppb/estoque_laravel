<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js" charset="utf-8"></script>

    </script>
    <title>Listagem de produtos</title>
  </head>
  <body>
    <h1>Detalhes do produto: <?= $p->nome ?> </h1>
    <ul>
      <li>
        <b>Valor:</b> R$ <?= $p->valor ?>
      </li>
      <li>
        <b>Descrição:</b> <?= $p->descricao ?>
      </li>
      <li>
        <b>Quantidade em estoque:</b> <?= $p->quantidade ?>
      </li>
    </ul>
  </body>
</html>
