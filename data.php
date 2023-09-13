<?php

 $server = "localhost";
 $user ="root";
 $password = "";
 $db ="sign";


 $conn= mysqli_connect($server,$user,$password,$db);
 if($conn)
 {

  ?>




  <?php
 }
 else
 {
  ?>

<script>
  alert("not connet");
</script>


  <?php
 }



?>
