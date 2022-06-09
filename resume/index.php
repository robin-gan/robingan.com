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
    <title>Resume | Robin Gan &raquo; Robingan.com</title>
    <meta charset="UTF-8"/>
    <meta property="og:title" content="Resume | Robin Gan &raquo; Robingan.com" />
    <meta name="description" content="Robin Gan's resume  Welcome to my portfolio page"/>
    <meta property="og:description" content="Robin Gan's resume  Welcome to my portfolio page"/>
    <?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/headerInfo.php' ); ?>
    <link rel="stylesheet" href="/styles/main.css"/>
    <link rel="stylesheet" href="/styles/newsAndCookie.css?version=123"/>
    <link rel="stylesheet" href="/styles/menu.css"/>
    <link rel="stylesheet" href="/styles/descPage.css?<?php echo time(); ?>"/>
    <link rel="stylesheet" href="/styles/resume.css?version=123"/>
    <script src='/javascript/js.cookie.js'></script>
    <script src="/javascript/indexToggle.js" defer></script>
    <script src="/javascript/titleFolded.js" defer></script>
    <script src="/javascript/resume.js" defer></script>

    <style>
      #progressBar {
        display:none;
      }
    </style>
  </head>
<body>
  
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/menu.php' ); ?>

<div id="content" class="desContentFormat">
  <!--H2 is absent due to the project title in project page-->
	<section id="left">
        <h3>Education</h3>

        <h4><a href="https://www.washington.edu">University of Washington, Seattle</a><span>Graduating 2024</span></h4>
        <ul>
          <li>B.S. Computer Science</li>
        </ul>

        <h4><a href="https://www.smhs.org/">Santa Margarita HS</a><span>2018 - 2021</span></h4>
        
        <h3 class="sectionBreaker">Experience</h3>

        <h4><a href="https://www.huskyrobotics.me">Husky Robotics</a> &mdash; Software Developer<span>2021.10 - present</span><span><a href="https://github.com/huskyroboticsteam/tracking-antenna">code</a></span></h4>
        <ul>
          <li>Implemented differential GNSS and RTK algorithms in C++ that improved accuracy of GPS location</li>
          <li>Developed algorithms to calculate offset angle for tracking antenna from longitude, latitude and altitude</li>
        </ul>

        <h4><a href="http://www.alejorico.com/Ecophysics_Lab.html">Behavioral Ecophysics Lab</a> &mdash; Undergraduate Researcher<span>2021.10 - 2022.3</span><span><a href="https://github.com/robin-gan/Tracking-Hummingbirds">code</a></span></h4>
        <ul>
          <li>Tracked hummingbirds coordinates on low-resolution videos with OpenCV in Python</li>
          <li>Designed algorithms that filtered valid birds trajectories from background noise such as trees, snow, rain, etc</li>
        </ul>

        <h4><a href="https://apps.apple.com/us/app/meechu-classmates-chat/id1548409920">Meechu</a> &mdash; Software Engineer Internship<span>2021.2 - 2021.5</span></h4>
        <ul>
          <li>Lead the web application project, and developed full stack with React.js</li>
          <li>Built mobile phone UI of course-info and chat-image-preview pages with Flutter</li>
          <li>Implemented Firebase API and built profile-editing, log-in and log-out features</li>
        </ul>

        <h4><a href="https://www.continum.com">MREN</a> &mdash; Software Engineer Internship<span>2020.11 - 2021.2</span></h4>
        <ul>
          <li>Developed full stack and designed clean UI and built with Material-UI and React.js</li>
          <li>Built the administration management system, including algorithms for owners and admins of the workspaces to efficiently manage team members</li>
          <li>Built real-time features with Day.js API time computation that checked the validity of workspaces invitation links with real-time front-end responses</li>
        </ul>

        <h3 class="sectionBreaker">Projects</h3>

        <h4><a href="https://coronaware.robingan.com/old">CoronAware</a> &mdash; Software Developer<span>2020 - 2021</span><span><a href="https://github.com/robin-gan/coronaware.net">code</a></span></h4>
        <ul>
          <li>Designed and built clean front-end UI with Materialize framework, and implemented AI regression models including CNN, LMTQ, GRU for total cases number prediction with brain.js API</li>
          <li>Applied tables, pie and line graphs from Chart.js API that showed growth of COVID cases for 400+ users</li>
          <li>Processed and cleaned big data and performed case growth analysis with Pandas, and Spark</li>
        </ul>

        <h4><a href="/projects/#FRC_2020_Public">FIRST Robotics 5805</a> &mdash; Software Lead<span>2018 - 2021</span><span><a href="https://github.com/robin-gan/FRC-2020-Public">code</a></span></h4>
        <ul>
          <li>Developed pathfinder (pure pursuit) algorithms in Java that improved the total autonomous points by 200%</li>
          <li>Built aiming automation with real-time vision tracking and PID and motion profile algorithms</li>
          <li>Built AI model with OpenCV and YOLOv3 in Python that detected game objects on the field real-time</li>
          <li>Build <a href="http://team5805.robingan.com/">team website</a> & <a href="http://u880691907-robingan-org.hostingerapp.com/">socuting system</a> & <a href="http://5805docs.robingan.com/">reference site</a></li>
          <li>Host <a href="http://5805docs.robingan.com/#workshops">workshops</a> on robtoics programming</li>
        </ul>

        <h4><a href="http://seeyourschedule.robingan.com">See Your Schedule</a> &mdash; Full Stack Developer<span>2019 - 2021</span><span><a href="https://github.com/robin-gan/seeyourschedule.com">code</a></span></h4>
        <ul>
          <li>Built with Angular.js</li>
          <li>Help new students to learn our complicated block schedule</li>
          <li>Display personal schedule for each student for the entire school year</li>
        </ul>

        <h4><a href="https://courseplanner-com.herokuapp.com/">Course Planner</a> &mdash; Full Stack Developer<span>2019 - 2021</span><span><a href="https://github.com/robin-gan/course-planner.com">code</a></span></h4>
        <ul>
          <li>Implemented MongoDB, designed and built efficient algorithms that organize, edit, and schedule lessons</li>
          <li>Reduced the time on scheduling and changing classes for different schedules of my teacher by 50%</li>
          <li>Built with Node.js, React.js, and Google API for quick login</li>
        </ul>

        <h4><a href="http://u880691907-robingan-org.hostingerapp.com/">Scope</a> &mdash; Full Stack Developer<span>2019 - 2021</span><span><a href="https://github.com/robin-gan/Scope">code</a></span></h4>
        <ul>
            <!--<li>This is the project that makes me realize that I can't do all the work by myself. After hours and hours of effort, I finally could not handle all the code and everything became messy, so I had to stop the project</li>-->
            <li>Built with Angular.js</li>
            <li>First <abbr>FRC</abbr> online scouting app for all teams</li>
            <li>Contains customizable features for each team</li>
        </ul>

        <!--<h4><a href="https://github.com/robin-gan/FRC-2020-Public">Pure Pursuit Robotics Autonomous</a> &mdash; Software Developer<span>2019 - 2021</span><span><a href="https://github.com/robin-gan/FRC-2020-Template">code</a></span></h4>
        <ul>
          <li>Leading programming topics in <abbr>FRC</abbr> contest</li>
          <li>Aiming for autonomous awards in 2020</li>
          <li>Using <abbr>pathfinder</abbr> and <abbr>pure pursuit</abbr> algorithms to build efficient robot auton motion</li>
        </ul>-->

        <h4><a href="/projects/#Google_Science_Fair_2018">CNN Trash Sorter</a> &mdash; Software Developer<span>2018</span><span><a href="https://github.com/robin-gan/TrashSort">code</a></span></h4>
        <ul>
          <li>Built and trained AI model (CNN) with Tensorflow API in Python that distinguished between recyclable and non-recyclable trash from images, and achieved 98% of accuracy</li>
        </ul>

        <!--<h3 class="sectionBreaker">Leadership</h3>-->

        <h4><a href="http://smtec.000webhostapp.com/">Technology Empowerment Club</a> &mdash; President<span>2018 - 2021</span></h4>
        <ul>
          <li>Lead Programmer & President for 3 years</li>
          <li>Workshops on website programming and basic CS concepts for beginners</li>
        </ul>
    </section>

	<section id="right">
    <h3>Skills</h3>
    <ul>
      <li>Languages: C++, Python, Java, Javascript, TypeScript, CSS, PHP, Dart</li>
      <li>Tools: Angular.js, React.js, Node.js, Flutter, Pandas, Spark, NumPy, Tensorflow, OpenCV</li>
      <li>Database: MongoDB, SQL</li>
    </ul>

    <h3 class="sectionBreaker">Awards</h3>
    <h4><a href="http://www.acsl.org/">American Computer Science League</a><span>2019 - 2021</span><span><a href="https://github.com/robin-gan/EvalAI-ngx">code</a></span></h4>
    <ul>
      <li>2nd place in CA<span>2019</span></li>
      <li>28th place in US<span>2019</span></li>
      <li>3rd place in CA<span>2020</span></li>
      <li>15th place in US<span>2020</span></li>
    </ul>

    <h4><a href="https://codein.withgoogle.com/">Google Code-in</a><span>2018 - 2019</span></h4>
    <ul>
      <li>top 15 in <a href="https://codein.withgoogle.com/archive/2018/organization/6209824106741760/">wikimedia section</a><span>2018</span><span><a href="https://github.com/robin-gan/ACSL">code</a></span></li>
      <li>made contribution to <a href="https://cloudcv.org/">CloudCV</a>'s <a href="https://evalai.cloudcv.org/">EvalAI project</a><span>2019</span><span><a href="https://github.com/robin-gan/ACSL">code</a></span></li>
      <li>the contest was not hosted for 2020<span>2020</span></li>
    </ul>

    <h4><a href="https://www.firstinspires.org/robotics/frc">First Robotics Competition</a><span>2019 - 2021</span></h4>
    <ul>
      <li>Finalist in <a href="https://www.thebluealliance.com/event/2019caoc">OC Regional</a><span>2019</span></li>
      <li>Quarter-Finalist in <a href="https://www.thebluealliance.com/event/2019caln">Los Angeles North Regional</a><span>2019</span></li>
      <li>Quarter-Finalist in <a href="https://www.thebluealliance.com/event/2020cadm">Del Mar Regional</a><span>2020</span></li>
    </ul>

    <h4><a href="https://codingcompetitions.withgoogle.com/codejam">Google Code Jam</a><span>2019 - 2021</span></h4>
    <ul>
      <li>6097th/35600 place in <a href="https://codingcompetitions.withgoogle.com/codejam/round/0000000000051705">Qualification Round</a><span>2019</span></li>
      <li>7350th/44500 place in <a href="https://codingcompetitions.withgoogle.com/codejam/round/000000000019fd27">Qualification Round</a><span>2020</span></li>
      <li>5171th/10300 place in <a href="https://codingcompetitions.withgoogle.com/codejam/round/000000000019fef2">Round 1B</a><span>2020</span></li>
    </ul>

    <h3 class="sectionBreaker">Other Things I built<br/><small>(for fun)</small></h3>
    <h4><a href="">Arduino LED Control</a><span>2019</span><span><a href="https://www.youtube.com/watch?v=kvAwRCbZrN4">video</a></span></h4>
    <ul>
      <li>Make connection between <abbr>Roborio</abbr> and <abbr>Arduino</abbr></li>
      <li>Give driver signal during FRC match</li>
    </ul>
    
    <h4><a href="/projects/#Python_Space_Invader">Python Space Invader</a><span>2018</span><span><a href="https://github.com/robin-gan/AP-CS/blob/master/pythongame.py">code</a></span></h4>
    <ul>
      <li>a fun local game can be played simply by copying and running the code in <a href="https://jupyter.org/">jupyter notebook</a></li>
      <li>I wrote this game in one day just for fun and practicing with python graphics and UI</li>
    </ul>

    <h4><a href="http://dailypython.ml/">Daily Python<small>(DEPRECATED)</small></a><span>2018</span><span><a href="https://github.com/robin-gan/dailypython.ml">code</a></span></h4>
    <ul>
      <li>Teach students basic concepts in <abbr>python</abbr></li>
      <li>Stopped because concepts overlapped with many other videos</li>
    </ul>

  </section>
</div>

<?php include( $_SERVER['DOCUMENT_ROOT'] . '/component/newsAndCookie.php' ); ?>

<!--modal_cover-->
<div id="modal_cover" style="display:none;"></div>
</body>   
</html>