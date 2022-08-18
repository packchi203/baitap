<?php
    session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location:index.php");
        exit;
    }

    require_once "config.php";

    $username = $password = "";
    $username_err = $password_err = $login_err = "";
    
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        
        // check username
        if(empty(trim($_POST["username"]))){
            $username_err = "Plase enter username.";
        } else{
            $username = trim($_POST["username"]);
        }
       //check password
        
        if(empty(trim($_POST["password"]))){
            $password_err = "Plase enter password.";
        } else{
            $password = trim($_POST["password"]);
        }
         //vatidate credentials
        if(empty($username_err) && empty($password_err)){

            $sql = "SELECT id, username, password FROM users WHERE username = ?";

            if($stmt = mysqli_prepare($mysqli, $sql)){

                mysqli_stmt_bind_param($stmt, "s" , $param_username);
    
                $param_username = $username;
    
                if(mysqli_stmt_execute($stmt)){

                    mysqli_stmt_store_result($stmt);
    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        
                        mysqli_stmt_bind_result($stmt,$id,$username, $hashed_password);
                        if(mysqli_stmt_fetch($stmt)){
                            if(password_verify($password, $hashed_password)){
    
                                session_start();
    
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;
                               
    
                                header("location: index.php");
    
                            } else{
                                $login_err = " Invalid username or password.";
    
                            }
                        }
                    } 
                }else{
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
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body{
            font: 15px sans-serif;
        }
        .wrapper{
            width: 360px; padding: 20px;
            padding: 7em 0;
        }
        .container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }
  @media (min-width: 576px) {
    .container {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container {
      max-width: 960px; } }
  @media (min-width: 1200px) {
    .container {
      max-width: 1140px; } }
       
      .row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}
.justify-content-center {
  -webkit-box-pack: center !important;
  -ms-flex-pack: center !important;
  justify-content: center !important; }
    </style>
   </head>
   <body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
            
            
        <?php
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SEVER["PHP_SELF"]);  ?>"
        method="POST">
        <div class="from-group">
            <label>Username</label>
            <input type="text" name="username" class="from-control 
            <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
             value="<?php echo $username; ?>">
             <span class="invalid-feedback"><?php echo $username_err; ?></span>
        </div>
        <div class="from-group">
            <label>Password</label>
            <input type="password" name="password" class="from-control 
            <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
             value="<?php echo $password; ?>">
             <span class="invalid-feedback"><?php echo $password_err; ?></span>
        </div>


        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
        <p>Don't have account? <a href="register.php"> Sign up now</a>.</p>
        
        </form>
            </div>
        </div>
    </div>
    
   </body>
   </html>
   