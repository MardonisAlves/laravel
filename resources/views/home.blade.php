@extends('layouts.navbarHome')

@section('content')
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});
     

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);
     google.charts.setOnLoadCallback(pievendas);

      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
         @foreach($produtos as $produto)
            ['{{$produto->nome}}',{{$produto->quantidade}}],
         @endforeach
        ]);

        var piechart_options = {title:'Estoque produtos',
                       width:650,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'produtos',
                       width:300,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
        barchart.draw(data, barchart_options);
      }

     function pievendas() {
        var data = google.visualization.arrayToDataTable([
            
          ['Language', 'Speakers (in millions)'],
          @foreach($vendas as $venda)
          ['{{$venda->nome_produto}}',  {{$venda->quantidade}}],
          @endforeach
        ]);

      var options = {
            width:400,
            height:280,
        legend: 'none',
        pieSliceText: 'label',
        title: 'Vendas',
        pieStartAngle: 100,
          pieHole: 0.4,
      };

        var chart = new google.visualization.PieChart(document.getElementById('pievendas'));
        chart.draw(data, options);
      }

      

</script>

    <!--Table and divs that hold the pie charts-->
    <table class="columns" style="margin-top:-10px;">
      <tr>
        <td><div id="piechart_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart_div" style="border: 1px solid #ccc"></div></td>
        
      </tr>
      <tr>
        <td><div id="pievendas" style="border: 1px solid #ccc"></div> </td>
      </tr>
    </table>
    

<!---COMENTARIO--DO==CAMPOS--DE--BUSCA-->
<!--{!! Form::open(['method'=>'GET','url'=>'home','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
 
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
            @if(isset($offices))
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
                @endif
            </tbody>
        </table>
        @if(isset($offices))
		{!! $offices->render() !!}
        @endif
        </div>-->




@stop