@extends('layouts.navbarHome')
@section('content')
<div class="container row-fluid">
    <div class="col-sm-9 col-md-9">
            <div class="well col-md-12">
                <h3>Nova Venda</h3>

                <form action={{ url('insertvendas') }} method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="form-group col-lg-12">
                    <label for="nome_cliente">Nome Cliente</label>
                        <select name="nome_cliente" id="nome_cliente" class="form-control" required="Obriatoriio">
                                <option value="">Nome Cliente</option>
                        @foreach($clientes as $nome)
                                <option value= "{{ $nome->nome }}"> {{ $nome->nome }}</option>
                        @endforeach
                        </select>
               </div>

                  <div class="form-group col-lg-6">
                    <label for="nome_cliente">Nome Produto</label>
                        <select name="nome_produto" id="nome_cliente" class="form-control" required="Obriatoriio">
                                <option value="">Nome Produto ....</option>
                        @foreach($produtos as $nome)
                                <option value= "{{ $nome->nome }}"> {{ $nome->nome }}</option>
                        @endforeach
                        </select>
               </div>

                <div class="form-group col-lg-6">
                    <label for="nome_cliente">Estado de Quitação da Compra</label>
                        <select name="status" id="tipo_pagto" class="form-control" required="Obriatoriio">
                                <option value="">Status da compra</option>
                                <option value= "0">Pendente</option>
                                <option value= "1">Quitado</option>
                       </select>
               </div>

                <div class="form-group col-md-6">
                    <label for="total_venda">Preço</label>
                    <input type="text" class="form-control" name="total_venda" required="Obriatoriio">    
                </div>

                <div class="form-group col-md-6">
                <label for="desconto">Desconto</label>
                <input type="text" class="form-control" name="desconto" required="Obriatoriio"> 
                </div>

                <div class="form-group col-md-6">
                <label for="data">Data Compra</label>
                <input type="text" class="form-control" name="data_compra" required="Obriatoriio"> 
                </div>
                 <div class="form-group col-lg-4">
                    <label for="nome_cliente">Tipo de Pagamento</label>
                        <select name="tipo_pagto" id="tipo_pagto" class="form-control" required="Obriatoriio">
                                <option value="">Tipo de Pagamento</option>
                                <option value= "cartao de Credito">Cartão de Credito</option>
                                <option value= "cartao de Debito">Cartão de Debito</option>
                                <option value= "Boleto">Boleto</option>
                                <option value= "Dinheiro">Dinheiro</option>
                                <option value= "Crediário">Crediário</option>
                       </select>
               </div>

                <div class="form-group col-md-4">
                    <label for="quantidade">Quanridade</label>
                    <input type="text" class="form-control" name="quantidade" required="Obriatoriio">    
                </div>

                <div class="form-group col-lg-4">
                    <label for="parcelas">Numero de Parcelas</label>
                        <select name="parcelas" id="tipo_pagto" class="form-control" required="Obriatoriio">
                                <option value="">Numero de Parcelas</option>
                                <option value= "1">1x parcela Avista</option>
                                <option value= "2">2x </option>
                                <option value= "3">3x </option>
                                <option value= "4">4x </option>
                                <option value= "5">5x </option>
                                <option value= "6">6x </option>
                       </select>
               </div>

                <div class="form-group col-md-6">
                <label for=""></label>
                <input type="submit" value="Comfirmar" class="form-control btn btn-primary">
                </div>
            </div>
            </form>

    
</div>
   </div>
        </div>
    </div>
</div>
@endsection