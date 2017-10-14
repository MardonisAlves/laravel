@extends('layouts.navbarHome')

@section('content')
<div class="col-sm-9 col-md-9">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Nome Cliente', 'Quantidade'],
            @foreach ($produtos as $produto)
                ['{{$produto->nome}}',{{ $produto->quantidade}}],
            @endforeach 
        ]);

        var options = {
          title: 'Produtos venda',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 400px; height: 200px;"></div>
  </body>



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



 <div class="panel panel-default col-md-12">
            
        <table class="table table-bordered table-hover responsive" >
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
                    <td>
                        @if($office->status == 1)
                        Quitado
                        @else
                        Pendente
                        @endif
                        
                    </td>
                    <td>{{ $office->quantidade }}</td>
                    <td>Valor de {{$office->parcelas}} X {{ $office->total_venda  / $office->parcelas }}</td>
                    <td>{{ $office->total_venda }}</td>
                    <td>{{ $office->tipo_pagto}}</td>
                    <td><a href="#">Update</a></td>
                      
                </tr>
                @endforeach
            </tbody>
        </table>

		{!! $offices->render() !!}
        </div>




@stop