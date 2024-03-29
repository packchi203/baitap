<?php 
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";


if($_SERVER["REQUEST_METHOD"]== "POST"){
    // username
    if(empty(trim($_POST["username"]))){
        $username_err = "Plase enter username.";
    } elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", trim($_POST["username"]))){
        $username_err = "username can oly contain latters, number and underscores";

    } else {
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($mysqli, $sql)){
             
            mysqli_stmt_bind_param($stmt,"s", $param_username);

            $param_username = trim($_POST["username"]);

            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";

                } else{
                    $username = trim($_POST['username']);
                }
            } else {
                echo "Oops! Something went wrong .Plase try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    
    }


    //password
    if(empty(trim($_POST["password"]))){
        $password_err = "Plase enter password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "password must have atleast 6 characters";

    } else {
        $password = trim($_POST["password"]);
    }
    //confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Plase confirm password.";
    } else{
        $confirm_password = trim($_POST['confirm_password']);

       if(empty($password_err) && ($password != $confirm_password)){
         $confirm_password_err = "password did not match";

        }
    }

    //check input error on database
    if(empty($username_err) && empty($password_err) &&  empty($confirm_password_err)){

        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($mysqli, $sql)){

            mysqli_stmt_bind_param($stmt,"ss", $param_username, $param_password);

            $param_username = $username;

            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");

            } else {
                echo "Oops! Something went wrong .Plase try again later.";
            }
             mysqli_stmt_close($stmt);
        }

    }
     mysqli_close($mysqli);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    <title>Sign up</title>

    <style>
        body{font: 15px sans-serif;}
        .wrapper{width: 360px; padding: 20px;}
    </style>

</head>
<body>
    <div class="wrapper">
        <h2>Sign up</h2>
        <p>Pleasr fill this form to create an account</p>
        <form action="<?php  echo htmlspecialchars($_SEVER["PHP_SELF"]);?>" method="POST">
        <div class="from-group">
            <label for="">Username</label>
            <input type="text" name="username" class="from-control 
            <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
             value="<?php echo $username; ?>">
             <span class="invalid-feedback"><?php echo $username_err; ?></span>
        </div>
        <div class="from-group">
            <label for="">Password</label>
            <input type="password" name="password" class="from-control 
            <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
             value="<?php echo $password; ?>">
             <span class="invalid-feedback"><?php echo $password_err; ?></span>
        </div>
        <div class="from-group">
            <label for="">Confirm password</label>
            <input type="password" name="confirm_password" class="from-control 
            <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
             value="<?php echo $confirm_password; ?>">
             <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
        </div>
        <div class="from-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-secondary ml-2" value="Reset">
        </div>
    <p>Already have an account <a href="login.php">Login here</a></p>

    </form>
    </div>
    
</body>
</html>