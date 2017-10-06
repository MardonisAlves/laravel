@extends('layouts.navbarHome')
@section('content')
<div class="container row-fluid">
    <div class="col-sm-9 col-md-9">
            <div class="well col-md-12">
                <h3>Nova Venda</h3>

                {!! Form::open(['url' => 'isertClientes' , 'method' => 'post']) !!}
               
               <div class="form-group col-md-6">
                {!! Form::label('Nome','categoria de produtos:') !!}
                 @foreach($clientes as $nome)
                  @endforeach
                {!! Form::select('categoria',
                
                ['' => 'Nome do Cliente',
                $nome->nome => $nome->nome],
               
                null, ['placeholder' => 'Pick a size...','class' => 'form-control','required' =>  'obr'])!!}
              
                </div>

                <div class="form-group col-md-6">
                {!! Form::label('Rua','Rua:') !!}
                {!! Form::text('rua',null,['class' => 'form-control ','required' => 'Campo obrigatoria']) !!}
                </div>

                <div class="form-group col-md-2">
                {!! Form::label('Numero','Numero:') !!}
                {!! Form::text('numero',null,['class' => 'form-control ','required' => 'Campo obrigatoria']) !!}
                </div>

                <div class="form-group col-md-4">
                {!! Form::label('Telefone','Telefone:') !!}
                {!! Form::text('telefone',null,['class' => 'form-control ','required' => 'Campo obrigatoria']) !!}
                </div>

                <div class="form-group col-md-6">
                {!! Form::label('Cidade','Cidade:') !!}
                {!! Form::text('cidade',null,['class' => 'form-control ','required' => 'Campo obrigatoria']) !!}
                </div>

                 <div class="form-group col-md-6">
                {!! Form::label('Estado','Estado:') !!}
                {!! Form::text('estado',null,['class' => 'form-control ','required' => 'Campo obrigatoria']) !!}
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