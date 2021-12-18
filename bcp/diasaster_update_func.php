<!--Session-->
<?php include 'serve_c.php'?>

<?php 
include 'dbconnect.php'; 
  $data_id = $_GET["id"];
  $sql = "SELECT disaster_desc, Sdate, Edate, Stime, Etime, disaster_type, AreaofEffect FROM `disasterinfo` WHERE id='$data_id'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link rel="stylesheet" type="text/css" href="/bcp-system/assets/css/disaster_update_func.php">
  </head>
  <body>
<!-- Top Nav -->
<?php include 'topnav.php'; ?>
<div style="padding-left:1%; padding-right:2%;">
      <div class="Form">
        <form method="post">
          <h2 class="text-center">BCP - Emergency Distress Form</h2>
          <h3 class="text-center">Update Disasater Details</h3>
          <div class="flex-container">
            <!-- Disaster Description-->
            <div class="form-group">
              <label for="disaster_desc">Description</label>
              <input type="text" class="form-control" id="disaster_desc" name="disaster_desc" required>
            </div>
            <!--Time_Start-->        
            <label for="start-grid">Start</label>
              <div class="start-grid" id="start-grid">
      
                  <div class="form-group">
                      <label for="Sdate">Date</label>
                      <input type="date" class="start-date" id="Sdate" name="Sdate" required>
                  </div>

                  <div class="form-group">
                      <label for="Stime">Time</label>
                      <input type="time" class="start-time" id="Stime" name="Stime" required>
                  </div>
              </div>

            <!--Time_End-->
            <label for="timestart">End</label>
            <div class="end-grid">
                <div class="form-group">
                    <label for="Edate">Date</label>
                    <input type="date" class="end-date" id="Edate" name="Edate" required>
                </div>

                <div class="form-group">
                    <label for="Etime">Time</label>
                    <input type="time" class="start-time" id="Etime" name="Etime" required>
                </div>
            </div>
            <!--Disaster Type-->
            <div class="form-group">
                <label for="disaster_type">Disaster Type</label> 
                <input type="text" class="form-control" id="disaster_type"
                name="disaster_type" required>
            </div>
                
            <!--Affected Areas-->
            <div class="form-group">
                <label for="AreaofEffect">Affected Area</label> 
                <input type="text" class="form-control" id="AreaofEffect"
                name="AreaofEffect" required>    
            </div>
          </div>
          <small id="emailHelp" class="form-text text-muted">Make sure to answer all the fields properly</small>      
          <div class="submit">
            <input type="submit" name="update" value="Update" class="btn-primary">
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
  </body>
</html>

<?php
  if (isset($_POST['update'])) {
    $disaster_desc = $_POST['disaster_desc'];
    $Sdate = $_POST['Sdate'];
    $Stime = $_POST['Stime'];
    $Edate = $_POST['Edate'];
    $Etime = $_POST['Etime'];
    $disaster_type = $_POST['disaster_type'];
    $AreaofEffect = $_POST['AreaofEffect'];
    if ($Sdate== '' OR $Stime == '' OR $Edate == '' OR $Etime == '' OR $disaster_desc == '') { ?>
      <script>alert('All fields are required');</script>
      <?php
    }
    else
    {
      $sql = "UPDATE `disasterinfo` SET Sdate='$Sdate', Stime='$Stime', Edate='$Edate', Etime='$Etime', disaster_desc='$disaster_desc', disaster_type='$disaster_type', AreaofEffect='$AreaofEffect' WHERE id='$data_id'";
      mysqli_query($conn,$sql);
      ?>
      <script>alert('Information updated successfully');</script>
      <?php
    }
  }
?>