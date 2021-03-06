<?php
?>
<!Doctype html>
<!--
    ____        __    _          ______          
   / __ \____  / /_  (_)___     / ____/___ _____ 
  / /_/ / __ \/ __ \/ / __ \   / / __/ __ `/ __ \
 / _, _/ /_/ / /_/ / / / / /  / /_/ / /_/ / / / /
/_/ |_|\____/_.___/_/_/ /_/   \____/\__,_/_/ /_/ 
                                                 
Github @therobingan                                                                  
-->
<html>
  <head>
    <title>Music | Robin Gan &raquo; Robingan.com</title>
    <meta charset="UTF-8"/>
    <meta property="og:title" content="Music | Robin Gan &raquo; Robingan.com" />
    <meta name="description" content="Robin Gan's music  Welcome to my portfolio page"/>
    <meta property="og:description" content="Robin Gan's music  Welcome to my portfolio page"/>
    <?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/headerInfo.php' ); ?>
    <link rel="stylesheet" href="/styles/main.css"/>
    <link rel="stylesheet" href="/styles/music.css"/>
    <link rel="stylesheet" href="/styles/newsAndCookie.css"/>
    <link rel="stylesheet" href="/styles/menu.css"/>
    <link rel="stylesheet" href="/styles/titleFoldedAnimation.css"/>
    <script src='/javascript/js.cookie.js'></script>
    <script src="/javascript/indexToggle.js" defer></script>
    <script src="/javascript/newsAndCookieToggle.js" defer></script>
    <script src="/javascript/titleFolded.js" defer></script>
    <script src="/javascript/music.js" defer></script>
  </head>

<body>
  
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/menu.php' ); ?>

<!--content-->
<div id="content">

  <div class="music_card">
    <div class="card-head">
      <img src="/images/music/dissLiuXue.png" alt="cover"/>
    </div>
    <div class="music_card-body">
      <div class="music-desc">
        <span class="music-title">
                <span class="titleConectnt">Data Loading</span>
                <span class="badge">
                  New
                </span>
        </span>
        <span class="music-data">Played: 0 / Downloaded: 0</span>
        <span class="music-type">
            Data Loading 
        </span>
        <div class="music-des">
          <p>
            Data Loading Data Loading Data Loading Data Loading Data Loading Data Loading Data Loading Data Loading 
          </p>
        </div>

        <span class="music-rating">
          <i mp3="/mp3/dont_mess_with_robin_gan.mp3" class="fas fa-download"></i>
        </span>

        <div class="btn playButton">
          <i class="fas fa-play"></i>
        </div>
      </div>
    </div>
  </div>

</div>


<!--Player Station-->
<div id="playerstation" class="disappear">
  <i id="playerstation-down" class="fas fa-chevron-down" onclick="editAppear()"></i>  
  <img id="playerstation-img" src="../images/logo.png" alt="current_photo"/>
  <h6 id="playerstation-titlee" artist=" - Robin Gan">NO Music</h6>
  <i id="playerstation-pause" class="fas fa-play" onclick="pauseAndStart(this)"></i>
  <input id="playerstation-range" type="range" min="0" max="1" value="1" step="0.01" oninput="changeVolume(this.value)">
  <i id="playerstation-on" class="fas fa-volume-up" onclick="editMuted(this)"></i>
  <i id="playerstation-loop" class="fas fa-redo-alt" onclick="editLoop(this)"></i>
</div>  

<!--mock player-->
<audio loop id="mockPlayer" ontimeupdate="updateProgressBar(this.currentTime, this.duration)">     
  Your browser does not support the
  <code>audio</code> element.
</audio>
<input id="playerstation-progress" class="disappearProgress" type="range" value="0" min="0" max="100" step="1"
onclick="editProgress(this.value)" oninput="stopUpdate()"/>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/newsAndCookie.php' ); ?>

<!--modal_cover-->
<div id="modal_cover" style="display:none;"></div>
</body>   
</html>