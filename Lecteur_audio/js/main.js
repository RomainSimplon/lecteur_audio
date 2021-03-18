let previous = document.querySelector('#pre');
let play = document.querySelector('#play');
let next = document.querySelector('#next');
let title = document.querySelector('#title');
let recent_volume = document.querySelector('#volume');
let volume_show = document.querySelector('#volume_show');
let slider = document.querySelector('#duration_slider');
let show_duration = document.querySelector('#show_duration');
let track_image = document.querySelector('#track_image');
let auto_play = document.querySelector('#auto');
let present = document.querySelector('#present');
let total = document.querySelector('#total');
let artist = document.querySelector('#artist');
let type = document.querySelector('#type');



let timer;
let autoplay = 0;

let index_no = 0;
let playing_song = false;

let track = document.createElement('audio');

//liste des musique
// let i = [
//     {
//         name: "first song",
//         path: "music/music1.mp3",
//         img: "image/img1.jpg",
//         singer: "first singer"
//     },
//     {
//         name: "second song",
//         path: "music/music2.mp3",
//         img: "image/img2.png",
//         singer: "second singer"
//     },
//     {
//         name: "third song",
//         path: "music/music3.mp3",
//         img: "image/img3.jpg",
//         singer: "third singer"
//     }
// ];

// let data = new XMLHttpRequest();

// data.open("GET",'http://php.loc/Lecteur_audio/json.php');

// data.responseType = "json";

// data.send();
// console.log(data);


fetch('http://php.loc/Lecteur_audio/json.php',{
    method:'get'
}).then((response)=>{
    return response.json()
}).then((data)=>{
    load_track(data, index_no);
    
})


//Les function

//chargement de la music 
function load_track(data, index_no){
    clearInterval(timer);
    reset_slider()
    console.log(data);
    track.src = data[index_no].music;
    title.innerHTML = data[index_no].music_name;
    track_image.src = data[index_no].music_photo;
    artist.innerHTML = data[index_no].music_artist;
    type.innerHTML = data[index_no].music_type;
    // type.innerHTML = data[index_no].music_type;
    track.load();

    total.innerHTML = data.length;
    present.innerHTML = index_no +1;
    timer = setInterval(range_slider , 1000);
    
   
}

//mute
function mute_sound(){
    track.volume = 0;
    volume.value = 0;
    volume_show.innerHTML = 0;
}





//reset
function reset_slider(){
    slider.value = 0;
}

// verif si la musique est sur play ou non 
function justplay(){
    if(playing_song==false){
        playsong();
    }else{
        pausesong();
    }
}

//play 
function playsong(){
    track.play();
    playing_song = true;
    play.innerHTML = '<i class="fa fa-pause"></i>'
}


//pause
function pausesong(){
    track.pause();
    playing_song = false;
    play.innerHTML = '<i class="fa fa-play"></i>'
}

//prochaine musique 
function next_song(data){
    console.log(data);
    if (index_no < data.length - 1){
        index_no += 1;
        load_track(data, index_no);
        playsong();
    }else{
        index_no = 0;
        load_track(index_no);
        playsong();
    }
}


//revenir à la musique d'avant
function previous_song(){
    if (index_no > 0){
        index_no -= 1;
        load_track(index_no);
        playsong();
    }else{
        index_no = data.length -1;
        load_track(index_no);
        playsong();
    }
}

//volume
function volume_change(){
    volume_show.innerHTML = recent_volume.value;
    track.volume = recent_volume.value / 100;
}

//slider position
function change_duration(){
    slider_position = track.duration * (slider.value / 100);
    track.currentTime = slider_position;
}

//autoplay
function autoplay_switch(){
    if (autoplay===1){
        autoplay=0;
        auto_play.style.background = "#FFF";
        
    }else{
        autoplay = 1;
        auto_play.style.background = "#FF8A65";
        console.log(autoplay);
    }
}


function range_slider(){
    let position = 0;

    if(!isNaN(track.duration)){
        position = track.currentTime * (100 / track.duration);
        slider.value = position;
    }

    //passer à une autre musique quand la musique en cour est fini 
    if(track.ended){
        play.innerHTML = '<i class=fa fa-play"></i>'
        if (autoplay==1){
            index_no += 1;
            load_track(index_no);
            playsong();
        }
    }
}