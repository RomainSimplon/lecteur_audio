<div class="bloc-header">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<a class="navbar-brand" href="./index_co.php">
      <img src="image/simplify.jpeg" alt="logo">
  </a>


<div class="container_header">
  
  <h2>Bonjour<?php echo " ".$_SESSION['user_name']." "?></h2>

  <div class="container_icons">
    <div class="settings"><a href="./upload.php"><i class="fa fa-cog"></i></a></li></div>
    <div class="logout"><a href="login/process/logout.php"><i class="fa fa-sign-out"></i></a>
    </div>
  </div>

</div> 

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"></ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>    
  
</nav>
</div>

