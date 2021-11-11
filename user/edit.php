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
    <link rel="stylesheet" type="text/css" href="/form-test/assets/css/edit.php">
    </head>
    <body>
<!-- Top Nav -->
 <div class="topnav" id="myTopnav">
    <a href="./dashboard.php">Home</a>
    <a href="./create_dis.php">Input Disaster</a>
    <a href="./form.php">Create</a>
    <a href="./edit.php" class="active">Update</a>
    <a href="./delete_tab.php">Delete</a>
    <a href="./logout.php">Logout</a>
    <a class="icon" onclick="Burjer()">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </a>
  </div>
    <!--next-->
    <table class="table table-hover">
    <tr>
    <th name="user_fname">Name</th>
    <th>Date Encoded</th>
    <th>Department</th>
    <th>Control Number</th>
    <th>Yes</th>
    <th>No</th>
    <th>No Information</th>
    <th class="button">               </th>
    </tr>
    <!--loop-->
    <?php
    include 'dbconnect.php'; 
    $user_eid = $_SESSION["username"];
    $sql = "SELECT * FROM `workinfo` WHERE user_eid='$user_eid'";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){ ?>
    <tr>
    <td name="user_fname"><?php echo $row['user_fname'];?></td>
    <td><?php echo $row['date_encoded'];?></td>
    <td><?php echo $row['user_department'];?></td>
    <td><?php echo $row['control_number'];?></td>
    <td><?php echo $row['bcp_yes'];?></td>
    <td><?php echo $row['bcp_no'];?></td>
    <td><?php echo $row['bcp_info'];?></td>
    <td><a type=button href="update.php?id=<?php echo $row['id'];?>" id="button">Edit</a></td>
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
    