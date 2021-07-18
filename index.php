<?php
?>
<!Doctype html>
<!--
    ____        __    _          ______          
   / __ \____  / /_  (_)___     / ____/___ _____ 
  / /_/ / __ \/ __ \/ / __ \   / / __/ __ `/ __ \
 / _, _/ /_/ / /_/ / / / / /  / /_/ / /_/ / / / /
/_/ |_|\____/_.___/_/_/ /_/   \____/\__,_/_/ /_/ 
                                                 
Thanks for inspecting.|Github @robingan7|Youtube @robin gan                                                                  
-->
<html>
  <head>
    <title>HOME | Robin Gan--甘翔羽 &raquo; Robingan.com</title>
    <meta charset="UTF-8"/>
    <meta property="og:title" content="HOME | Robin Gan--甘翔羽 &raquo; Robingan.com" />
    <meta name="description" content="Robin Gan's home--甘翔羽 Welcome to my portfolio page"/>
    <meta property="og:description" content="Robin Gan's home--甘翔羽 Welcome to my portfolio page" />
    <?php include 'component/headerInfo.php'?>
    <link rel="stylesheet" href="styles/main.css"/>
    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/newsAndCookie.css"/>
    <link rel="stylesheet" href="styles/titleFoldedAnimation.css"/>
    <script src='javascript/js.cookie.js'></script>
    <script src="javascript/newsAndCookieToggle.js" defer></script>
    <script src="javascript/index.js?version=1" defer></script>
    <script src="javascript/indexToggle.js" defer></script>
    <!--<script data-ad-client="ca-pub-8604882353540201" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162844023-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-162844023-1');
    </script>

  </head>
<body>
    <div id="chassis">
        <div class="icons">
            <a href="/bio">
                <i class="fas fa-user-ninja"></i>
            </a>   
            <a href="https://github.com/robingan7/robingan.com">
                <i class="fas fa-code"></i>
            </a>

            <a href="/resume">
                <i class="fas fa-file-alt"></i>
            </a>
            <a href="https://github.com/robingan7">
                <i class="fab fa-github-alt"></i>
            </a>
        </div>    

        <div class="wrapper">
            <a href="/"><h1 data-heading="Robin Gan">Robin Gan</h1></a>
        </div>
        
        <div id="large-id">
            <div class="container" id="navvv" style="width: 150px; right: 10%;">
                <a href="/">
                    <div class="items">
                        <div class="icon-wrapper">
                        <i class="fas fa-registered"></i>
                        </div>
                        <div class="project-name">
                        <p>HOME</p>
                        </div>
                    </div>
                </a>
                <a href="/projects">
                    <div class="items">
                        <div class="icon-wrapper">
                        <i class="fas fa-tools"></i>
                        </div>
                        <div class="project-name">
                        <p>HS Projs</p>
                        </div>
                    </div>
                </a>
                
                <a>
                    <div class="items items-disable">
                        <div class="icon-wrapper">
                        <i class="fas fa-blog"></i>
                        </div>
                        <div class="project-name">
                        <p>Blogs</p>
                        </div>
                    </div> 
                </a>

                <a>
                    <div class="items items-disable">
                        <div class="icon-wrapper">
                        <i class="fas fa-map"></i>
                        </div>
                        <div class="project-name">
                        <p>Story</p>
                        </div>
                    </div> 
                </a>

            </div>
        </div>

        <div id="blog">
            <!--Bio-->
            <div id="container-blog-bio">
                <ul id="blog-icon">
                    <!--<li>
                        <a>
                        <i class="fas fa-smile-wink"></i>
                        <h2 class="disappreadWhenHeightIsLow">Welcome</h2>
                        <span class="blog-icon-title">Welcome</span>
                        </a>
                    </li>-->
                </ul>    
            </div>
            
        </div>    

        <?php include 'component/newsAndCookie.php' ?>
    </div>
    <!--modal_cover-->
    <div id="modal_cover" style="display:none;"></div>

    <!--bottom menu-->
    <nav class="nav" id="bottomMenu">
        <a href="/" class="nav__link nav__link--active">
            <i class="fas fa-registered nav__icon"></i>
            <span class="nav__text">Home</span>
        </a>
        <a href="/projects" class="nav__link">
            <i class="fas fa-tools nav__icon"></i>
            <span class="nav__text">HS Projs</span>
        </a>
        <a class="nav__link items-disable">
            <i class="fas fa-blog nav__icon"></i>
            <span class="nav__text">Blogs</span>
        </a>
        <a class="nav__link items-disable">
            <i class="fas fa-map nav__icon"></i>
            <span class="nav__text">Story</span>
        </a>
    </nav>
</body>
</html>