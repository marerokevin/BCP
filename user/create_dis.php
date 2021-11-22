<?php 
include 'serve_c.php';
?>

<?php
    if ($_SESSION["user_level"]!="Administrator") {
        echo '<script type="text/javascript"> alert("Error 401, Unauthorized Access, please contact your Systems Administrator.") </script>';
        echo '<script type="text/javascript"> window.location.href="./dashboard.php"; </script>';
} else {
    include 'dbconnect.php';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $disaster_desc = $_POST["disaster_desc"]; 
        $dis_control_number = $_POST["dis_control_number"];  
        $disaster_type = $_POST["disaster_type"];
        $AreaofEffect = $_POST["AreaofEffect"];
        $encoded_by = $_POST["encoded_by"];
        $disaster_date = date('Y-m-d', strtotime($_POST["disaster_date"]));
        $time_start = date('H:i:s', strtotime($_POST['timestart']));
        $time_end = date('H:i:s', strtotime($_POST['timeend']));

        $sql = "INSERT INTO `disasterinfo`(`disaster_desc`, `disaster_date`, `time_start`, `time_end`, `dis_control_number`, `disaster_type`, `AreaofEffect`, `encoded_by`, `date_log`) 
        VALUES ('$disaster_desc', '$disaster_date', '$time_start', '$time_end', '$dis_control_number', '$disaster_type', '$AreaofEffect', '$encoded_by', current_timestamp())";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo '<script type="text/javascript"> alert("Done!") </script>';
        }
        else
        {
            echo '<script type="text/javascript"> alert("Information not updated") </script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GPI-BCP Request</title>
        <link rel="stylesheet" type="text/css" href="/form-test/assets/css/create_dis.php">
    </head>
    <body>
    <!-- Top Nav -->
    <?php include 'topnav.php'; ?>
        <div class="Form">
            <form class="disaster_form" action="create_dis.php" method="post">
                <h2 class="text-center">BCP - Emergency Distress Form</h2>
                <h3 class="text-center">Disasater Details</h3>

                <!-- Disaster Description-->
                <div class="form-group"> 
                    <label for="disaster_desc">Description</label> 
                    <input type="text" class="form-control" id="disaster_desc"
                    name="disaster_desc" required>
                </div>

                <!--Control_Number-->
                <div class="form-group">
                    <label for="dis_control_number">Control Number</label> 
                    <input type="text" class="form-control" id="dis_control_number"
                    name="dis_control_number" required>
                </div>

                <!--Disaster_Date-->
                <div class="form-group"> 
                    <label for="disaster_date">Date</label> 
                    <input type="date" class="form-control" id="disaster_date"
                    name="disaster_date" required>
                </div>

                <!--Time_Start-->
                <div class="form-group"> 
                    <label for="timestart">Start</label>
                    <input type="time" class="form-control" id="timestart"
                    name="timestart" required>
                </div>

                <!--Time_End-->
                <div class="form-group"> 
                    <label for="timeend">End</label>
                    <input type="time" class="form-control" id="timeend"
                    name="timeend" required>    
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
                    <input type="submit" class="btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </body>
</html>