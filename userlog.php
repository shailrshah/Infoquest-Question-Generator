<html>
<head>
	<script type="text/javascript" src="assets/js/chart.js"></script>  

   
	<script>
	
		google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Correct',     10],
          ['Incorrect',      5],
         
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
		  google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Correct',     10],
          ['Incorrect',      5],
         
        ]);

        var options = {
          title: 'OverAll Performance'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      
      }
	</script>
</head>
<body>
	<h1>Your Performance</h1>
  <div ><h2>Articles Attempted</h2>
    <img src="assets/img/Articles.jpg"></img>
  </div>

	<div id="piechart" style="width: 900px; height: 500px;"></div>
  <div >
    <img src = "assets/img/correct.jpeg" />
  </div>
  <div >
    <img src = "assets/img/correctday.jpg" />
  </div>
	<div>
    <h1>Your Percentile</h1>
      <span style="font-size: 24">You are ahead of </span> <span style="font-size: 30px; color: red"> 65% </span> <span style="font-size: 24">of the people.</span>
  </div>
</body>
</html>