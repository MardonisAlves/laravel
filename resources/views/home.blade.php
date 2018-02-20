@extends('layouts.navbarHome')

@section('content')

 <script type="text/javascript" src="{{('/js/charts.js')}}"></script>
    <script type="text/javascript">

      // Load Charts and the corechart and barchart packages.
        google.charts.load('current', {'packages':['corechart']});
        google.charts.load('current', {'packages':['table']});
        
      // Draw the pie chart and bar chart when Charts is loaded.
        google.charts.setOnLoadCallback(drawChart);
         google.charts.setOnLoadCallback(estoquezero);
        google.charts.setOnLoadCallback(lucro);
        google.charts.setOnLoadCallback(lucrovendas);

      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Quantidade');
        data.addRows([
         @foreach($produtos as $produto)
            ['{{$produto->nome}}',{{$produto->unidade}}],
         @endforeach
        ]);

        var piechart_options = {title:'Estoque produtos',
                       width:500,
                       height:300};

        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);
      }

     

     function lucro() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Total", { role: "style" } ],
        @foreach($produtos as $valorproduto)

        ["{{$valorproduto->nome}}", {{$valorproduto->precocompra}} * {{$valorproduto->unidade}}, "green"],

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
        title: "Valor Acumuldado em Estoque",
        width: 600,
        height: 300,
        bar: {groupWidth: "5%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }


function estoquezero() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "unidade", { role: "style" } ],
       
        ["valor", {{$total_venda}}, "#b87333"],
     
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Total bruto de Vendas",
        width: 400,
        height: 400,
        bar: {groupWidth: "5%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("estoquezero"));
      chart.draw(view, options);
  }

function lucrovendas() {
  var data = new google.visualization.DataTable();
        data.addColumn('string', 'Lucro de vendas por produtos');
        data.addColumn('number', 'Preço venda');
        data.addColumn('string', 'Qunatidade');
        data.addColumn('string', 'desconto');
        data.addColumn('string', 'lucro');

        data.addRows([
          @foreach($vendas as $valorvendas)

          ['{{$valorvendas->nome_produto}}',  
          {v: 10000, f: '{{$valorvendas->total_venda}}'}, 
          '{{$valorvendas->quantidade}}',
          '{{$valorvendas->desconto}}',
          '{{$valorvendas->precocompra / 100 * $valorvendas->taxajuros}}'],
          @endforeach
        ]);

      

        var table = new google.visualization.Table(document.getElementById('lucrovendas'));

        table.draw(data, {
          showRowNumber: true, 
          width: '100%', height: '100%',
          page: 'enable',
          pageSize: 5,
          pagingSymbols: {
            prev: 'prev',
            next: 'next'
        },
        pagingButtonsConfiguration: 'auto'});

      }

      

</script>

    <!--Table and divs that hold the pie charts-->
    <table class="columns" style="margin-top:60px;">
      <tr>
        <td><div id="piechart_div"></div></td>
        <td><div id="columnchart_values"></div></td>
        <td><div id="estoquezero"></div> </td>
        <tr>
         <td>
          
          <div id="lucrovendas"></div> 
        </td>
      </tr>
    </table>

@stop