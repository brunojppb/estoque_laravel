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
    <h1>Listagem de produtos</h1>
    <table class="table table-striped">
      <?php foreach ($produtos as $p): ?>
      <tr>
        <td> <?= $p->nome ?> </td>
        <td> <?= $p->valor ?> </td>
        <td> <?= $p->descricao ?> </td>
        <td> <?= $p->quantidade ?> </td>
        <td> <a href="/produtos/mostra/<?= $p->id ?>">Visualizar</a> </td>
      </tr>
      <?php endforeach ?>
    </table>
  </body>
</html>
