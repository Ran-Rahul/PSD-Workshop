
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    

//database connection
    $servername="localhost";
    $username="root";
    $password="";
    $database="project";
    
    $conn=mysqli_connect($servername ,$username , $password , $database);
    


  $_username=$_POST["userrname"];
  $_password=$_POST["password"];
  $_email=$_POST["email"];
  $existsql="SELECT * FROM `login` WHERE Username ='$_username'";
  $result=mysqli_query($conn, $existsql);
  $numexistrows=mysqli_num_rows($result);
  if($numexistrows>0){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Username already exists</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  
else{

    //storing the values into sql
  
  
  $sql="INSERT INTO `login` (`Email`, `Username`, `Passward`, `dt`) VALUES ('$_email', '$_username', '$_password', current_timestamp());";
  $result=mysqli_query($conn, $sql);
  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your account created successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  $login=true;
session_start();
//login
$_SESSION['loggedin']=true;
$_SESSION['username']=$_username;

  }
  
  
}
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="script.js">
</head>
<body>

    <header>
        <h2 class="logo">CodeX Learner</h2>
        <nav class ="navigator">
            <a href ="#">Home</a>
            <a href ="#">about</a>
            <a href ="#">service</a>
            <a href ="#">contact</a>
            <button class="btmLogin-popup">Login</button>
        </nav>
    </header>
      <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
        </span>


        <div class="form-box login">
            <h2>Login</h2>
            <form method="post" action="login.php">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email " name="email" required>
                        <label>   Email</label>
                    
                </div>
                <div class="input-box">
                    <span class="icon"> <ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    
                </div>
                <div class="remember-forgot">
                    <label ><input type="checkbox" >Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="Register-link">Register</a></p>

                </div>
            </form>
        </div>



        <div class="form-box register">
            <h2>Register</h2>
            <form method="post" action="index.php">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle"></ion-icon></span>
                        <input type="text" name="userrname" required>
                        <label>   Username</label>
                    
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email"  name="email" required>
                        <label>   Email</label>
                    
                </div>
                <div class="input-box">
                    <span class="icon"> <ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    
                </div>
                <div class="remember-forgot">
                    <label ><input type="checkbox">I agree to the term and condition</label>
                    
                    
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have a account? <a href="#" class="login-link">Login</a></p>

                </div>
            </form>
        </div>

      </div>      
        
            
        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    
</body>
</html>
