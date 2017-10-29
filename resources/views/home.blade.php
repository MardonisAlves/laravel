@extends('layouts.navbarHome')

@section('content')

 <script type="text/javascript" src="{{('/js/charts.js')}}"></script>
    <script type="text/javascript">

      // Load Charts and the corechart and barchart packages.
        google.charts.load('current', {'packages':['corechart']});
      // Draw the pie chart and bar chart when Charts is loaded.
        google.charts.setOnLoadCallback(drawChart);
        google.charts.setOnLoadCallback(pievendas);
        google.charts.setOnLoadCallback(lucro);
        google.charts.setOnLoadCallback(lucrovendas);

      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Quantidade');
        data.addRows([
         @foreach($produtos as $produto)
            ['{{$produto->nome}}',{{$produto->quantidade}}],
         @endforeach
        ]);

        var piechart_options = {title:'Estoque produtos',
                       width:450,
                       height:300};

        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);
      }

     function pievendas() {
        var data = google.visualization.arrayToDataTable([
            
          ['Language', 'Speakers (in millions)'],
          @foreach($vendas as $venda)
          ['{{$venda->nome_produto}}',  {{$venda->quantidade}}],
          @endforeach
        ]);

      var options = {
            width:300,
            height:300,
        legend: 'none',
        pieSliceText: 'label',
        title: 'Vendas',
        pieStartAngle: 100,
          pieHole: 0.4,
      };

        var chart = new google.visualization.PieChart(document.getElementById('pievendas'));
        chart.draw(data, options);
      }

     function lucro() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Total", { role: "style" } ],
        @foreach($produtos as $valorproduto)

        ["{{$valorproduto->nome}}", {{$valorproduto->precocompra}} * {{$valorproduto->quantidade}}, "green"],

        @endforeach
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Total Acumuldado em Estoque",
        width: 500,
        height: 300,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }

function lucrovendas() {
        var data = google.visualization.arrayToDataTable([
          ['Language', 'Speakers (in millions)'],
            @foreach($vendas as $lucrovendas )
          ['{{$lucrovendas->nome_produto}}', 13],
            @endforeach
        ]);

        var options = {
          title: 'relatorio de lucro',
          legend: 'none',
          width:400,
          height:300,
          pieSliceText: 'label',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('lucrovendas'));
        chart.draw(data, options);
      }

      

</script>

    <!--Table and divs that hold the pie charts-->
    <table class="columns" style="margin-top:60px;">
      <tr>
        <td><div id="piechart_div" style="border: 1px dotted #ccc"></div></td>
        <td><div id="columnchart_values" style="border: 1px dotted #ccc"></div></td>
        
      </tr>
      <tr>
        <td><div id="pievendas" style="border:1px dotted #ccc"></div> </td>
         <td><div id="lucrovendas" style="border:1px dotted #ccc"></div> </td>
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