@extends('layouts.navbarHome')
@section('content')
<div class="container row-fluid">
    <div class="col-sm-9 col-md-9">
            <div class="well col-md-12">
        @if(isset($name))
           <div class="alert alert-danger">
           {!! $name !!}
           </div>
        @endif

                {!! Form::open(['url' => 'cadproduto' , 'enctype'=>'multipart/form-data']) !!}
               
                <div class="form-group col-md-6">
                {!! Form::label('Nome','Nome produto:') !!}
                {!! Form::text('nome',null,['class' => 'form-control' ,'required' => 'Campo obrigatoria']) !!}

                </div>

                <div class="form-group col-md-6">
                {!! Form::label('Nome','categoria de produtos:') !!}
                {!! Form::select('categoria', 
                ['' => 'Eletrodomestico', 
                'Moveis' => 'Moveis', 
                'Cozinha' => 'Conzinha'],
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

                <div class="form-group col-md-2">
                {!! Form::label('Taxa','Taxa/Lucro:') !!}
                {!! Form::text('taxajuros',null,['class' => 'form-control ','required' => 'Campo obrigatoria']) !!}
                </div>

                <div class="form-group col-md-4">
                {!! Form::label('Cor','Cor/Produto:') !!}
                {!! Form::text('cor',null,['class' => 'form-control ','required' => 'Campo obrigatoria']) !!}
                </div>

                <div class="form-group col-md-12" id="">
                        {!! Form::textarea('descricao',null,['class' => 'col-md-12' , 'id'=> 'textarea','required' => 'Campo obrigatoria'])!!}
                </div>

                <div class="form-group col-md-12" style="margin-top:35px;">
                        {!! Form::file('url_image',['class' => 'form-control btn btn-primary','required' => 'Campo obrigatoria'])!!}
                   
                </div>
                <div class="form-group col-md-12">
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