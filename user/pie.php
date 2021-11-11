<!--Session-->
<?php
include "serve_c.php"
?>
<!--Chart calling magic-->
<?php
include "chartdb_que_perans.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/form-test/assets/css/dashboard.php">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2 class="text-center">PIE chart using Chartjs,jQuery and Bootstrap</h2>
    <canvas id="barChart" width="400" height="400"></canvas>
</div>
<?php
include "date_select.php"
?>

<script>	
jQuery(document).ready(function() {
var chartDiv = $("#barChart");
var myChart = new Chart(chartDiv, {
    type: 'pie',
    data: {
        labels: [],
        datasets: [{ 
            type: 'pie',
            label: 'yes',
            data: [<?php echo trim($yes);?>],
            backgroundColor: ["#FF6384"]
        },{ type: 'pie',
            label: 'No',
            data: [<?php echo trim($no);?>],
            backgroundColor: ["#4BC0C0"]
        },{ type: 'pie',
            label: 'No Information',
            data: [<?php echo trim($info);?>],
            backgroundColor: ["#FFCE56"]
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Pie Chart'
        },
		responsive: true,
maintainAspectRatio: false,
    }
});
    });
</script>

</body>
</html>