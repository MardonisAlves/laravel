@extends('layouts.navbarHome')

@section('content')
<div class="col-sm-9 col-md-9">

{!! Form::open(['method'=>'GET','url'=>'home','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
 
<div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Search...">
    <span class="input-group-btn">
        <button class="btn btn-primary" type="submit">Procurar
            <i class="fa fa-search"><span class="hiddenGrammarError" pre="" data-mce-bogus="1">
        </button>
    </span>
</div>
{!! Form::close() !!}



 <div class="panel panel-default">
 
 
        <table class="table table-bordered table-hover" >
            <thead>
                <th>Nome</th>
                <th>Produto</th>
                <th>Situação</th>
                <th>Quantidade</th>
                <th>Parcelas</th>
                <th>Total a pagar</th>
                <th>Forma de Pagamento</th>
                <th>Actions</th>

            </thead>
            <tbody>
                @foreach($offices as $office)
                <tr>
                    <td>{{ $office->nome_cliente }}</td>
                     <td>{{ $office->nome_produto}}</td>
                      <td>{{ $office->data_compra}}       </td>
                       <td>{{ $office->quantidade }}</td>
                       <td>{{ $office->parcelas }}</td>
                        <td>{{ $office->total_venda }}</td>
                        <td>{{ $office->tipo_pagto}}</td>
                        <td><a href="#">Update</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        </div>




@stop