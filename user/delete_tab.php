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
    <link rel="stylesheet" type="text/css" href="/form-test/assets/css/delete.php">
    </head>
    <body>
<!-- Top Nav -->
<?php include 'topnav.php'; ?>
    <!--next-->
    <table class="table table-hover">
        <caption>Delete</caption>
        <thead>
            <tr>
                <th scope="col" name="user_fname">Name</th>
                <th>Date Encoded</th>
                <th scope="col">Department</th>
                <th scope="col">Control Number</th>
                <th scope="col">Yes</th>
                <th scope="col">No</th>
                <th scope="col">No Information</th>
                <th scope="col" class="button"></th>
            </tr>
        </thead>
    <!--loop-->
    <?php
    include 'dbconnect.php'; 
    $user_eid = $_SESSION["username"];
    $sql = "SELECT * FROM `workinfo` WHERE user_eid='$user_eid'";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){ ?>
    <tbody>
            <tr>
                <td data-label="Name"><?php echo $row['user_fname'];?></td>
                <td data-label="Date Encoded"><?php echo $row['date_encoded'];?></td>
                <td data-label="Department"><?php echo $row['user_department'];?></td>
                <td data-label="Control Number"><?php echo $row['control_number'];?></td>
                <td data-label="Yes"><?php echo $row['bcp_yes'];?></td>
                <td data-label="No"><?php echo $row['bcp_no'];?></td>
                <td data-label="No Information"><?php echo $row['bcp_info'];?></td>
                <td><a type=button href="delete.php?id=<?php echo $row['id'];?>" id="button">Delete</a></td>
            </tr>
        </tbody>
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
    