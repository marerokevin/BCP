<?php
if (isset($_POST['selectdate'])){
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once("dbconnect.php");

        $from=date('Y-m-d 00:00:00',strtotime($_POST['selectdate']));
        $to=date('Y-m-d 23:59:59',strtotime($_POST['selectdate']));

        $sum_yeses = "SELECT date, SUM(bcp_yes) AS sum_yes FROM workinfo where date between '$from' AND '$to'";

        $sum_yes = mysqli_query($conn, $sum_yeses) or die("error to fetch data");
            if ($sum_yes->num_rows > 0) {

                $yes = '';
            while($row = $sum_yes->fetch_assoc()) {

                //get the total separated by comma for chart data
                $yes.= $row["sum_yes"].',';


        $sum_nos = "SELECT date, SUM(bcp_no) AS sum_no FROM workinfo where date between '$from' AND '$to'";
        
        $sum_no = mysqli_query($conn, $sum_nos) or die("error to fetch data");
            if ($sum_no->num_rows > 0) {

                $no = '';
            while($row = $sum_no->fetch_assoc()) {

                //get the total separated by comma for chart data
                $no.= -1 * $row["sum_no"].',';
                
        $sum_infos = "SELECT date, SUM(bcp_info) AS sum_info FROM workinfo where date between '$from' AND '$to'";
        $sum_info = mysqli_query($conn, $sum_infos) or die("error to fetch data");

            if ($sum_info->num_rows > 0) {
                
                $info = '';
            while($row = $sum_info->fetch_assoc()) {

                //get the total separated by comma for chart data
                $info.= $row["sum_info"].',';

            }
        }

            }
        }
    }
        }
    }
}
?>