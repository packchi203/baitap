<?php 
require_once "config.php";

$username = $password = $confirm_password = $first_name = $last_name = "";
$username_err = $password_err = $confirm_password_err = $first_name_err = $last_name_err = "";


if($_SERVER["REQUEST_METHOD"]== "POST"){
    //first name
    if(empty(trim($_POST["first_name"]))){
      $first_name_err = "Vui lòng nhập Họ.";

    } else {
        $first_name = trim($_POST["first_name"]);
    }
    //last name
    if(empty(trim($_POST["last_name"]))){
      $last_name_err = "Vui lòng nhập Tên.";
    } else {
      $last_name = trim($_POST["last_name"]);
    }

    // username
    if(empty(trim($_POST["username"]))){
       $username_err = "Vui lòng điền email.";
    } elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", trim($_POST["username"]))){
      $username_err = "username can oly contain latters, number and underscores";

  }else {
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($mysqli, $sql)){
             
            mysqli_stmt_bind_param($stmt,"s", $param_username);

            $param_username = trim($_POST["username"]);

            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Email này đã được tạo tài khoản.";

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
        $password_err = "Vui lòng nhập mật khẩu.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Mật khẩu phải có trên 6 kí tự";
    } else {
        $password = trim($_POST["password"]);
    }
    //confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Vui lòng nhập mật khẩu";
    } else{
        $confirm_password = trim($_POST['confirm_password']);

       if(empty($password_err) && ($password != $confirm_password)){
         $confirm_password_err = "Mật khẩu không giống nhau , hãy nhập lại";

        }
    }

    //check input error on database
    if(empty($first_name_err) && empty($last_name_err) &&  empty($username_err) && empty($password_err) &&  empty($confirm_password_err)){

        $sql = "INSERT INTO users (first_name, last_name, username, password) VALUES (?, ?, ? ,?)";

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
    height: 525px;
    position: relative;
    text-align: center;
  
    margin: auto;
    box-shadow: 0 0 20px 0px rgb(0 0 0 / 10%);
}




    </style>
   </head>
   <body>
   
 <div class="wrapper">
    <div class="container">
      
        <h1 style="padding: 20px;">Sign in</h1>
        <form action="<?php  echo htmlspecialchars($_SEVER["PHP_SELF"]);?>" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="first_name" id="form3Example1" class="form-control
        <?php echo (!empty($first_name_err)) ? 'is-invalid' : ''; ?>"
             value="<?php echo $first_name; ?>" />
        <label class="form-label" for="form3Example1">Họ</label>
        <span class="invalid-feedback"><?php echo $first_name_err; ?></span>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" name="last_name" id="form3Example2" class="form-control
        <?php echo (!empty($last_name_err)) ? 'is-invalid' : ''; ?>"
             value="<?php echo $last_name; ?>" />
        <label class="form-label" for="form3Example2">Tên</label>
        <span class="invalid-feedback"><?php echo $last_name_err; ?></span>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="username"  id="form3Example3" class="form-control
    <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
             value="<?php echo $username; ?>" />
    <label class="form-label" for="form3Example3">Email </label>
    <span class="invalid-feedback"><?php echo $username_err; ?></span>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" id="form3Example4" class="form-control
    <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
             value="<?php echo $password; ?>" />
    <label class="form-label" for="form3Example4">Mật khẩu</label>
    <span class="invalid-feedback"><?php echo $password_err; ?></span>

  </div>
  <!-- Confirm password input -->
  <div class="form-outline mb-4">
    <input type="password" name="confirm_password"  id="form3Example4" class="form-control
    <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
             value="<?php echo $confirm_password; ?>" />
    <label class="form-label" for="form3Example4">Nhập lại mật khẩu</label>
    <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>

  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input required class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
    <label class="form-check-label" for="form2Example33">
     Tôi đồng ý với <a style="color: black;  text-decoration: underline; " href="#"> điều khoản và điều kiện</a> của Cobid

    </label>
  </div>

  <!-- Submit button -->
  <button style="margin: 0 130px; width: 200px;" type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

  <!-- Register buttons -->
  <div class="text-center">
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
   