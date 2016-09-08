<!DOCTYPE html>
<html>
<title>Qingyu Presents</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" -->
<link rel="stylesheet" type="text/css" href="css/w3.css">
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
.bgimg-1, .bgimg-2, .bgimg-3 {
    opacity: 1;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('img_parallax1.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("img2.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("img_parallax1.jpg");
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
    .bgimg-1, .bgimg-2, .bgimg-3 {
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
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">QINGYU PRESENTS</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ME</h3>
<!--   <p class="w3-center"><em>I love programming</em></p>
 -->  <p>
    Hello, I am Qingyu Wang, a computer science major student at UC Berkeley. I will be graduating at the end of year 2016. It is my last semaster here at UC Berkeley and I enjoy studying and living here. I like to do some Android app development and Web application when I have time. Also, I would use CAD to build some cool 3D printable projects. There are some of my works down below. I hope you would like them.

  </p>
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-light-grey w3-wide">APPLICATIONS</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">SUN SAFE</h3>
  <p class="w3-left">Sun Safe! is a fun and simple application for parents and their children. Many children often forget to reapply after their sunscreen has
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

    <div class = "w3-center">
<iframe class="w3-center" width="840" height="472.5" class="youtube" src="https://www.youtube.com/embed/nqj1Vs7L84k" frameborder="0" allowfullscreen></iframe>
</div>

<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">DOTA2 ASSISTANT</h3>
  <p class="w3-center"><em>Updating...</em></p>
</div>




<div class="bgimg-2 w3-display-container">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-light-grey w3-wide">3D MODELING AND ANIMATION</span>
  </div>
</div>

<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">FOLDS</h3>
  <p class="w3-center"><em>Folds is a short animation about a girl who falls asleep and finds that her origami has taken a turn for the fantastic.

 </em></p>

    <div class = "w3-center">
<iframe class="w3-center" width="840" height="472.5" class="youtube" src="https://www.youtube.com/embed/J92yjpiSMFk" frameborder="0" allowfullscreen></iframe>
</div>



</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-hover-red w3-text-white w3-xxxlarge w3-container w3-display-topright">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" style="max-width:100%">
  </div>
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-hover-black">

<div class="w3-content w3-container w3-padding-64">

  <p class = "w3-center">Contact Info:</p>
  <p class="w3-center" ><em>qywang@berkeley.edu</em></p>
  <p class="w3-center" >(510)-693-7629</p>
</div>
</footer>
 
<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

function initialize() {
var mapProp = {
  center: myCenter,
  zoom: 12,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}

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

