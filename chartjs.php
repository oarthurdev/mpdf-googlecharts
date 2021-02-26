
<html>
<head>
<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
<script src='https://code.jquery.com/jquery-1.12.4.js'></script>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<script>
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

  var data = google.visualization.arrayToDataTable([
         ['Year', 'Valor ISS', { role: 'style' }, { role: 'annotation' } ],
         ['2017', 432987, '#3367D6', 'R$ 432.987,00' ],
         ['2018', 53213, '#3367D6', 'R$ 53.213,00' ],
         ['2019', 128549, '#3367D6', 'R$ 128.549,00' ],
         ['2020', 230000, '#3367D6', 'R$ 230.000,00' ]
      ]);
  
      var options = {
        title: 'Total ISS Rio do Sul',
        hAxis: {
          title: 'Ano',
        },
        vAxis: {
          title: 'Valor ISS'
        },
        width: 1000,
        bar: {groupWidth: "95%"},
        legend: { position: "none" }
      };
    

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_div'));
        chart.draw(data, options);

     $(chart).ready(function(){
        chart_div.innerHTML = '<img style="display:none" src="' + chart.getImageURI() + '" class="img-responsive">';
        console.log(chart_div.innerHTML);
     })
    }
</script>