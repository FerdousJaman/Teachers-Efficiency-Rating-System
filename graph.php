<?php
  $con = mysqli_connect("localhost","root","","teer-form");
  if(!$con){
    echo "Not Connected";
  }
?>
<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Course_code', 'avg'],
            <?php
         $sql = "SELECT * FROM rating";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['Course_code']."',".$result['avg']."],";
          }

         ?>
        ]);

        var options = {
            title: 'Teacher Efficiency Ratings'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
    </script>
</head>

<body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>

</html>