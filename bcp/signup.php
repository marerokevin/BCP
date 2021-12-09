<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    include 'dbconnect.php';   
    
    $user_uid = $_POST["user_uid"];
    $user_fname = $_POST["user_fname"];
    $user_email = $_POST["user_email"];
    $user_section = $_POST["user_section"];
    $user_department = $_POST["user_department"];
    $user_pwd = $_POST["user_pwd"]; 
    $user_cpwd = $_POST["user_cpwd"];
    $user_level = $_POST["user_level"];
            
    
    $sql = "Select * from users where user_uid='$user_uid'";
    
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result); 

    if($num == 0) {
        if(($user_pwd == $user_cpwd) && $exists==false) {
    
            $hash = password_hash($user_pwd,
                                PASSWORD_DEFAULT);
                

            $sql = "INSERT INTO `users` ( `user_uid`, 
                `user_fname`, `user_email`, `user_section`, `user_department`,
                 `user_pwd`, `user_level`, `date`) VALUES ('$user_uid',
                '$user_fname', '$user_email', '$user_section', '$user_department',
                 '$hash', '$user_level', current_timestamp())";
    
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $showAlert = true; 
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }
    
   if($num>0) 
   {
      $exists="Username already taken"; 
   } 
    
}
    
?>

    
<!doctype html>
<html lang="en">
<title>BCP - Sign Up</title>
<head>
<!--optional css-->
<link rel="stylesheet" type="text/css" href="/BCP/assets/css/signup.php">
</head>


<meta charset="utf-8"> 
<meta name="viewport" content=
    "width=device-width, initial-scale=1, 
    shrink-to-fit=no">
<body>
<?php

    
    if($showAlert) {
    
        echo '<div class="alert-success" role="alert">
        <button type="button" class="closebtn-success"
            data-dismiss="alert" aria-label="Close">
            <strong>Success!</strong> Your account is 
        now created and you can login.  
            <span aria-hidden="true">×</span> 
        </button> 
    </div>'; 
    }
    
    if($showError) {
    
        echo '<div class="alert-danger" role="alert"> 
        <button type="button" class="closebtn-error" 
            data-dismiss="alert" aria-label="Close">
            <strong>Error!</strong> '. $showError.'
            <span aria-hidden="true">×</span> 
        </button> 
    </div>'; 
   }
        
    if($exists) {
        echo '<div class="alert-danger" role="alert">
        <button type="button" class="closebtn-error" 
            data-dismiss="alert" aria-label="Close">
            <strong>Error!</strong> '. $exists.' 
            <span aria-hidden="true">×</span> 
        </button>
    </div>'; 
    }
   
?>
    <h1 class="text-center">Sign Up</h1> 
    <form action="signup.php" method="post">
        <div class="form-group"> 
        <label for="user_uid">Username:</label>
        <input type="text" class="form-control" id="user_uid"
            name="user_uid" aria-describedby="emailHelp" placeholder="Username" onkeyup="stoppedTyping()" required>    
        </div>

        <label for="user_level">User Level:</label>
            <select type="text" class="form-control"
            id="user_level" name="user_level" placeholder="Select user level" onkeyup="stoppedTyping()" required>
            <option value="" disabled selected>Select user level</option>
            <option value="Administrator">Administrator</option>
            <option value="User">User</option>
        </select>

        <div class="form-group"> 
        <label for="user_fname">Full Name:</label>
        <input type="text" class="form-control" id="user_fname"
            name="user_fname" aria-describedby="emailHelp" placeholder="Full Name" onkeyup="stoppedTyping()" required>    
        </div>
        
        <div class="form-group">
        <label for="user_email">E-mail Address:</label>
            <input type="text" class="form-control"
            id="user_email" name="user_email" placeholder="E-mail Address" onkeyup="stoppedTyping()" required> 
        </div>
        
        <div class="form-group">
        <label for="user_section">Section:</label>
            <input type="text" class="form-control"
            id="user_section" name="user_section" placeholder="Enter section" onkeyup="stoppedTyping()" required>
        </div>
        <div class="form-group"> 
        <label for="user_department">Department:</label>
            <select class="form-control"
            id="user_department" name="user_department" placeholder="Select Department" onkeyup="stoppedTyping()" required>
            <option value="" disabled selected>Select your department</option>
            <option value="Administration">Administration</option>
            <option value="Accounting">Accounting</option>
            <option value="Purchasing">Purchasing</option>
            <option value="Production Technology">Production Technology</option>
            <option value="Quality Control">Quality Control</option>
            <option value="Quality Assurance">Quality Assurance</option>
            <option value="Production 1">Production 1</option>
            <option value="Production 2">Production 2</option>
            <option value="Production Planning and Inventory Control">Production Planning and Inventory Control</option>
            <option value="Parts Inspection">Parts Inspection</option>
            <option value="System Kaizen">System Kaizen</option>
            <option value="Direct Operation Kaizen">Direct Operation Kaizen</option>
            <option value="Production Support">Production Support</option>
            <option value="Parts Production">Parts Production</option>
        </select>
        <label for="user_pwd">Password:</label>
        <div class="form-group"> 
            <input type="password" class="form-control"
            id="user_pwd" name="user_pwd" placeholder="Password" onkeyup="stoppedTyping()" required> 
        </div>
        <div class="form-group">
        <label for="user_cpwd">Confirm your password:</label>
            <input type="password" class="form-control"
                id="user_cpwd" name="user_cpwd" placeholder="Confirm Password" onkeyup="stoppedTyping()" required>
        
            <small id="emailHelp" class="form-text text-muted">
            Make sure to complete all of the fields
            </small> 
        </div>      
        <div>
        <input type="submit" class="reg-btn" Value="Register"id="reg_btn">
        </div>
        <p>Already have and account? <a href="login.php">Click here to login</a></p>
    </form> 

    <script type="text/javascript">
function createAlert(message){
  var alert = document.createElement("div");
  alert.setAttribute("class","alert alert-danger alert-dismissible fade show");
  alert.setAttribute("role","alert");
  alert.innerHTML = message;
  setTimeout(function() {
    $(alert).fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 8000);
  document.getElementById("modalBody").appendChild(alert);
}
// Reg Button Disable
function stoppedTyping(){
    if(document.getElementById("user_uid").value == "" || document.getElementById("user_fname").value == "" || document.getElementById("user_email").value == "" || document.getElementById("user_section").value == "" || document.getElementById("user_department").value == "" || document.getElementById("user_pwd").value == ""){
        document.getElementById("reg_btn").disabled = true;
    } else {
        document.getElementById("reg_btn").disabled = false;
    }
}
// $user_uid = $_POST["user_uid"];
//     $user_fname = $_POST["user_fname"];
//     $user_email = $_POST["user_email"];
//     $user_section = $_POST["user_section"];
//     $user_department = $_POST["user_department"];
//     $user_pwd = $_POST["user_pwd"]; 
//     $user_cpwd = $_POST["user_cpwd"];

// Confirm Password Checker

</script>

</body>
</html>