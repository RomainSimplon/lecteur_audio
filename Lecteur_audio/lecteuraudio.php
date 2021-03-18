<?php
        session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="css/lecteuraudio.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="./index_co.php">
      <img src="image/simplify.jpeg" alt="logo">
  </a>



<div class="container_header">
  
  <h2><?php echo " ".$_SESSION['user_name']." "?></h2>

  <div class="container_icons">
    <div class="settings"><a href="./upload_img.php"><i class="fa fa-cog"></i></a></li></div>
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
<div class="global-container">

    <div class="bloc-lecteur">
    <div class="main">
                <p id="logo"><i class="fa fa-music" aria-hidden="true"></i>music</p>
               
            <div class="left">

                <img id="track_image">
                <div class="volume">
                <p id="volume_show">10</p>
                <i class="fa fa-volume-up" aria-hidden="true" id="volume_icon" 
                onclick="mute_sound()"></i>
                <input type="range" min="0" max="100" value="10" onchange="volume_change()"  id="volume">
            </div>
        </div>

            <div class="right">
                <div class="show_song_no">
                    <p id="present">1</p>
                    <p>/</p>
                    <p id="total">3</p>
                </div>

                <!-- song title --->
                <p id="title">title.mp3</p>
                <p id="artist">Artist name</p>
                <p id="type">type</p>
                <p id="id">id</p>
                <!-- <p id="artist">Type</p> -->
                <!-- middle part --->
               
            

        <div class="middle">
            <button onclick="previous_song()" id="pre"><i class="fa fa-step-backward" 
            aria-hidden="true"></i></button>
            <button onclick="justplay()" id="play"><i class="fa fa-play"
            aria-hidden="true"></i></button>
            <button onclick="next_song()" id="next"><i class="fa fa-step-forward"
            aria-hidden="true"></i></button>
        </div>

            <div class="duration">
                <input type="range" min="0" max="100" value="0" id="duration_slider" 
                onchange="change_duration()">
            </div>
                <button id="auto" onclick="autoplay_switch()">Auto play <i class="fa fa-circle-o-notch" 
                 aria-hidden="true"></i></button>
        </div>
                 
    </div>
    </div>

    <div class="right-bloc">
        <div class="bloc-music">
        <?php include("box_right_music.php");
        ?>  
        </div>

        <div class="bloc-artiste">
        <?php include("box_right_artist.php");
        ?>  
        </div>
    </div>

</div>


    <?php include("footer.php");
    ?>

<script src="js/main.js"></script>
</body>
</html>