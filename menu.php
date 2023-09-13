<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Welcome to imagination.......<?php echo  $_SESSION['username']; ?>!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="library.php">Library</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Know more</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registration.php">Sign up</a>
      </li>
       
       
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>


      
<div class="content_btn btn btn-outline-primary m-2 my-sm-0">
  <a href="logout.php">Logout</a>
</div>

    </form>
  </div>
</nav>