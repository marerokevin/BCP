<div class="topnav" id="myTopnav">
    <a class="<?php active('dashboard.php');?>" href="./dashboard.php" >Home</a>
    <a class="<?php active('create_dis.php');?>" href="./create_dis.php">Input Disaster</a>
    <a class="<?php active('create.php');?>" href="./create.php">Create</a>
    <a class="<?php active('edit.php');?>" href="./edit.php">Update</a>
    <a class="<?php active('delete_tab.php');?>" href="./delete_tab.php">Delete</a>
    <a class="<?php active('logout.php');?>" href="./logout.php">Logout</a>
    <a class="icon" onclick="Burjer()">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </a>
</div>

<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active';
  } 
}
?>