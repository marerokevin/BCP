<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
    
}
// Include config file
require_once "dbconnect.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
if(empty(trim($_POST["username"]))){
    $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, user_uid, user_pwd, user_fname, user_department, user_level, user_section FROM users WHERE user_uid = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $user_fname, $user_department, $user_level, $user_section);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["user_level"] = $user_level;
                            $_SESSION["username"] = $username;
                            $_SESSION["user_fname"] = $user_fname;
                            $_SESSION["user_department"] = $user_department;
                            $_SESSION["user_section"] = $user_section;
                            
                            // Redirect user to welcome page
                            header("location: dashboard.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>GPI-BCP</title>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="/bcp-system/assets/css/login.php">
    <!--FONT-->
</head>
<body>
    <div class="title">
            <a href="/bcp-system/user/login.php" class="header_logo">
                <img src="/bcp-system/assets/images/logo.svg" alt="GPI-BCP">
            </a>
        <h1 class="text-center">Glory Philippines Inc.</h1>
        <h2 class="system_title">BCP - System</h2>
    </div>
    <div name="login_form" class="login">
        <h2 class="Login-title">Login</h2>
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger 
            alert-dismissible fade show" role="alert">' . $login_err . '</div>';
        }        
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form">
                <input type="text" name="username" class="username<?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" placeholder="Username" required oninvalid="this.setCustomValidity('Enter your username here')"
                oninput="this.setCustomValidity('')"/><br>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form">
                <input type="password" name="password" class="password<?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" Placeholder="Password" required oninvalid="this.setCustomValidity('Enter your password here')"
                oninput="this.setCustomValidity('')"/><br>
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form">
                <input type="submit" class="loginbtn" value="Login">
            </div>
            <label>
                <input class="rmbr" type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <p>Don't have an account? <a href="signup.php">Sign up now</a></p>
        </form>
    </div>  
</body>
</html>