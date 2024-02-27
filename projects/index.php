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
    <meta property="og:description" content="Robin Gan" />
    <?php include '/component/headerInfo.php'?>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="/styles/main.css"/>
    <link rel="stylesheet" href="/styles/index.css"/>
    <link rel="stylesheet" href="/styles/newsAndCookie.css"/>
    <link rel="stylesheet" href="/styles/titleFoldedAnimation.css"/>
    <script src='/javascript/js.cookie.js'></script>
    <script src="/javascript/newsAndCookieToggle.js" defer></script>
    <script src="/javascript/index.js?version=1" defer></script>
    <script src="/javascript/indexToggle.js" defer></script>
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
        <!--<div class="icons">
            <a href="https://soundcloud.com/robingan">
                <i class="fa-brands fa-soundcloud"></i>
            </a>
            <a href="https://open.spotify.com/artist/7dsKwts1pqLagD1gyHNCjL?si=wmfqLjspQHaTkNCUO2758Q">
                <i class="fa-brands fa-spotify"></i>
            </a>
            
            <a href="https://tiktok.com/@robin.gan">
                <i class="fa-brands fa-tiktok"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCjCP4U38X4g9HG1onRKJxlA">
                <i class="fa-brands fa-youtube"></i>
            </a>
        </div>-->    

        <div class="wrappernew">
            <h1 data-heading="robin gan"><a href="/">Robin Gan</a></h1>
        </div>

        <div id="indexbionew">
            <p>> <a href="https://mathmadness.xyz/">MATHmadness.xyz</a></p>
            <p>> <a href="https://robingan.lnk.to/premathmadness">preMATHmadness</a></p>
        </div>
        
        <!--<div id="large-id">
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
                <a>
                    <div class="items items-disable">
                        <div class="icon-wrapper">
                        <i class="fas fa-tools"></i>
                        </div>
                        <div class="project-name">
                        <p>Projs</p>
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
        </div>-->

        <div id="blog" style="display:none;">
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

    </div>
    <?php include '/component/newsAndCookie.php' ?>

    <!--modal_cover-->
    <div id="modal_cover" style="display:none;"></div>

    <!--bottom menu-->
    <!--<nav class="nav" id="bottomMenu">
        <a href="/" class="nav__link nav__link--active">
            <i class="fas fa-registered nav__icon"></i>
            <span class="nav__text">Home</span>
        </a>
        <a href="/projects" class="nav__link">
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