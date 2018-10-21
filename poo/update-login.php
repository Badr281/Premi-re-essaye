<?php 
 session_start();
 if(isset($_POST['submit']))
 
 {   
 
 $passwordold=$_POST["passwordold"];
 $passwordnew=$_POST["passwordnew"]; 
$usernameu=$_session["username"];
$dbname = "founder";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {

$sql = "update user set Password=$passwordnew  where Username=$usernameu and Password=$passwordold"; 

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

l

 }



?>

<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="Style.css">
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <div class="form-group">


            <input type="password" class="form-control" name="passwordold" placeholder="old password">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name="passwordnew" placeholder="new password">

        </div>
        <div class="form-group">

<input type="password" class="form-control" name="passwordnew" placeholder="new password">

</div>
        <div class="forgot">
        <a href="reset.html">Forgot password?</a>s
</div>
        <button type="submit" class="btn btn-primary">update</button><br><br>
        
    

    </form>
    </div>
<p class="botto-text"> Moufichi & badr</p>
</div></div></div>


</body>
</html>