<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans+Condensed:300|Raleway:300,400" rel="stylesheet"> 
<link href="./src/css/style.css" type="text/css" rel="stylesheet">
<title>Equivalent Exchange</title>
</head>

<body>

<div class="menu" id="top">
  <div id="navbar">
    <a href="#top"><img src="./src/img/logos/logo.png" id="logo"></a>
  <div id="navbar-right">
    <a href="#top">HOME</a>
    <a href="#member">HEADER 1</a>
    <a href="#aboutband">HEADER 2</a>
    <a href="#socialmedia">HEADER 3</a>
  </div>
</div>
</div>

<div class="startimg">
<div class="image-text">
  <img src="./src/img/logos/RUNETOOLOGO.png" alt="Bandcamp">  
  </div>
</div>

<span class="anchor" id="member"></span>
<div class="theband">

<div class="topic">HEADER 1</div>



<div class="row">
  <div class="column">
    <div class="name">
      <img src="./src/img/bandmember/member.png" alt="Julian" style="width:100%">
      <font size="5"> - LOREM - </font> </p> IPSUM
    </div>
  </div>
  <div class="column">
    <div class="name">
      <img src="./src/img/bandmember/member.png" alt="Sergio" style="width:100%">
      <font size="5"> - LOREM - </font> </p> IPSUM
    </div>
  </div>
  <div class="column">
    <div class="name">
      <img src="./src/img/bandmember/member.png" alt="Stefan" style="width:100%">
      <font size="5"> - LOREM - </font> </p> IPSUM
    </div>
  </div>
  
</div>  
</div>

<span class="anchor" id="aboutband"></span>
<div class="weekly">
<div class="topic">LOREM IPSUM</div>

<div class="description">LOREM / IPSUM DOLOR</div> 

<div class="textbox">

Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
<p>
 At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
<p>
<br>
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

</div>
</div>

<span class="anchor" id="socialmedia"></span>
<div class="socialmedia">
<div class="row">
  <div class="column">
  <a href="#" target="_blank">
    <div class="background">
    <div class="text"><img src="./src/img/SocialMedia/twitterlogo.png" alt="Twitter"></div>
    </div>
    </a>
  </div>
  <div class="column">
  <a href="#" target="_blank">
    <div class="background">
    <div class="text"><img src="./src/img/SocialMedia/instalogo.png" alt="Instagram"></div>
    </div>
    </a>
  </div>
  <div class="column">
  <a href="#" target="_blank">
    <div class="background">
    <div class="text"><img src="./src/img/SocialMedia/fbooklogo.png" alt="Facebook"></div>
    </div>
    </a>
  </div>
  <div class="column">
  <a href="#" target="_blank">
    <div class="background">
    <div class="text"><img src="./src/img/SocialMedia/ytlogo.png" alt="YouTube"></div>
    </div>
    </a>  
  </div>
</div>
</div>

<div class="lastpic"></div>

<div class="footer">
©LOREM IPSUM 2020, Website made by <a href="https://www.instagram.com/naros_arts/" target="_blank">Naros Arts</a> | <a href="./impressum.php">Impressum</a> | <a href="./datenschutz.php">Datenschutz</a>
</div>




<script>
window.onscroll = function() {scrollFunction()};
//function, to make the menubar transparent after scrolling
function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "5px 10px";
    document.getElementById("navbar").style.background = "rgba(31, 31, 31, 0.5)";
    document.getElementById("logo").style.height = "60px";
  } else {
    document.getElementById("navbar").style.padding = "15px 10px";
    document.getElementById("navbar").style.background = "rgba(255, 255, 255, 0.0)";
    document.getElementById("logo").style.height = "80px";
  }
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) { 
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>


</body>
</html>