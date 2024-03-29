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
    <meta property="og:title" content="Robin Gan" />
    <meta charset="UTF-8"/>
    <meta name="description" content="Page not found  "/>
    <meta property="og:description" content="Page not found  "/>
    <?php include 'component/headerInfo.php'?>
    <link rel="stylesheet" href="/styles/main.css"/>
    <link rel="stylesheet" href="/styles/404.css"/>
    <link rel="stylesheet" href="/styles/menu.css"/>
    <link rel="stylesheet" href="/styles/newsAndCookie.css"/>
    <link rel="stylesheet" href="/styles/titleFoldedAnimation.css"/>
    <script src='/javascript/js.cookie.js'></script>
    <script src="/javascript/indexToggle.js" defer></script>
    <script src="/javascript/newsAndCookieToggle.js" defer></script>
    <script src="/javascript/titleFolded.js" defer></script>
  </head>

<body>
  
<?php include 'component/menu.php'; ?>
<?php include 'component/newsAndCookie.php' ?>

<div class="glitch-wrapper">
  <div class="glitch" data-text="404 PAGE NOT FOUND">404 PAGE NOT FOUND</div>
</div>

<!--modal_cover-->
<div id="modal_cover" style="display:none;"></div>
</body>   
</html>