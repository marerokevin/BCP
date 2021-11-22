<!--Session-->
<?php
  include "serve_c.php";
?>

<?php
  if (isset($_POST['selectdate'])){
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      include_once("dbconnect.php");

      $from=date('Y-m-d 00:00:00',strtotime($_POST['selectdate']));
      $to=date('Y-m-d 23:59:59',strtotime($_POST['selectdate']));

      $sum_yeses = "SELECT date_encoded, user_department, SUM(bcp_yes) AS sum_yes FROM workinfo where date_encoded between '$from' AND '$to' GROUP BY user_department";
      $sum_yes = mysqli_query($conn, $sum_yeses) or die("error to fetch data");

      $sum_nos = "SELECT date_encoded, user_department, SUM(bcp_no) AS sum_no FROM workinfo where date_encoded between '$from' AND '$to' GROUP BY user_department";      
      $sum_no = mysqli_query($conn, $sum_nos) or die("error to fetch data");
        
      $sum_infos = "SELECT date_encoded, user_department, SUM(bcp_info) AS sum_info FROM workinfo where date_encoded between '$from' AND '$to' GROUP BY user_department";
      $sum_info = mysqli_query($conn, $sum_infos) or die("error to fetch data");

      if ($sum_yes->num_rows > 0) {
        $labels = $yes = '';
        while($row = $sum_yes->fetch_assoc()) {
          //get the company name separated by comma for chart labels
          $labels.= '"' .$row["user_department"]. '",';
          //get the total separated by comma for chart data
          $yes.= $row["sum_yes"].',';
        }
      }

      if ($sum_no->num_rows > 0) {
        $labels = $no = '';
        while($row = $sum_no->fetch_assoc()) {
          //get the company name separated by comma for chart labels
          $labels.= '"' .$row["user_department"]. '",';
          //get the total separated by comma for chart data
          $no.= -1 * $row["sum_no"].',';
        }
      }

      if ($sum_info->num_rows > 0) {
        $labels = $info = '';
        while($row = $sum_info->fetch_assoc()) {
          //get the company name separated by comma for chart labels
          $labels.= '"' .$row["user_department"]. '",';
          //get the total separated by comma for chart data
          $info.= $row["sum_info"].',';
        }
      }
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="/form-test/assets/css/dashboard.php">
    <link rel="shortcut icon" type="image/ico" href="/form-test/assets/images/favicon.ico"/>
    <!--JS-->
    <script type="text/javascript" href="/form-test/assets/js/utoklek.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.0/Chart.bundle.min.js"></script>
    <title>GPI-BCP Home</title>
  </head>
  <body>
<!-- Top Nav -->
<?php include 'topnav.php'; ?>
    <!-- time -->
    <div type="currenttime" id="currentTime"></div>
    <div id="a"></div>
    <div id="aligned">
    <div class="label">Work Information Summary</div>
    <!--Date Selector-->
      <div type="date">
        <form method="POST">
            <label type="date">Date: </label>
            <input type="date" name="selectdate" id="today2">
            <button type="submit" value="View" name="submit" id="submit">View</button>
        </form>
      </div>
    </div>
    <!--Bar Chart Display-->
      <div class="chart_container">
        <canvas id="myChart"></canvas>
      </div>
    <!--Table Display - Total-->
    <div class=table-total>
    <table class="total">
    <h2>Total Manpower - Summary</h2>
    <tr>
    <th class="yes">Yes</th>
    <th class="no">No</th>
    <th class="info">No Information</th>
    </tr>
    <?php
      if (isset($_POST['selectdate'])){
        if($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php'; 
    $sql = "SELECT date_encoded, user_department, SUM(bcp_yes) AS sum_yes, SUM(bcp_no) AS sum_no, SUM(bcp_info) AS sum_info FROM workinfo where date_encoded between '$from' AND '$to'";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){ ?>
    <tr>
    <td class="yes"><?php echo $row['sum_yes'];?></td>
    <td class="no"><?php echo $row['sum_no'];?></td>
    <td class="info"><?php echo $row['sum_info'];?></td>
    </tr>
    <?php }}}?>
    </div>
    <!--Table Display - Per Department-->
    <div class=table-hurdur>
    <table class="perdept">
    <h2>Total per Department</h2>
    <tr>
    <th class="depart">Department</th>
    <th class="date">Date Encoded</th>
    <th class="yes_per">Yes</th>
    <th class="no_per">No</th>
    <th class="info_per">No Information</th>
    </tr>
    <?php
    if (isset($_POST['selectdate'])){
      if($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php'; 
    $sql = "SELECT date_encoded, user_department, SUM(bcp_yes) AS sum_yes, SUM(bcp_no) AS sum_no, SUM(bcp_info) AS sum_info FROM workinfo where date_encoded between '$from' AND '$to' GROUP BY user_department";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){ ?>
    <tr>
    <td class="depart"><?php echo $row['user_department'];?></td>
    <td class="date"><?php echo $row['date_encoded'];?></td>
    <td class="yes_per"><?php echo $row['sum_yes'];?></td>
    <td class="no_per"><?php echo $row['sum_no'];?></td>
    <td class="info_per"><?php echo $row['sum_info'];?></td>
    </tr>
    <?php }}}?>
    </div>
    <!--Bar Chart Script-->
      <script>
        var config, ctx;
        config = {
          type: 'bar',
          data: {
            labels: [<?php echo trim($labels);?>],
            datasets: [{
              label: 'Yes',
              backgroundColor: "rgba(18,122,0,0.9)",
              fillColor: "rgba(18,122,0,0.5)",
              data: [<?php echo trim($yes);?>],
            }, 
            {
              label: 'No Information',
              backgroundColor: "#8c8c8c",
              data: [<?php echo trim($info);?>]
            }, 
            {
              label: 'No',
              backgroundColor: '#89051b',
              data: [<?php echo trim($no);?>]
            }]
          },
          options: {
            scales: {
              xAxes: [{
                stacked: true
              }],
              yAxes: [{
                stacked: true
              }]
            }
          }
        };

        ctx = document.getElementById("myChart").getContext("2d");
        new Chart(ctx, config);
      </script>
    <!--Burger Script-->   
      <script>
        function Burjer() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
      </script>

    <!--Clock Script-->   
      <script>
        window.onload = function() {
          clock();
            function clock() {
              var now = new Date();
              var one_day = now.getHours();
              var hour = now.getHours();
              var min = now.getMinutes();
              var sec = now.getSeconds();
              var mid = 'PM';
              if (sec < 10) {
                sec = "0" + sec;
              }
              if (min < 10) {
                min = "0" + min;
              }
              if (hour > 12) {
                hour = hour - 12;
              }    
              if(hour==0){
                hour=12;
              }
              if(one_day < 12) {
                mid = 'am';
              }     
            document.getElementById('currentTime').innerHTML = hour+':'+min+':'+sec +' '+mid ; setTimeout(clock, 1000);
          }
        }
      </script>
    <!--Automatic Date Script-->
      <script>
        let today = new Date().toISOString().substr(0, 10);
        document.querySelector("#today2").valueAsDate = new Date();
      </script>
  </body>
</html>