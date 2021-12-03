<!--Session-->
<?php include 'serve_c.php'?>

<?php 
include 'dbconnect.php';
    $id = $_GET["id"];
    $sql = "SELECT * FROM `disasterinfo` WHERE id='$id'";
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
    <div style="padding-left:16px; padding-right:16px;">
    <div class="Form">
            <form class="disaster_form" action="create_dis.php" method="post">
                <h2 class="text-center">BCP - Emergency Distress Form</h2>
                <h3 class="text-center">Disasater Details</h3>

                <!-- Disaster Description-->
                <div class="form-group">
                    <label for="disaster_desc">Description</label> 
                    <input type="text" class="form-control" id="disaster_desc"
                    name="disaster_desc" required value="<?php echo $disater_desc ?>">
                </div>

                <!--Control_Number-->
                <div class="form-group">
                    <label for="dis_control_number">Control Number</label> 
                    <input type="text" class="form-control" id="dis_control_number"
                    name="dis_control_number" required value="<?php echo $disater_desc ?>">
                </div>
                <!--Time_Start-->        
                <label for="start-grid">Start</label>
                <div class="start-grid" id="start-grid">
        
                    <div class="form-group">    
                        <label for="Sdate">Date</label>
                        <input type="date" class="start-date" id="Sdate" name="Sdate" required>
                    </div>

                    <div class="form-group">    
                        <label for="Etime">Time</label>
                        <input type="time" class="start-time" id="Etime" name="Stime" required>
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

                <!--Encoded by-->
                <div class="form-group"> 
                    <label for="encoded_by">Encoded by</label>
                    <input type="text" class="form-control" id="encoded_by"
                    name="encoded_by" value="<?php echo ($_SESSION["username"]); ?>" readonly required>    
                </div>

                <small id="emailHelp" class="form-text text-muted">Make sure to answer all the fields properly</small>      
                <div class="submit">
                    <input type="submit" class="btn-primary" value="Submit" id="button">
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
    $bcp_yes = $_POST['bcp_yes'];
    $bcp_no = $_POST['bcp_no'];
    $bcp_info = $_POST['bcp_info'];
    if ($bcp_yes== '' OR $bcp_no == '' OR $bcp_info == '') { ?>
      <script>alert('All fields are required');</script>
      <?php
    }
    else
    {
      $sql = "UPDATE `workinfo` SET bcp_yes='$bcp_yes', bcp_no='$bcp_no', bcp_info='$bcp_info' WHERE id='$data_id'";
      mysqli_query($conn,$sql);
      ?>
      <script>alert('Information updated successfully');</script>
      <?php
    }
  }
?>