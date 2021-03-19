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
                <p hidden id="id"></p>
                <!-- <p id="artist">Type</p> -->
                <!-- middle part --->
               
            

        <div class="middle">
            <button id="pre"><i class="fa fa-step-backward" 
            aria-hidden="true"></i></button>
            <button onclick="justplay()" id="play"><i class="fa fa-play"
            aria-hidden="true"></i></button>
            <button id="next"><i class="fa fa-step-forward"
            aria-hidden="true"></i></button>
        </div>

            <div class="duration">
                <input type="range" min="0" max="100" value="0" id="duration_slider" 
                onchange="change_duration()">
            </div>
                <button id="auto">Auto play <i class="fa fa-circle-o-notch" 
                 aria-hidden="true"></i></button>
        </div>
                 
    </div>
