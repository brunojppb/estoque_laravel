<?php

  namespace estoque\Http\Controllers;

  use Illuminate\Support\Facades\DB;
  use Request;

  class ProdutoController  extends Controller {

    public function lista() {
      $produtos = DB::select('select * from produtos');
      return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id) {

      $result = DB::select('select * from produtos where id = ?', [$id]);
      if (empty($result)) {
        return 'produto nao encontrado';
      }

      return view('produto.detalhes')->with('p', $result[0]);
    }

  }
