@extends('layouts.navbarHome')
@section('content')
<div class="container row-fluid">

    <div class="col-sm-12 col-md-12">
    {!! Form::open(['method'=>'GET','url'=>'Getvendas','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
 
<div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Search...">
    <span class="input-group-btn">
        <button class="btn btn-primary" type="submit">Procurar
            <i class="fa fa-search"><span class="hiddenGrammarError" pre="" data-mce-bogus="1">
        </button>
    </span>
</div>
{!! Form::close() !!}


         <table class="table responsive">
                <thead>
                <tr>
                    <th>Nome Cliente</th> 
                    <th>Nome Produto</th>
                    <th>Parcelas</th>
                    <th>Status</th>
                    <th>Valor</th>
                    <th>Action</th>  
                </tr>
                </thead>
           
                <tbody>

                    @if(isset($editvendas))
                      @foreach($editvendas as $vendas) 
                   
                    <tr>
                  
                    <td>{{$vendas->nome_cliente}}</td>
                    <td>{{$vendas->nome_produto}}</td>
                    <td>{{$vendas->parcelas}}</td>
                    <td>
                    @if($vendas->status == 0)
                    Pendente
                    @else
                    Quitado
                    @endif()
                    </td>
                    <td>{{$vendas->total_venda}}</td>
                    <td>
                    <button><a href="#">Edit</a></button>
                    </td>
                    </tr>

                     @endforeach
                     @else
                     ola
                     @endif()

                    
        
                </tbody>
             
            </table>
            {!! $editvendas->render() !!}
           
          
   </div>
</div>
   
@endsection