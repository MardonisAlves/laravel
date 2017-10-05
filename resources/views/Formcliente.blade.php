@extends('layouts.navbarHome')
@section('content')
<div class="container row-fluid">
    <div class="col-sm-9 col-md-9">
            <div class="well col-md-12">
                <h3>Cadastro de Clientes</h3>

                {!! Form::open(['url' => 'isertClientes' , 'method' => 'post']) !!}
               
                <div class="form-group col-md-12">
                {!! Form::label('Nome','Nome Cliente:') !!}
                {!! Form::text('nome',null,['class' => 'form-control' ,'required' => 'Campo obrigatoria']) !!}

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