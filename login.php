
<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head><title></title>


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
  <h1>Welcome to imagination world.</h1>
  <p>  “The real world is much smaller than the imaginary”</p>
</div>

<?php 

include 'data.php';

if(isset($_POST['submit']))
{

 
 
    $email =$_POST['email'];  
     $password =$_POST['password'];

   $email_search = " select * from signup where email = '$email' ";

   $q=mysqli_query($conn,  $email_search );
$email_count =mysqli_num_rows($q);
if($email_count)
{
    $email_pass =mysqli_fetch_assoc($q);
    $data_pass=$email_pass['password'];

    $_SESSION['username']=$email_pass['username'];

    $pass_decode= password_verify($password,$data_pass);

if($pass_decode){
    echo"login";
   ?>

<script>
location.replace("index.php");
</script>
<?php
}else
{
    ?>

    <script>
    alert("wrong password");
  </script>
<?php
}
}else{
?>
    <script>
    alert("wrong password");
  </script>
<?php
}


}

?>
<div class="card bg-light">
<article class="card-body w-50 m-auto" style="max-width: 400px;"> 
<h4 class="card-title mt-3 text-center">Create Account</h4>
<p class="text-center">Get started with your free account</p>
 



<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" >
<div class="form-group input-group">
    <div class ="input-group-prepend">
        <span class="input-group-text">
            <i class="fa fa-envelope"></i></span>
</div>
<input name="email" class="form-control" placeholder="Email address" type="email"
 required>
</div> <!-- form-group// -->


<div class="form-group input-group">

<div class="input-group-prepend">
<span class="input-group-text"> <i class="fa fa-lock"></i
> </span>
</div>
<input class="form-control" placeholder="password" type="password" name="password" value="" required> 
</div> <!-- form-group// -->
 <div class="form-group">
<button type="submit" name="submit" class="btn btn-primary btn-block"> login 

</button> </div> <!-- form-group// -->
<p class="text-center"> Don't Have an account? <a href=" registration.php">SignUp</a> </p>
</form>
</article>
</div> <!-- card.// -->
</div>
</div>
</div> 



</body>

<footer>

<p class ="foot  p-3  mt-5  bg-dark text-white text-center"> @See you again :) </p>
</footer>
</html>