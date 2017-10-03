@extends('layouts.navbarHome')
@section('content')
<div class="container row-fluid">
    <div class="col-sm-9 col-md-9">
            <div class="well">
                <h1>Cadastro de Clientes</h1>

                {!! Form::open(['url' => 'cadproduto' , 'enctype'=>'multipart/form-data']) !!}
               
                <div class="form-group col-md-6">
                {!! Form::label('Nome','Nome produto:') !!}
                {!! Form::text('nome',null,['class' => 'form-control' ,'required' => 'Campo obrigatoria']) !!}

                </div>

                <div class="form-group col-md-10">
                {!! Form::select('categoria', 
                ['' => 'Eletrodomestico', 
                'Moveis' => 'Moveis'], 
                null, ['placeholder' => 'Pick a size...','class' => 'form-control','required' =>  'obr'])!!}

                </div>

                <div class="form-group col-md-3">
                {!! Form::label('Quantidade','Quantidade:') !!}
                {!! Form::text('quantidade',null,['class' => 'form-control ','required' => 'Campo obrigatoria']) !!}
                </div>

                <div class="form-group col-md-3">
                {!! Form::label('Preco','Preço/Unidade:') !!}
                {!! Form::text('precocompra',null,['class' => 'form-control ','required' => 'Campo obrigatoria']) !!}
                </div>

                <div class="form-group col-md-3">
                {!! Form::label('Taxa','Taxa/Lucro:') !!}
                {!! Form::text('taxajuros',null,['class' => 'form-control ','required' => 'Campo obrigatoria']) !!}
                </div>

                <div class="form-group col-md-3">
                {!! Form::label('Cor','Cor/Produto:') !!}
                {!! Form::text('cor',null,['class' => 'form-control ','required' => 'Campo obrigatoria']) !!}
                </div>
                <div class="form-group col-md-10">
                        {!!  Form::submit('Cadastrar',['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close()!!}

    
</div>
   </div>
        </div>
    </div>
</div>
@endsection