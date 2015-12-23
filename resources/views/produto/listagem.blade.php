@extends('layout.principal')

@section('conteudo')

@if(empty($produtos))
  <div class="alert alert-danger">
    Nem um produto cadastrado
  </div>
@else
<h1>Listagem de produtos</h1>
<table class="table table-striped">
  @foreach ($produtos as $p)
  <tr class="{{ $p->quantidade <= 1 ? 'danger': '' }}">
    <td> {{ $p->nome }} </td>
    <td> {{ $p->valor }} </td>
    <td> {{ $p->descricao }} </td>
    <td> {{ $p->quantidade }} </td>
    <td> <a href="/produtos/mostra/{{ $p->id }}">Visualizar</a> </td>
  </tr>
  @endforeach
</table>
@endif

@stop
