@extends('layouts.navbarHome')

@section('content')

        <div class="col-sm-9 col-md-9">
                 
					  <table class="table">
					    <thead>
					      <tr>
					        <th>Nome Produto</th>
					        <th>Nome Cliente</th>
					        <th>Status</th>
					        <th>Total</th>
					        <th>Tipo/Pgato</th>
					        <th>N/Parcelas</th>
					      </tr>
					    </thead>
					    <tbody>
					    @foreach($vendas as $nome)
					      <tr>
					        <td>{{ $nome->nome_produto}}</td>
					        <td>{{ $nome->nome_cliente}}</td>
					        <td>
					        @if($nome->status == 1)
					        Quitado
					        @else
					       	Pendente de Quitação
					       	@endif
					        </td>
					        <td>{{ $nome->total_venda }}R$</td>
					        <td>{{ $nome->tipo_pagto}}</td>
					        <td>
					        	@if($nome->parcelas == 1)
					        	Esta compra foi avista
					        	@else
					        	{{ $nome->parcelas}}
					        	@endif
					        </td>
					      </tr>
					      @endforeach
					    </tbody>
					  </table>
        </div>




@stop