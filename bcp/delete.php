<!--Session-->
<?php
include "serve_c.php"
?>
<?php include('dbconnect.php')?>
    <?php
    $id = $_GET["id"];
    $sql = "DELETE FROM `workinfo` WHERE id='$id'";
    mysqli_query($conn,$sql);
    header("Location: {$_SERVER['HTTP_REFERER']}");
    ?>