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
                               
    
                                header("location: ../index.php");
    
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
  <!-- Google Fonts -->
  <link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
rel="stylesheet"
/>

    <style>
        body{
            font: 15px sans-serif;
        }
        .wrapper{
            padding: 170px;
        }
        

.container {
    background: white;
    width: 500px;
    height: 475px;
    position: relative;
    text-align: center;
  
    margin: auto;
    box-shadow: 0 0 20px 0px rgb(0 0 0 / 10%);
}
input{
  margin: 20px 0;
}



    </style>
   </head>
   <body>
 
  
   <?php
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        
        }
        ?>
 <div class="wrapper">
    <div class="container">
    
        <h1 style="padding: 20px;">Đăng Nhập</h1>
       
  <form action="<?php echo htmlspecialchars($_SEVER["PHP_SELF"]);  ?>"
        method="POST" >
       
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="username" id="form2Example1" class="form-control  <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
             value="<?php echo $username; ?> " />
    <label class="form-label" for="form2Example1">Username</label>
    <span class="invalid-feedback"><?php echo $username_err; ?></span>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" id="form2Example2" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
             value="<?php echo $password; ?>" />
<span class="invalid-feedback"><?php echo $password_err; ?></span>
    <label class="form-label" for="form2Example2">Mật khẩu</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4" >
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
        <label class="form-check-label" for="form2Example34"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button style="margin: 0 130px; width: 200px;" type="submit" class="btn btn-primary btn-block mb-4 justify-content-center">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
    <p>or sign up with:</p>
    <button type="button" class="btn btn-primary btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-primary btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-primary btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-primary btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>
    </div>
 </div>
 <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>
   </body>
   </html>
   