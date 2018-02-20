@extends('layouts.navbarHome')
@section('content')
<div class="container row-fluid">
    <div class="col-sm-9 col-md-9">
        <h1>Edit Vendas Estoque</h1>
         
         {!! Form::open(['url' => 'updateEditEstoque' , 'method'=> 'POST']) !!}
                
                <div class="form-group col-md-6">
                {!! Form::label('Nome','Nome Cliente:') !!}
                @foreach($editvendas as $vendas)
                {!! Form::text('nome_cliente',$vendas->nome_cliente,['class' => 'form-control' ,'required' => 'Campo obrigatoria' , 'disabled']) !!}
                 @endforeach
                </div>

                <div class="form-group col-md-6">
                {!! Form::label('Nome','Nome produto:') !!}
                {!! Form::text('nome_produto','',['class' => 'form-control' ,'required' => 'Campo obrigatoria', 'disabled']) !!}
               
                </div>

                  <div class="form-group col-md-6">
                {!! Form::label('Parcelas','Parcelas:') !!}
                {!! Form::text('parcelas','',['class' => 'form-control' ,'required' => 'Campo obrigatoria']) !!}
               
                </div>

                  <div class="form-group col-md-6">
                {!! Form::label('Status','Status:') !!}
                {!! Form::text('status','',['class' => 'form-control' ,'required' => 'Campo obrigatoria' , 'disabled']) !!}
               
                </div>

                  <div class="form-group col-md-6">
                {!! Form::label('Valor','Valor:') !!}
                {!! Form::text('total_venda','',['class' => 'form-control' ,'required' => 'Campo obrigatoria']) !!}
               
                </div>


                <div class="form-group col-md-3">
                {!! Form::label('Quantidade','Quantidade:') !!}

                {!! Form::text('quantidade','',['class' => 'form-control ','required' => 'Campo obrigatoria', 'disabled']) !!}

              
                </div>
               
                <div class="form-group col-md-12">
                        {!!  Form::submit('Cadastrar',['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close()!!}

           
          
   </div>
</div>
   
@endsection