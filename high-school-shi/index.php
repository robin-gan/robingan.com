<?php
?>
<!Doctype html>
<!--
    ____        __    _          ______          
   / __ \____  / /_  (_)___     / ____/___ _____ 
  / /_/ / __ \/ __ \/ / __ \   / / __/ __ `/ __ \
 / _, _/ /_/ / /_/ / / / / /  / /_/ / /_/ / / / /
/_/ |_|\____/_.___/_/_/ /_/   \____/\__,_/_/ /_/ 
                                                 
Github @robin-gan                                                                  
-->
<html>
  <head>
    <title>Robin Gan</title>
    <meta charset="UTF-8"/>
    <meta property="og:title" content="Robin Gan" />
    <meta name="description" content="Robin Gan"/>
    <meta property="og:description" content="Robin Gan"/>
    <?php include '../component/headerInfo.php'?>
    <link rel="stylesheet" href="../styles/main.css"/>
    <link rel="stylesheet" href="../styles/projects.css?version=1"/>
    <link rel="stylesheet" href="../styles/newsAndCookie.css"/>
    <link rel="stylesheet" href="../styles/menu.css"/>
    <link rel="stylesheet" href="../devicons/css/devicons.min.css"/>
    <link rel="stylesheet" href="../styles/titleFoldedAnimation.css"/>
    <link rel="stylesheet" href="/styles/descPage.css?<?php echo time(); ?>"/>
    <script src='../javascript/thanksForReading.js'></script>
    <script src='../javascript/js.cookie.js'></script>
    <script src="../javascript/indexToggle.js" defer></script>
    <script src="../javascript/newsAndCookieToggle.js" defer></script>
    <script src="../javascript/titleFolded.js" defer></script>
    <script src="../javascript/projects.js?<?php echo time(); ?>" defer></script>
  </head>

<body>
    <!--menu and cookie-->    
    <?php 
    include '../component/menu.php';
    include '../component/newsAndCookie.php';
    ?>

    <!--project display page-->
    <div id="content">
        
    </div>

    <!--project des page
    class="projectPageAppear"-->
    <div id="projectDesPage" class="desContentFormat projectPageAppear">
        
    </div>
    <!--modal_cover-->
    <div id="modal_cover" style="display:none;"></div>

    <!--bottom menu-->
    <!--<nav class="nav" id="bottomMenu">
        <a href="/" class="nav__link">
            <i class="fas fa-registered nav__icon"></i>
            <span class="nav__text">Home</span>
        </a>
        <a href="/projects" class="nav__link nav__link--active">
            <i class="fas fa-tools nav__icon"></i>
            <span class="nav__text">Projs</span>
        </a>
        <a class="nav__link items-disable">
            <i class="fas fa-blog nav__icon"></i>
            <span class="nav__text">Blogs</span>
        </a>
        <a class="nav__link items-disable">
            <i class="fas fa-map nav__icon"></i>
            <span class="nav__text">Story</span>
        </a>
    </nav>-->
</body>
</html>