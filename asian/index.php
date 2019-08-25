<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery.js"></script>
	<script src="bootstraps/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstraps/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="mula/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="mula/css/bootstrap.css">
  <script type="text/javascript" src="jquery.js"></script>
 <script type="text/javascript" src="mula/js/bootstrap.js"></script>

</head>
<body>
	<div class="wrapper"> 
	<!-- navbar -->
<section >
<nav >
	<div id="main" class="container-fluid">
	<div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
    </div>
	<img src="img/logo.jpg" width="154" height="70" >
    <ul >
      <li><a href="index.php">Home</a></li>
      <li class="dropdown">
					<a href="#" data-toggle="dropdown">Article <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="national.php">National Park</a></li>
						<li><a href="conservation.php">Conservation Areas</a></li>
            <li><a href="hunting.php">Hunting Reserves</a></li>
					</ul>
				</li> 
        <li class="dropdown">
					<a href="#"  data-toggle="dropdown">Programs<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="pages/protection.php">Protection acts of government</a></li>
						<li><a href="pages/seminar.php">Conservation Program</a></li>
					</ul>
				</li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="about.php">About</a></li>  
    </ul>
    </div>
</nav>
</section>
<!-- navbar close -->

<!-- home -->
<section class="main-heading1">
       
<div class="overlay">
           
<div class="container">
               
<div class="row">
                   
<div class="main-heading-content col-md-12 col-sm-12 text-center">
  <header>
  	<header class="masthead">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To Wildlife Preservation!</div>
        <h4>Want to add the new species <a href="form.php" style="font-size: 20px; font-weight: bold; font-style: italic;">Go now.</a></h4> 
      </div>
  </header>
  </header>
</div>     
</div>               
</div>           
</div>       
</section>

<!-- image detector -->
<section class="main-heading">
       
<div class="overlay">
           
<div class="container">
               
<div class="row">
                   
<div class="main-heading-content col-md-12 col-sm-12 text-center">
  <?php include("face.php"); ?>


</div>     
</div>               
</div>           
</div>       
</section>
  <!-- home close -->
  <section class="picture">
<div class="overlay">
<div class="container">         
<div class="row">
	<div class="col-sm-7 col-md-7 col-lg-7">
	<?php include("slider.php"); ?>
</div>
<div class="col-sm-5 col-md-5 col-lg-5">
  <br>
  <br>
  <br>
	<h1 style="font-family: arial; font-size: 30px">Wildlife Preservation Nepal</h1>
	<br>
<p style="border:2px; font-size: 15px; border-style:solid; border-color:
#1F890E; padding: 1em;"><span id="dots">Nepal is a small yet geographically highly diverse country located in South Asia. Its territory ranges from altitudes of 60 meters to 8,848 meters above mean sea level within its area of under 150,000 square kilometers....</span><span id="more"> According to the National Biodiversity Strategy, 2002 Nepal encompasses 118 different types of ecosystems. Home to mega-fauna like tigers and the one-horned rhinoceros and the habitat of 11,971 different species of flora, Nepal is one of the most unique nations in the world.</span></p>
<button onclick="myFunction()" id="myBtn" class="btn btn-custom theme_background_color"><p style="color: green;">Read more</p></button>
      </div>

</div>
<div>
<br>
<br>
 <div class="col-lg-4 col-md-4 col-sm-4 col-4">
    <div class="img-fluid thumbnail">
        <a href="img/makalu-barun-national-park.jpg" target="_blank">
          <img src="img/makalu-barun-national-park.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <h1><a href="national.php">Makalu Barun National Park</a></h1>
          </div>
        </a>
      </div>
    </div>

 <div class="col-lg-4 col-md-4 col-sm-4 col-4">
   
      <div class="img-fluid thumbnail">
        <a href="img/gaurishankar conservation area.jpg" target="_blank">
          <img src="img/gaurishankar conservation area.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <h1><a href="conservation.php">Gaurishankar Conservation area</a></h1>
          </div>
        </a>
      </div>
    </div>

<div class="col-lg-4 col-md-4 col-sm-4 col-4">
    <div class="img-fluid thumbnail">
        <a href="img/Dhorpatan-Hunting-Reserve.jpg" target="_blank">
          <img src="img/Dhorpatan-Hunting-Reserve.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <h1><a href="hunting.php">Dhorpatan Hunting Reserve</a></h1>
          </div>
        </a>
      </div>
    </div>

</div>
</div>
</div>




</section>



<section class="pictures">
  <div class="overlay">
  <div class="container">

  <div class="col-sm-5 col-md-5 col-lg-5" id="xyz">

<table border="2" class="table table-border table-hover" style=" width:100%;">

  <h1> Endanger Animal List:</h1>
  <tr>
    
    <th>Endanger Animal</th>
    <th>Total Number</th>
  </tr>

  <tr>
    <td>Red Panda </td>
    <td>1061</td> 
 
  </tr>
   
    <td>Clouded Leopard</td>
    <td>More than 100</td> 
 
  </tr>

    <tr>
    <td>Striped Hyena </td>
    <td>Less than 100</td> 

    <tr>
    <td>Brown bear</td>
    <td>150</td> 
 
  </tr>

  </tr>
    <tr>
    <td>Leopard cat</td>
    <td>350</td> 
 
  </tr>

<tr>
    <td>Eurasian Lynx</td>
    <td>400</td> 
 
  </tr>

<tr>
    <td>Wild Water Buffaalo </td>
    <td>219</td> 
 
  </tr>

<tr>
    <td>Great Tibetan Sheap </td>
    <td>768</td> 
 
  </tr>

  <tr>
    <td>Wild Yak</td>
    <td>836</td> 
 
  </tr>

<tr>
    <td>Gaur Bison/td>
    <td>37</td> 
 
  </tr>

<tr>
    <td>Grey Wolf</td>
    <td>350</td> 
 
  </tr>

  <tr>
    <td>Assamese Monkey</td>
    <td>24</td> 
 
  </tr>

  <tr>
    <td>Four-horned Anteloper</td>
    <td>1825</td> 
 
  </tr>

  <tr>
    <td>Snow Leopard </td>
    <td>350</td> 
 
  </tr>

  <tr>
    <td>One-Horned Rhinoceros </td>
    <td>645</td> 
 
  </tr>

  <tr>
    <td>Swamp Deer </td>
    <td>2300</td> 
 
  </tr>


</table>
</div>
<br>
<br>
<br>
<div class="col-sm-7 col-md-7 col-lg-7" >
  <h1>Endangered Animal Pie Chart </h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Red Panda', 8],
  ['Clouded Leopard', 2],
  ['Snow Leopard', 4],
  ['Assamese Monkey', 4],
  ['One-Horned Rhinoceros', 2],
  ['Great Tibetan Sheap', 8],
  [' wild Water Buffaalo', 2],
  ['Brown bear', 2],
  ['Grey Wolf', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
  
</div>
</div>
</div>
</section>


  

<!-- footer -->
 <footer class="site-footer section-spacing text-center " id="#">                
 <section>	
<div class="container">   
<div class="row">       
     
<div class="col-md-6 center-block col-sm-6 ">
<br>       
<form id="mc-form" style="float: right;">         
<div class="input-group">           
<input type="email" name="email" class="form-control" style="float: right;" placeholder="Email Address" required id="mc-email">          
<span class="input-group-btn" >           
<button type="submit" class="btn btn-default" style="background: #26EF17; color: black">SUBSCRIBE <i class="fa fa-envelope"></i> </button>           
</span> </div>


 </form>
</div>
 </div>
</div>
</section>
  
<div class="container">
    
<div class="row">
      
<div class="col-md-4">
        
<p class="footer-links" style="float: left;"><a href="#">Terms of Use</a></p>
<p class="footer-links" style="float: left;"> <a href="#">Privacy Policy</a></p>
      <br>
      <p class="footer-links"></p>
      <a href="http://www.ctflatfeemlslisting.com"><img alt="flat fee mls" title="flat fee mls" src="http://www.free-credit-card-logos.com/credit_card_logos_visa_mc_amex_discover_paypal_sm.gif" width="254" height="30" border="0" /></a>
</div>
      
<div class="col-md-4"> <small>&copy; Wildlife preservation<a href="#home">ISMT rampage</a> </small></div>
      
<div class="col-md-4"> 
        
<!--social-->
        
        
<ul class="social">
          
<li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter "></i></a></li>
          
<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          
<li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
        
</ul>


        
        
<!--social end--> 
        
      
</div>
    
</div>
  
</div>

</footer>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</body>
</div>
</html>