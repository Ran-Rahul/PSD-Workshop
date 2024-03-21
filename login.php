

<?php 
$login=false;
$showerror=false;
if($_SERVER['REQUEST_METHOD'] == "POST"){

//connection to database 
    $servername="localhost";
    $username="root";
    $password="";
    $database="project";
    

    $conn=mysqli_connect($servername ,$username , $password , $database);
  $email=$_POST["email"];
  $password=$_POST["password"];
//Matching the login credentials from the database

$sql= "SELECT * FROM `login` WHERE Email='$email' And Passward ='$password';";
$result=mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);
if($num==1){
$login=true;
session_start();
$_SESSION['loggedin']=true;

header("location: Home.html");

}
else{
  
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Incorrect username or password </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


}


?>