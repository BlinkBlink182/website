<!DOCTYPE html>
<html>
<title>Qingyu Presents</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" -->
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/css.css">
<link rel="stylesheet" type="text/css" href="css/css.css">

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-profile, .bgimg-web, .bgimg-android, .bgimg-3d, .bgimg-music, .bgimg-machine{
    opacity: 1;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-profile {
    background-image: url('img_profile.jpg');
    min-height: 100%;
}

.bgimg-web {
    background-image: url("img_web.jpg");
    min-height: 400px;
}

.bgimg-android {
    background-image: url("img_android.jpg");
    min-height: 400px;
}

.bgimg-3d {
    background-image: url("img_3d.jpg");
    min-height: 400px;
}

.bgimg-music {
    background-image: url("hd800.jpg");
    min-height: 400px;
}

.bgimg-machine {
    background-image: url("img_machine.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

#googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%);
}

/* Turn off parallax scrolling for tablets and mobiles */
@media only screen and (max-width: 1024px) {
    .bgimg-profile, .bgimg-web, .bgimg-android, .bgimg-3d, .bgimg-music, .bgimg-machine{
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar" id="myNavbar">
    <li><a href="#" class="w3-padding-large">HOME</a></li>
    <li class="w3-hide-small w3-right">
      <a href="#" class="w3-padding-large w3-hover-red"><i class="fa fa-search"></i></a>
    </li>
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-profile w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">QINGYU PRESENTS</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ME</h3>
    <hr>

<!--   <p class="w3-center"><em>I love programming</em></p>
 -->  <p>
    Hello, I am Qingyu Wang and I have graduated from UC Berkeley with CS major last year. Throughout my years at Berkeley I have met a lot of new friends and improved my understanding on a variety of different subjects. The college life was undoubtedly enjoyable and valuable to me. </p>
    <p> During the past few years, I developed my technical skills in object oriented programming languages such as Java, Python, and JavaScript. I also have solid background knowledge in data science, computer security, and user interface. I like to do some Android app development and Web application when I have time. Also, I would use CAD to build some cool 3D printable projects. There are some of my works down below. I hope you would like them.</p>    <p>You may contact me via the information below:</p>

    <p class = "w3-center"><b>Phone:</b> (510) 693-7629</p>
    <p class = "w3-center"><b>Email:</b> qywang@berkeley.edu</p>
    <p class = "w3-center"><a href="mailto:qywang@berkeley.edu?Subject=Hello%20Qingyu" target="_top"><b>Click here to send me an Email</b></a></p>

  </p>
  </div>
</div>

<div class="bgimg-web w3-display-container">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-light-grey w3-wide">WEB APPLICATIONS</span>
  </div>
</div>

<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">AT RISK</h3>
  <hr>

  <h4>Project Overview:</h4>
  <p>AtRisk is a Ruby on Rails web application developed by a group of Cal students for the City of Orinda Police Department. In an effort to assist the community with any individual who has the potential to walk away from their home or care facility, we have created a online database to assist law enforcement in the event this were to occur. The forms ask very comprehensive questions law enforcement needs to assist them in the immediate search of a missing person. The forms also allow the users to upload photographs. The user will be provide the most recent photograph when completing the form. After a simple login process, the user can select the appropriate form and answer the questions which are all voluntary. </p>
  
  <h4>Features for general users:</h4>

  <ul>
  <li>submit new forms for AtRisk individuals</li>
  <li>edit or remove self-submitted forms</li>
  <li>download form(s) as PFD file</li>
  <li>send forms to Orinda Police Department</li>
  <li>view AtRisk FAQ section</li>
  </ul>


  <h4>Features for site administrators:</h4>

  <ul>
  <li>manage all forms in database</li>
  <li>manage existing users</li>
  <li>edit AtRisk FAQ section</li>
  <li>all features for general users</li>
  </ul>

  <p class = "w3-center"><a href="https://at-risk.herokuapp.com" target="_blank"><b>Click here to view the App</b></a></p>


  <p class="w3-center"><em>Scratches of the App</em></p>
    <div class="w3-col m6">
      <img src="atrisk/p1.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>

    <div class="w3-col m6">
      <img src="atrisk/p2.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>

    <div class="w3-col m6">
      <img src="atrisk/p3.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>

    <div class="w3-col m6">
      <img src="atrisk/p4.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>

  <p class="w3-center"><em>Group Presentation</em></p>

    <div class="w3-col m12">
      <img src="atrisk/representation.jpg" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>

    <div class="w3-col m12">
      <img src="atrisk/representation2.jpg" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>

  </div>

  
<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-android w3-display-container">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-light-grey w3-wide">ANDROID APPLICATIONS</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">SUN SAFE</h3>
    <hr>

  <p>Sun Safe! is a fun and simple application for parents and their children. Many children often forget to reapply after their sunscreen has
worn off, which is detrimental to their skin. Sun
Safe! will guide both the parent and child to
better protect their skin.</p>
<p>The app is customized for users based on
allergies and skin conditions. Afterwards, the
parent (with the phone) is able to set a timer to
notify them and their child (with the watch)
when to reapply sunscreen. The app also
provides features such as viewing detailed
weather and health information, such as
temperature, UV index, and common skin
diseases. <br>  </p>
  <p class="w3-center"><em>Scratches of the App</em></p>

    <div class="w3-col m6">
      <img src="sunsafe/p1.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>

    <div class="w3-col m6">
      <img src="sunsafe/p2.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>


  <p class="w3-center"><em>User Interface of the Mobile and Wearble App</em></p>


    <div class="w3-col m6">
      <img src="sunsafe/p4.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>


    <div class="w3-col m6">
      <img src="sunsafe/p5.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>



    <div class="w3-col m6">
      <img src="sunsafe/p6.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>


    <div class="w3-col m6">
      <img src="sunsafe/p7.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>


  </div>

  <p class="w3-center"><em>Video Demo</em></p>



    <div class = "w3-center">
<iframe class="w3-center" width="840" height="472.5" class="youtube" src="https://www.youtube.com/embed/nqj1Vs7L84k" frameborder="0" allowfullscreen></iframe>
</div>

<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">REPRESENTS</h3>
    <hr>

  <p>Represents helps Americans find and learn more about their congressional representatives. Either provide your zip code, or use your current location, and we'll locate all your senators and representatives. We'll give you several ways to contact them, their latest tweet, and a detailed view for each person including committees they serve on and bills they have sponsored. Furthermore, the watch component provides a clean interface for scrolling through your representatives and getting the 2012 elections data from your local district!</p>

  <p class="w3-center"><em>Mobile App Design</em></p>



    <div class="w3-col m4">
      <img src="represent/1.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>
    <div class="w3-col m4">
      <img src="represent/2.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>
    <div class="w3-col m4">
      <img src="represent/3.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>


  <p class="w3-center"><em>Wearable App Design</em></p>



    <div class="w3-col m4">
      <img src="represent/4.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>
    <div class="w3-col m4">
      <img src="represent/5.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>
    <div class="w3-col m4">
      <img src="represent/6.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>

</div>


  <p class="w3-center"><em>Video Demo</em></p>



    <div class = "w3-center">
<iframe class="w3-center" width="840" height="472.5" class="youtube" src="https://www.youtube.com/embed/Y2kpcxEXQNU" frameborder="0" allowfullscreen></iframe>
</div>



<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">DOTA2 ASSISTANT</h3>
  <hr>
  <p>Dota2 Assistant is an android application that allows users to review their gaming data for their recent matches. The application fetches data from the Valve API based on the gaming ID user has entered and will also provide some suggestions to the users on improving their playstyle.</p>

  <p class = "w3-center"><a href="https://play.google.com/store/apps/details?id=us.qywang.dotaboost&hl=en" target="_blank"><b>Download the App from Google Play</b></a></p>


  <p class="w3-center"><em>App Design</em></p>
    


    <div class="w3-col m4">
      <img src="dota/unnamed.webp" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>
    <div class="w3-col m4">
      <img src="dota/unnamed2.webp" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>
    <div class="w3-col m4">
      <img src="dota/unnamed1.webp" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>


</div>


<div class="bgimg-3d w3-display-container">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-light-grey w3-wide">3D MODELING AND ANIMATION</span>
  </div>
</div>



<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">FOLDS</h3>
  <hr>
  <p class="w3-center">Folds is a short animation about a girl who falls asleep and finds that her origami has taken a turn for the fantastic.</p>
  <p class="w3-center"><em>Video Demo</em></p>

    <div class = "w3-center">
<iframe class="w3-center" width="840" height="472.5" class="youtube" src="https://www.youtube.com/embed/J92yjpiSMFk" frameborder="0" allowfullscreen></iframe>
</div>

</div>

<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">BATTLE FURY</h3>
    <hr>
  <p class="w3-center">Battle fury is a 3d printed item. The concept came from the game Dota2.</p>
  <p class="w3-center"><em>Prototype</em></p>

    <div class="w3-col m12">
      <img src="bf/p3.jpeg" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>

    <div class="w3-col m12">
      <img src="bf/p1.jpeg" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>

</div>

<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">R2D2</h3>
    <hr>
  <p class="w3-center">R2D2 is a 3d designed model. The concept came from the movie Star Wars.</p>
  <p class="w3-center"><em>3d model</em></p>

    <div class="w3-col m12">
      <img src="r2d2/p1.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>

    <div class="w3-col m12">
      <img src="r2d2/p3.png" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>

</div>


<div class="bgimg-music w3-display-container">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-light-grey w3-wide">MUSIC APPLICATION</span>
  </div>
</div>

<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">GUITAR SIMULATOR</h3>
  <hr>
  <p class="w3-center">Guitar simulator is a Max application that will simulate sound of a guitar. The user may use the keyboard to select different fret or string. The user can also add and play whichever chord he or she wants to.</p>

  <p class="w3-center"><em>App Design</em></p>

    <div class="w3-col m12">
      <img src="guitar/1.jpg" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>
    <div class="w3-col m12">
      <img src="guitar/2.jpg" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>
    <div class="w3-col m12">
      <img src="guitar/3.jpg" style="width:100%; margin-top:15px; margin-bottom:15px;">
    </div>


  <p class="w3-center"><em>Video Demo</em></p>

  <div class = "w3-center">
    <iframe class="w3-center" width="840" height="472.5" class="youtube" src="https://www.youtube.com/embed/gMQjajkKtCQ" frameborder="0" allowfullscreen></iframe>
  </div>
</div>

<div class="bgimg-machine w3-display-container">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-light-grey w3-wide">MECHANICAL DESIGN</span>
  </div>
</div>

<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">SELF-DRIVING ALL TERRAIN VEHICLE</h3>
  <hr>
  <p class="w3-center">Self-Driving all terrain vehicle is a bot that will drive itself along the table without falling down. The vehicle is driven by two 9v motor and carrys two ultrasonic sensor that returns the signal to the motherboard. The bot will perform different reaction based on the different signals it receives. </p>

  <p class="w3-center"><em>Video Demo</em></p>

  <div class = "w3-center">
    <iframe class="w3-center" width="840" height="472.5" class="youtube" src="https://www.youtube.com/embed/4_fURNQNRy8" frameborder="0" allowfullscreen></iframe>
  </div>

</div>


<!-- Footer -->
<footer class="blog-footer">

  <p class="w3-center" >Contact Info:</p>
  <p>Email: <a href="mailto:qywang@berkeley.edu?Subject=Hello%20Qingyu" target="_top">qywang@berkeley.edu</a></p>
  <p>Phone: (510) 693-7629</p>
<!--   <hr>
  <br>
  <p class = "w3-center">Copyright © 2017 Qingyu Presents.</p>
  <p class = "w3-center">All rights reserved.</p> -->

</footer>
 
<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}
</script>

</body>
</html>

