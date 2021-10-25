@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'CRM'],
          ['2017',  6000],
          ['2018',  7300],
          ['2019',  5800],
          ['2020',  6200],
          ['2021',  10800]
        ]);

        var options = {
          title: 'Progression des MATIÈRES PREMIÈRES MÉTAUX pendant 5 ans :',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 80%; height: 400px;padding: 5px 5px 20px 140px;"></div>
  </body>
</html>

          <html>
            <head>
              <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
              <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  
              <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
              <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
 
              <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
              <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>


              
              <script type="text/javascript">
                google.charts.load('current', {'packages':['table']});
                google.charts.setOnLoadCallback(drawTable);
          
                function drawTable() {
                  var data = new google.visualization.DataTable();
                  data.addColumn('string', 'Libellé');
                  data.addColumn('number', 'Dernier');
                  data.addColumn('number', 'Var.1er jan');
                  data.addColumn('number', 'Var.52 sem');
                  data.addRows([
                    ['Alliage d aluminium',  {v: 2518, f: '2 518,000$/tonne'}, {v: 31, f: '+31,01%'}, {v: 73, f: '+72,35%'}],
                    ['Aluminium',   {v:2886,   f: '2 886,000$/tonne'},  {v: 45, f: '+44,63%'}, {v: 66, f: '+65,48%'}],
                    ['Antimoine', {v: 11850, f: '11 850,000$/tonne'}, {v: 88, f: '+88,10%'}, {v: 108, f: '+107,89%'}],
                    ['Argent',   {v: 22585,  f: '22,585$/oz'},  {v: 15, f: '-14,90%'}, {v: 2, f: '-1,86%'}],
                    ['Argent CE3',   {v: 749,  f: '748,854€/kg'},  {v: 9, f: '-9,43%'}, {v: 4, f: '-3,67%'}],
                    ['Arsenic',   {v: 1250,  f: '1,250$/lb'},  {v: 4, f: '-3,85%'}, {v: 55, f: '-54,55%'}],
                    ['Base cuivre',   {v: 908310,  f: '908,310€/kg'},  {v: 24, f: '+23,85%'}, {v: 34, f: '+34,43%'}],
                    ['Base laminé bronze 94/4',   {v: 1020,  f: '1 020,040€/kg'},  {v: 30, f: '+29,59%'}, {v: 40, f: '+40,45%'}],
                    ['Base laminé bronze 94/6',   {v: 1075,  f: '1 075,920€/kg'},  {v: 32, f: '+32,19%'}, {v: 43, f: '+43,16%'}],
                    ['Base laminé laiton 1 Titre',   {v: 731,  f: '730,530€/kg'},  {v: 22, f: '+22,27%'}, {v: 32, f: '+31,78%'}],
                    ['Base laminé laiton 70/30',   {v: 747,  f: '746,690€/kg'},  {v: 22, f: '+22,44%'}, {v: 32, f: '+32,07%'}],
                    ['Base laminé laiton 85/15',   {v: 828,  f: '827,500€/kg'},  {v: 23, f: '+23,21%'}, {v: 33, f: '+33,36%'}],
                    ['Bismuth 99.99%',   {v: 3780,  f: '3,780$/lb'},  {v: 26, f: '+26,00%'}, {v: 35, f: '+35,00%'}],
                    ['Cadmium 99.95%',   {v: 0.940,  f: '0,940$/lb'},  {v: 4.44, f: '+4,44%'}, {v: 1.05, f: '-1,05%'}],
                    ['Cadmium 99.99%',   {v: 1.100,  f: '1,100$/lb'},  {v: 16, f: '+15,79%'}, {v: 10, f: '+10,00%'}],
                    ['Cobalt(cathode)99.80%',   {v: 24,  f: '23,750$/lb'},  {v: 51, f: '+50,79%'}, {v: 53, f: '+53,23%'}],
                    ['Cuivre',   {v: 9253,  f: '9 253,000$/tonne'},  {v: 19, f: '+18,57%'}, {v: 36, f: '+35,87%'}],
                    ['Cuivre',   {v: 4,  f: '4,218cents/lb'},  {v: 20, f: '+19,85%'}, {v: 41, f: '+40,89%'}],
                    ['Cuivre(GIRM)',   {v: 8085,  f: '8 085,00€/tonne'},  {v: 25, f: '+24,58%'}, {v: 36, f: '+36,11%'}],
                    ['Etain',   {v: 35975,  f: '35 975,000$/tonne'},  {v: 75, f: '+75,14%'}, {v: 100, f: '+99,88%'}],
                    ['Ferro manganèse (HC)',   {v: 1380,  f: '1 380,000$/tonne'},  {v: 33, f: '+32,69%'}, {v: 32, f: '+31,62%'}],
                    ['Ferro Molybdene',   {v: 46,  f: '46,250$/kg'},  {v: 97, f: '+96,81%'}, {v: 120, f: '+120,45%'}],
                    ['Gallium',   {v: 312,  f: '312,500$/kg'},  {v: 19, f: '+19,50%'}, {v: 69, f: '+68,92%'}],
                    ['Germanium(50ohm)',   {v: 1257,  f: '1 257,500$/kg'},  {v: 18, f: '+18,35%'}, {v: 26, f: '+26,07%'}],
                    ['Indium',   {v: 215,  f: '215,500$/kg'},  {v: 18, f: '+17,81%'}, {v: 39, f: '+38,71%'}],
                    ['Mercure',   {v: 730,  f: '730,000 flacon de 76 lbs'},  {v: 0, f: 'NA'}, {v: 0, f: 'NA'}],
                    ['Nickel',   {v: 18175,  f: '18 175,000$/tonne'},  {v: 8, f: '+8,35%'}, {v: 26, f: '+25,95%'}],
                    ['Palladium',   {v: 1892,  f: '1 892,000$/oz.tr'},  {v: 19, f: '-19,21%'}, {v: 18, f: '-18,17%'}],
                    ['Platine',   {v: 964,  f: '964,000$/oz.tr'},  {v: 9, f: '-9,23%'}, {v: 8, f: '+8,19%'}],
                    ['PLOMB',   {v: 2113,  f: '2 113,000$/tonne'},  {v: 7, f: '+7,48%'}, {v: 17, f: '+16,77%'}],
                    ['Ruthenium',   {v: 673,  f: '673,000$/oz'},  {v: 151, f: '+151,12%'}, {v: 151, f: '+151,12%'}],
                    ['Selenium 99.50%',   {v: 10,  f: '9,850$/lb'},  {v: 54, f: '+53,91%'}, {v: 50, f: '+50,38%'}],
                    ['Silicone(masse)',   {v: 2250,  f: '2 250,000$/tonne'},  {v: 31, f: '+30,81%'}, {v: 28, f: '+28,57%'}],
                    ['Tantale',   {v: 88,  f: '88,000$/lb'},  {v: 72, f: '+72,55%'}, {v: 42, f: '+41,94%'}],
                    ['Titane(METAL)',   {v: 7,  f: '7,130$/kg'},  {v: 4, f: '-4,93%'}, {v: 87, f: '+87,63%'}],
                    ['Titane 99.60%',   {v: 8,  f: '8,400$/kg'},  {v: 3, f: '+3,32%'}, {v: 17, f: '+16,67%'}],
                    ['Tunsgten',   {v: 40,  f: '40,380$/kg'},  {v: 17, f: '+17,04%'}, {v: 52, f: '+52,38%'}],
                    ['Vanadium(METAL)80%',   {v: 37,  f: '37,000$/kg'},  {v: 49, f: '+49,49%'}, {v: 49, f: '+49,49%'}],
                    ['Zinc',   {v: 2998,  f: '2 998,500$/tonne'},  {v: 9, f: '+9,08%'}, {v: 27, f: '+26,79%'}],
                    ['Zinc electro',   {v: 2290,  f: '2 290,000€/tonne'},  {v: 0, f: 'NA'}, {v: 0, f: 'NA'}],

                  ]);
          
                  var table = new google.visualization.Table(document.getElementById('table_div'));
          
                  table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
                }
              </script>
            </head>
            <body>
              <div id="table_div"></div>
            </body>
          </html>
          
              
        </div>
    </div>
</div>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<style>
    body {
        color: black;
        background: linear-gradient(to bottom, rgba(226, 212, 8, 0.3) 0%, rgba(243, 201, 11, 0.7) 75%, #000 100%), url(".. /img/mining2.jpg");
    }
</style>
@endsection
