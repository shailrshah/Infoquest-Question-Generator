<?php
    $x = 90;
    $total = 200;
    
    require('login_script.php');

	require('connectivity_script.php');
	$query="select * from user where User_Id = '$_SESSION[login_id]'";
	$queryresult = mysqli_query($con,$query)  or die('Could not connect: ' . mysql_error()) ;
	$row = mysqli_fetch_array($queryresult,MYSQLI_ASSOC);
	$x=$row['Right_Attempted'];
	$total=$row['Total_Attempted']; 
	$crr=$x/$total;
	
	$query="select * from user";
	$queryresult = mysqli_query($con,$query)  or die('Could not connect: ' . mysql_error()) ;
	$position=1;
	
	$totalpeople=0;
	while($row = mysqli_fetch_array($queryresult,MYSQLI_ASSOC))
	{
		$right=$row['Right_Attempted'];
		$tot=$row['Total_Attempted'];
		$temp=$right/$tot;
		if($temp>$crr)
			$position=$position+1;
		$totalpeople=$totalpeople+1;
		
		
	}
	
	$percentile=(($totalpeople-$position)/$totalpeople)*100;
	
	echo "YOU ARE AHEAD OF ".$percentile."% MEMBERS";
	
?>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Correctness', 'Number of right'],
                ['Right',     <?php echo "$x"?>],
                ['Wrong',  <?php echo "$total-$x"?>]
            ]);

            var options = {
                title: 'Overall Correctness',
                is3D: true
            };

            new google.visualization.PieChart(document.getElementById('piechart')).draw(data, options);
            ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;


			
			
			
            var data = new google.visualization.DataTable();
            data.addColumn('date', 'Time of Day');
            data.addColumn('number', 'Articles Attempted');

            data.addRows([
                [new Date(Date.now() + -6*24*3600*1000), 5],[new Date(Date.now() + -5*24*3600*1000), 5],  [new Date(Date.now() + -4*24*3600*1000), 7],  [new Date(Date.now() + -3*24*3600*1000), 3],
                [new Date(Date.now() + -2*24*3600*1000), 1],  [new Date(Date.now() + -1*24*3600*1000), 3],  [new Date(Date.now() + -0*24*3600*1000), 4]
            ]);



            var options = {
                title: 'Number of Articles attempted last week',
                hAxis: {
                    format: ' ',
                    gridlines: {color: 'none'}
                },
                vAxis: {
                    gridlines: {color: 'none'},
                    minValue: 0
                }
            };
            new google.visualization.LineChart(document.getElementById('line_chart')).draw(data, options);
            ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

            var data = new google.visualization.DataTable();
            data.addColumn('date', 'Day');
            data.addColumn('number', 'Correct');
            data.addColumn('number', 'Incorrect');

            data.addRows([
                [new Date(Date.now() + -6*24*3600*1000), 10, 5],
                [new Date(Date.now() + -5*24*3600*1000), 7, 3],
                [new Date(Date.now() + -4*24*3600*1000), 5, 2],
                [new Date(Date.now() + -3*24*3600*1000), 4, 6],
                [new Date(Date.now() + -2*24*3600*1000), 1, 4],
                [new Date(Date.now() + -1*24*3600*1000), 6, 1],
                [new Date(Date.now() + -0*24*3600*1000), 7, 0]
            ]);

            var options = {
                title: 'Number of questions answered correctly and incorrectly',
                isStacked: true,
                hAxis: {
                    title: 'Time of Day',
                    format: 'dd/MM/yy',

                },
                vAxis: {
                    title: 'Correctness'
                }
            };

            new google.visualization.ColumnChart(document.getElementById('col_chart')).draw(data, options);

        }
    </script>
</head>
<body>
<div id="piechart" style="width: 900px; height: 500px;"></div>
<div id="line_chart" style="width: 900px; height: 500px;"></div>
<div id="col_chart" style="width: 900px; height: 500px;"></div>
</body>
</html>

