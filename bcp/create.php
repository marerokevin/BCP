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
    <link rel="stylesheet" type="text/css" href="/bcp-system/assets/css/create.php">
    </head>
    <body>
<!-- Top Nav -->
<?php include 'topnav.php'; ?>

    <!--next-->
    <table class="table table-hover">
    <caption>Create</caption>
    <?php include 'search.php'; ?>
        <thead>
            <tr>
                <th>Control Number </th>
                <th>Disaster Description</th>
                <th>Disaster Type</th>
                <th>Start</th>
                <th>End</th>
                <th>Status</th>
            </tr>
        </thead>
    <!--loop-->
    <?php
    date_default_timezone_set('Asia/Manila');
    $curdatetime = date('M d Y H:i');
    $curdatetime_str = strtotime($curdatetime);
    $curtime = date('H:i');
    $curtime_st = strtotime(date('H:i'));
    include 'dbconnect.php'; 
    $sql = "SELECT * FROM `disasterinfo` order by id desc limit 6";
    $result = mysqli_query($conn, $sql);
    while ($row=mysqli_fetch_array($result)) {
        $Edate = $row['Edate'];
        $Etime = $row['Etime'];
        $Sdate = $row['Sdate'];
        $Stime = $row['Stime'];
        $Edatetime = $Edate.' '.$Etime;
        $Sdatetime = $Sdate.' '.$Stime;
        $Sdate_display = date('M d Y h:ia', strtotime($Sdatetime));
        $Edate_display = date('M d Y h:ia', strtotime($Edatetime));
        $Edatetime_str = strtotime($Edatetime);
        $Sdatetime_str = strtotime($Sdatetime);

        if (($curdatetime_str > $Sdatetime_str) && ($curdatetime_str < $Edatetime_str)) {
            $stat_start = '<a type=button-ongoing href="create_form.php?id=';
            $status_end = '">Ongoing</a>';
        } 
        elseif (($curdatetime_str < $Sdatetime_str) and ($curdatetime_str < $Edatetime_str)) {
            $stat_start = '<a type=button-pending href="create_form.php?id="';
            $status_end = '">Pending</a>';
        } 
        else {
            $stat_start = '<a type=button-done href="done.php"';
            $status_end = '">Done</a>';
        }
    ?>
    <tr>
    <td data-label="Control Number"><?php echo $row['dis_control_number'];?></td>
    <td data-label="Disaster Type"><?php echo $row['disaster_type'];?></td>
    <td data-label="Disaster Description"><?php echo $row['disaster_desc'];?></td>
    <td data-label="Start"><?php echo $Sdate_display; ?></td>
    <td data-label="End"><?php echo $Edate_display; ?></td>
    <td data-label="Status"><?php echo $stat_start;?><?php echo $row['dis_control_number'];?><?php echo $status_end;?></td>
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
    