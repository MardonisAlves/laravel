@extends('layouts.navbarHome')
@section('content')
<div class="container row-fluid">
    <div class="col-sm-9 col-md-9">
            <div class="well col-md-12">
                <h3>Nova Venda</h3>

                <form action="" method="post">
               <div class="form-group col-lg-12">
                    <label for="nome">Nome Cliente</label>
                        <select name="nome_cliente" id="nome" class="form-control">
                                <option value="">Nome Cliente</option>
                        @foreach($clientes as $nome)
                                <option value={{ $nome->nome }} > {{ $nome->nome }}</option>
                        @endforeach
                        </select>
               </div>

                 <div class="form-group col-md-6">
                    <label for="nomeproduto">Nome produto</label>
                    <input type="text" class="form-control" id="nomeproduto">                       
                </div>

                <div class="form-group col-md-0">
                <input type="hidden" class="form-control" value="0"> 
                </div>

                <div class="form-group col-md-6">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" name="preco_total">    
                </div>

                <div class="form-group col-md-6">
                <label for="desconto">Desconto</label>
                <input type="text" class="form-control" name="desconto"> 
                </div>

                <div class="form-group col-md-6">
                <label for="data">Data Compra</label>
                <input type="text" class="form-control" name="data_compra"> 
                </div>
                <div class="form-group col-md-4">
                <label for=""></label>
                <input type="submit" value="Comfirmar" class="form-control btn btn-primary">
                </div>
            </div>
            {!! Form::close()!!}

    
</div>
   </div>
        </div>
    </div>
</div>
@endsection