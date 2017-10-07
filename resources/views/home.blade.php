@extends('layouts.navbarHome')

@section('content')

        <div class="col-sm-9 col-md-9">
                 
					  <table class="table">
					    <thead>
					      <tr>
					        <th>Nome Produto</th>
					        <th>Nome Cliente</th>
					        <th>Status</th>
					        <th>Quantidade</th>
					        <th>Total Apagar</th>
					        <th>Data Compra</th>
					      </tr>
					    </thead>
					    <tbody>
					    @foreach($vendas as $nome)
					      <tr>
					        <td>{{ $nome->nome_produto}}</td>
					        <td>{{ $nome->nome_cliente}}</td>
					        <td>
					        {{ $nome->status }}
					        </td>
					        <td>{{ $nome->total_venda }}R$</td>
					        <td>New York</td>
					        <td>USA</td>
					      </tr>
					      @endforeach
					    </tbody>
					  </table>
        </div>




@stop