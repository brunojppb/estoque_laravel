<?php

  namespace estoque\Http\Controllers;

  use Illuminate\Support\Facades\DB;
  use Request;

  class ProdutoController  extends Controller {

    public function lista() {
      $produtos = DB::select('select * from produtos');
      return view('listagem')->with('produtos', $produtos);
    }

    public function mostra() {
      $id = Request::route('id', 0);

      $result = DB::select('select * from produtos where id = ?', [$id]);
      if (empty($result)) {
        return 'produto nao encontrado';
      }

      return view('detalhes')->with('p', $result[0]);
    }

  }
