@extends('layouts.navbarHome')

@section('content')
<div class="row col-sm-9 col-md-9">
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawVisualization);

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

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
         ['2004/05',  165,      938,         522,             998,           450,      614.6],
         ['2005/06',  135,      1120,        599,             1268,          288,      682],
         ['2006/07',  157,      1167,        587,             807,           397,      623],
         ['2007/08',  139,      1110,        615,             968,           215,      609.4],
         ['2008/09',  136,      691,         629,             1026,          366,      569.6]
      ]);

    var options = {
      title : 'Vendas',
       width:650,
    height:300,
      vAxis: {title: 'Cups'},
      hAxis: {title: 'Month'},
      seriesType: 'bars',
      series: {5: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>

    <!--Table and divs that hold the pie charts-->
    <table class="columns" style="margin-top:-40px;">
      <tr>
        <td><div id="piechart_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="barchart_div" style="border: 1px solid #ccc"></div></td>
        
      </tr>
      <tr>
        <td><div id="chart_div"></div></td>
      </tr>
    </table>

</div>
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