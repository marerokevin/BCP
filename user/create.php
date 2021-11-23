<!--Session-->
<?php
include "serve_c.php"
?>
    <html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPI-BCP Form</title>
    <link rel="stylesheet" type="text/css" href="/form-test/assets/css/create.php">
    </head>
    <body>
<!-- Top Nav -->
<?php include 'topnav.php'; ?>
    <!--next-->
    <table class="table table-hover">
    <tr>
    <th>Control Number </th>
    <th>Disaster Description</th>
    <th>Disaster Type</th>
    <th>Start Time</th>
    <th>End Time</th>
    <th>Status</th>
    <th class="button">               </th>
    </tr>
    <!--loop-->
    <?php
    date_default_timezone_set('Asia/Manila');
    $curdate = strtotime(date('M d Y'));
    $curhour = date('H');
    $curminute = date('i');
    include 'dbconnect.php'; 
    $sql = "SELECT * FROM `disasterinfo`";
    $result = mysqli_query($conn,$sql);
    $control_num_q = mysqli_num_rows($result);
    while($row=mysqli_fetch_array($result)){ 
      $Edate_str = strtotime($row['Edate']);
      $Ehour = $row['Ehour'];
      $Emeridiem = $row['Emeridiem'];
      if ($Emeridiem="PM") {
        $Ehour_24 = $Ehour + 12;
      } else {
        $Ehour_24 = $Ehour;
      }
      $Eminute = $row['Eminute'];
    if ($curdate < $Edate_str) {
      $stat_start = '<a type=button href="create_form.php?id="';
      $status_end = '" id="button">Edit</a>';
      $status = 'Ongoing';
    } elseif (($curdate = $Edate_str) && ($curhour <= $Ehour)) {
          $stat_start = '<a type=button href="create_form.php?id="';
          $status_end = '" id="button">Edit</a>';
          $status = 'Ongoing';
        } else {
          $stat_start = '<a type=button href="create_form.php?id="';
          $status_end = '" id="button" hidden></a>';
          $status = 'Ended';
        }
      ?>
    <tr>
    <td><?php echo $row['dis_control_number'];?> <?php echo $curdate; ?> </td>
    <td><?php echo $row['disaster_type'];?><?php echo $curhour;?> <?php echo $Edate_str;?> <?php echo $Ehour_24;?></td>
    <td><?php echo $row['disaster_desc'];?> <?php echo $curminute;?></td>
    <td><?php echo $row['Sdate'];?> <?php echo $row['Shour'];?>:<?php echo $row['Sminute'];?> <?php echo $row['Smeridiem'];?></td>
    <td><?php echo $row['Edate'];?> <?php echo $row['Ehour'];?>:<?php echo $row['Eminute'];?> <?php echo $row['Emeridiem'];?></td>
    <td><?php echo $status;?></td>
    <td><?php echo $stat_start;?><?php echo $row['dis_control_number'];?><?php echo $status_end;?></td>
    </tr>
    <?php }?>
    </table>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--Automatic Date Script-->
    <script>
        let today = new Date().toISOString().substr(0, 10);
        document.querySelector("#today2").valueAsDate = new Date();
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
    </body>
    </html>
    