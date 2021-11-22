<!--Session-->
<?php
include "serve_c.php"
?>

<!-- Control Number Selector -->

<?php
include "dbconnect.php";
$control_all = "SELECT dis_control_number, id FROM disasterinfo GROUP BY dis_control_number";
$control_query = mysqli_query($conn, $control_all) or die("error to fetch data");

if ($control_query->num_rows > 0) {
    $control_select = $control = '';
    while($row = $control_query->fetch_assoc()) {
        $control_select.= '<option value="'.$row["dis_control_number"].'">'.$row["dis_control_number"].'</option>';
    }
}
?>

<!-- Form Input Magic -->
<?php
include 'dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_fname = $_POST["user_fname"];
  $user_eid = $_POST["user_eid"]; 
  $user_department = $_POST["user_department"];  
  $user_section = $_POST["user_section"];
  $bcp_yes = $_POST["bcp_yes"];
  $bcp_no = $_POST["bcp_no"];
  $bcp_info = $_POST["bcp_info"];
  $date_log = date('Y/m/d HH:ii:s');
  $date_checker = date('Y/m/d');
  $control_number = $_POST["control_number"];
  $currentaym = strtotime(date('H:i:s'));

  $date = "SELECT * from workinfo WHERE user_eid='$user_eid' and date_log='$date_checker' and control_number!='$control_number'";

  $date_query = mysqli_query($conn, $date);

  $date_count = mysqli_num_rows($date_query);

  $control_input = "SELECT * from workinfo WHERE user_eid='$user_eid' and control_number='$control_number'";
  
  $control_query = mysqli_query($conn, $control_input);

  $control_count = mysqli_num_rows($control_query);

  if($date_count=='0')
    {
      if($control_count=='0')
      {
        $sql = "SELECT * FROM workinfo WHERE user_eid='$user_eid'";

        $result = mysqli_query($conn, $sql);

        $sql = "INSERT INTO `workinfo`(`user_fname`, `user_eid`, `date_encoded`,
        `user_department`, `user_section`, `bcp_yes`, `bcp_no`, `bcp_info`, `control_number`)
        VALUES ('$user_fname', '$user_eid', current_timestamp(),
        '$user_department', '$user_section', '$bcp_yes','$bcp_no','$bcp_info', '$control_number')";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
          echo '<script type="text/javascript"> alert("Success") </script>';
        }
        else
        {
          echo '<script type="text/javascript"> alert("Information not updated") </script>';
        }
      }
      else
      {
      echo '<script type="text/javascript"> alert("You selected an invalid control number.") </script>';
      }
    }
    else
    {
      echo '<script type="text/javascript"> alert("You have already encoded today.") </script>';
    }
}
?>

<!doctype html>
<html lang="en">
<title>GPI-BCP Form</title>
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--CSS-->
      <link rel="stylesheet" type="text/css" href="/form-test/assets/css/form.php">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
<body>
<!-- Top Nav -->
  <?php include 'topnav.php'; ?>
    <!-- time -->
    <div type="currenttime" id="currentTime"></div>
  <div style="padding-left:16px; padding-right:16px;">
    <div class="Form">
      <form action="form.php" method="post">
        <h2 class="text-center">Work Information - Form</h2>
        <h3 class="text-center">Employee Details</h3>

          <!--Control_number-->
          <div class="form-group"> 
            <label for="control_number">Control Number</label> 
            <select type="text" class="form-control" id="control_number"
            name="control_number" aria-describedby="emailHelp">
            <?php echo $control_select;?>
          </div>

          <!--Employee ID-->
          <div class="form-group"> 
            <label for="user_eid">Employee ID</label> 
            <input type="text" class="form-control" id="user_eid"
            name="user_eid" aria-describedby="emailHelp" value="<?php echo ($_SESSION["username"]); ?>" readonly>
          </div>
          
          <!--Full_name-->
          <div class="form-group"> 
              <label for="user_fname">Name</label> 
              <input type="text" class="form-control" id="user_fname"
              name="user_fname" aria-describedby="emailHelp" value="<?php echo ($_SESSION["user_fname"]); ?>" readonly>
          </div>

          <!--Department-->
          <div class="form-group"> 
              <label for="user_department">Department</label> 
              <input type="text" class="form-control" id="user_department"
              name="user_department" aria-describedby="emailHelp" value="<?php echo ($_SESSION["user_level"]); ?>" readonly>
          </div>
          
          <!--Section-->
          <div class="form-group"> 
            <label for="user_section">Section</label>
            <input type="text" class="form-control" id="user_section" name="user_section" aria-describedby="emailHelp" value="<?php echo ($_SESSION["user_section"]);?>" readonly>
          </div>

          <div class="flex-container">
            <!--Yes-->
            <div class="flex-item-left">
              <label for="bcp_yes">Yes</label>
              <input accesskey="q" type="number" class="form-control" id="bcp_yes"
              name="bcp_yes" aria-describedby="emailHelp">    
            </div>

            <!--No Info-->
            <div class="flex-item-center">
              <label for="bcp_info">No Information</label> 
              <input accesskey="w" type="number" class="form-control" id="bcp_info"
              name="bcp_info" aria-describedby="emailHelp">    
            </div>

            <!--No-->
            <div class="flex-item-right">
              <label for="bcp_no">No</label>
              <input accesskey="e" type="number" class="form-control" id="bcp_no"
              name="bcp_no" aria-describedby="emailHelp">    
            </div>
          </div>

          <small id="emailHelp" class="form-text text-muted">Make sure to answer all the fields properly</small>      
          <div class="submit">
            <input type="submit" class="btn-primary" value="Submit">
          </div>
      </form>
    </div>
  </div>  
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
  <!--Automatic Date Script-->
  <script>
    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("#today2").valueAsDate = new Date();
  </script>
</body>
</html>
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