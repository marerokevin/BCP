<!--Session-->
<?php include 'serve_c.php'?>

<?php 
include 'dbconnect.php'; 
  $data_id = $_GET["id"];
  $sql = "SELECT bcp_yes, bcp_no, bcp_info FROM `workinfo` WHERE id='$data_id'";
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
    <link rel="stylesheet" type="text/css" href="/bcp-system/assets/css/update.php">
  </head>
  <body>
<!-- Top Nav -->
<?php include 'topnav.php'; ?>
    <div style="padding-left:16px; padding-right:16px;">
      <div class="Form">
        <form method="post">
          <h2 class="text-center">Work Information - Edit</h2>
          <h3 class="text-center">Employee Details</h3>
          <div class="flex-container">
            <!--Yes-->
            <div class="flex-item-left">
              <label for="bcp_yes">Yes</label>
              <input type="number" class="form-control" id="bcp_yes"
              name="bcp_yes" aria-describedby="emailHelp">    
            </div>

            <!--No Info-->
            <div class="flex-item-center">
              <label for="bcp_info">No Information</label> 
              <input type="number" class="form-control" id="bcp_info"
              name="bcp_info" aria-describedby="emailHelp">    
            </div>

            <!--No-->
            <div class="flex-item-right">
              <label for="bcp_no">No</label>
              <input type="number" class="form-control" id="bcp_no"
              name="bcp_no" aria-describedby="emailHelp">    
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