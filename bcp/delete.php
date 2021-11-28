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
<!--Automatic Date Script-->
<script>
    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("date_encoded").valueAsDate = new Date();
</script>