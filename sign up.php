
<?php


session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Reading online website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&family=Satisfy&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
   integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
   crossorigin="anonymous" referrerpolicy="no-referrer" />
 
   
</head>
<body>
<div class="jumbotron">
  <h1>Welcome to imagination world</h1>
  <p>  “The real world is much smaller than the imaginary”</p>
</div>
<?php
include 'data.php';

if(isset($_POST['submit'])){
 $username=mysqli_real_escape_string($conn,$_POST['username']);
 $email=mysqli_real_escape_string($conn,$_POST['email']);
 $mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
 $password=mysqli_real_escape_string($conn,$_POST['password']);
 $cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);
 
 $pass = password_hash($password,  PASSWORD_BCRYPT);
 $cpass= password_hash($cpassword,  PASSWORD_BCRYPT);
$emailquery =" select * from signup where email = '$email' ";

$query = mysqli_query($conn,$emailquery);

$emailcount = mysqli_num_rows($query);
if($emailcount>0)

{
  ?>

  <script>
    alert("email already exist");
  </script>
  
  
    <?php

}
else
{
  if($password===$cpassword)
  {
$insertquery = " insert into signup(username,email,mobile,password,cpassword) 
values('$username','$email','$mobile','$pass','$cpass')";

$iquery = mysqli_query($conn,$insertquery);

if($conn)
 {

  ?>

<script>
  alert("inserted");
</script>


  <?php
 }
 else
 {
  ?>

<script>
  alert("not inserted");
</script>


  <?php
 }

 }
  else
  {?>
  <script>
    alert("password not matched");
    </script>
    <?php
  }
}
}

?>


<div class="card bg-light">
<article class="card-body w-50 m-auto" style="max-width: 400px;"> 
<h4 class="card-title mt-3 text-center">Create Account</h4>
<p class="text-center">Get started with your free account</p>
 

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" >
<div class="form-group input-group">
<div class="input-group-prepend">
<span class="input-group-text"> <i class="fa fa-user"></i> </span>
</div>
<input name="username" class="form-control" placeholder="Full name" type=
"text" required>
</div> <!-- form-group// -->
<div class="form-group input-group">
    <div class ="input-group-prepend">
        <span class="input-group-text">
            <i class="fa fa-envelope"></i></span>
</div>
<input name="email" class="form-control" placeholder="Email address" type="email"
 required>
</div> <!-- form group//-->
<div class="form-group input-group">
     <div class="input-group-prepend">
<span class="input-group-text">
     <i class="fa fa-phone"></i>
</span>
</div>
<input name="mobile" class="form-control" placeholder="Phone number" 
type="number" required>

</div><!---form-group-->
<div class="form-group input-group">

<div class="input-group-prepend">
<span class="input-group-text"> <i class="fa fa-lock"></i
> </span>
</div>
<input class="form-control" placeholder="Create password" type="password" name="password" value="" required> </div> <!-- form-group// -->
<div class="form-group input-group"> <div class="input-group-prepend">
<span class="input-group-text"> <i class="fa fa-lock"
></i> </span>
</div>
<input class="form-control" placeholder="Repeat password" type="password" name="cpassword" required>
</div> <!-- form-group// --> <div class="form-group">
<button type="submit" name="submit" class="btn btn-primary btn-block "> Create Account 

</button> </div> <!-- form-group// -->
<p class="text-center">Have an account? <a href=" login.php">Log In</a> </p>
</form>
</article>
</div> <!-- card.// -->
</div>
</div>
</div> 

<footer>

<p class ="p-3 bg-dark text-white text-center"> @See you again :) </p>
</footer>
</body>
</html>