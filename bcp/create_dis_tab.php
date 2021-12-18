<!--Session-->
<?php 
include 'serve_c.php';
?>

<?php
    if ($_SESSION["user_level"]!="Administrator") {
        echo '<script type="text/javascript"> alert("Error 401, Unauthorized Access, please contact your Systems Administrator.") </script>';
        echo '<script type="text/javascript"> window.location.href="./dashboard.php"; </script>';
} else {

?>
    <html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPI-BCP Form</title>
    <link rel="stylesheet" type="text/css" href="/bcp-system/assets/css/create_dis_tab.php">
    </head>
    <body>
<!-- Top Nav -->
<?php include 'topnav.php'; ?>
    <!--next-->
    <table class="table table-hover">
    <a type=button href="./create_dis.php" id="button">Create</a>
        <caption>Disaster Information Management</caption>
        <thead>
            <tr>
                <th scope="col" name="user_fname">Disaster Description</th>
                <th>Control Number</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Created by</th>
            </tr>
        </thead>
        <!--loop-->
        <?php
        include 'dbconnect.php'; 
        $sql = "SELECT * FROM `disasterinfo`";
        $result = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){
        $Edate = $row['Edate'];
        $Etime = $row['Etime'];
        $Sdate = $row['Sdate'];
        $Stime = $row['Stime'];
        $Edatetime = $Edate.' '.$Etime;
        $Sdatetime = $Sdate.' '.$Stime;
        $Sdate_display = date('M d Y h:ia', strtotime($Sdatetime));
        $Edate_display = date('M d Y h:ia', strtotime($Edatetime)); ?>
        <tbody>
            <tr>
                <td data-label="Disaster Description"><?php echo $row['disaster_desc'];?></td>
                <td data-label="Control Number"><?php echo $row['dis_control_number'];?></td>
                <td data-label="Start"><?php echo $Sdate_display; ?></td>
                <td data-label="End"><?php echo $Edate_display; ?></td>
                <td data-label="Created by"><?php echo $row['encoded_by'];?></td>
                <td><a type=button href="diasaster_update_func.php?id=<?php echo $row['id'];?>" id="button">Edit</a></td>
                <td><a type=button href="disaster_delete_func.php?id=<?php echo $row['id'];?>" id="button">Delete</a></td>
            </tr>
        </tbody>
        <?php }}?>
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
    