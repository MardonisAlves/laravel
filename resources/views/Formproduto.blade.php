@extends('layouts.navbarHome')
@section('content')
<div class="container row-fluid">
   <h1>Novo Produto</h1>

                {!! Form::open(['url' => 'cadproduto' , 'enctype'=>'multipart/form-data']) !!}
               
                <div class="form-group">
                {!! Form::label('Nome','Nome produto:') !!}
                {!! Form::text('nome',null,['class' => 'form-control']) !!}

                </div>
                <div class="form-group">
                {!! Form::label('Quantidade','Quantidade:') !!}
                {!! Form::text('quantidade',null,['class' => 'form-control ']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('Preco','Preço/Unidade:') !!}
                {!! Form::text('precocompra',null,['class' => 'form-control ']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('Taxa','Taxa/Lucro:') !!}
                {!! Form::text('taxajuros',null,['class' => 'form-control ']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('Cor','Cor/Produto:') !!}
                {!! Form::text('cor',null,['class' => 'form-control ']) !!}
                </div>

                <div class="form-group" id="textarea">
                        {!! Form::textarea('descricao',null,['class' => 'col-md-12' , 'id'=> 'textarea'])!!}
                </div>

                <div class="form-group" style="margin-top:35px;">
                        {!! Form::file('url_image',['class' => 'form-control btn btn-primary'])!!}
                   
                </div>
                <div class="form-group">
                        {!!  Form::submit('Cadastrar',['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close()!!}

    
</div>
@endsection