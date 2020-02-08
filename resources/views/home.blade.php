@include('inc.navbar')
@extends('layouts.app')
@section('content')


 <!-- Step 1 - Include the fusioncharts core library -->
 <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <!-- Step 2 - Include the fusion theme -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

 <div class="jumbotron invisible  ">
        
		</div>
<div>		
<script src="{{ asset('java/charts.js') }}" defer></script>
	<div id="chartContainer1" style="height: 300px;  margin-left: 145px"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>


  <!--  -->
  <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses', 'Profit'],
            ['2014', 1000, 400, 200],
            ['2015', 1170, 460, 250],
            ['2016', 660, 1120, 300],
            ['2017', 1030, 540, 350]
          ]);

          var options = {
            chart: {
              title: 'Company Performance',
              subtitle: 'Sales, Expenses, and Profit: 2014-2017',
            }
          };

          var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
      </script>
    
    
    <div id="columnchart_material" style="width: 800px; height: 500px; margin-left:180px"></div>
    <div class="jumbotron invisible  ">
          
      </div>
      <script src="{{ asset('java/batch_chart.js') }}" defer></script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="chart_div"></div> -->
   </div> 
@endsection