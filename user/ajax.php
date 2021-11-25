
<?php
include "dbconnect.php";
if (isset($_POST['search'])) {
   $Name = $_POST['search'];
   $Query = "SELECT * FROM disasterinfo WHERE dis_control_number LIKE '%$Name%'";

   $ExecQuery = MySQLi_query($conn, $Query);

   echo '


   ';

   date_default_timezone_set('Asia/Manila');
   $curdatetime = date('M d Y H:i');
   $curdatetime_str = strtotime($curdatetime);
   $curtime = date('H:i');
   $curtime_st = strtotime(date('H:i'));

   while ($Result = MySQLi_fetch_array($ExecQuery)) {
    $Edate = $Result['Edate'];
    $Etime = $Result['Etime'];
    $Sdate = $Result['Sdate'];
    $Stime = $Result['Stime'];
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
        $stat_start = '<a type=button-done href="create_form.php?id="';
        $status_end = '">Done</a>';
    }
       ?>
       <table>
<tr>
    <td data-label="Control Number"><?php echo $Result['dis_control_number'];?></td>
    <td data-label="Disaster Type"><?php echo $Result['disaster_type'];?></td>
    <td data-label="Disaster Description"><?php echo $Result['disaster_desc'];?></td>
    <td data-label="Start"><?php echo $Sdate_display; ?></td>
    <td data-label="End"><?php echo $Edate_display; ?></td>
    <td data-label="Status"><?php echo $stat_start;?><?php echo $Result['dis_control_number'];?><?php echo $status_end;?></td>
    </tr>
    </table>

   <?php

}}


?>
