<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


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
    <form id="Login" action="check-login.php" method="post">

        <div class="form-group">


            <input type="text" class="form-control" name="username" placeholder="Username">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name="password" placeholder="Password">

        </div>
        <div class="form-group">

<input type="text" class="form-control" name="Mode" placeholder="Mode">

</div>
        <div class="forgot">
        <a href="reset.html">Forgot password?</a>s
</div>
        <button type="submit" class="btn btn-primary">Login</button><br><br>
        <button type="button" class="btn btn-primary">Add</button><br><br>
        <button type="button" class="btn btn-primary">Update</button><br><br>
        <button type="button" class="btn btn-primary">Delete</button>
    

    </form>
    </div>
<p class="botto-text"> Moufichi & badr</p>
</div></div></div>


</body>
</html>
