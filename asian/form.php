<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery.js"></script>
	<script src="bootstraps/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstraps/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">
	<style type="text/css">
		#abc{
			   background: rgba(0,0,0, .6);
			   width: 500px;
    color: white;
    margin-top: 100px;
    padding: 20px;
    box-shadow: 0px 0px 10px 3px grey;
		}
	</style>
</head>
<body>

<section>
<nav >
  <div id="main" class="container-fluid">
  <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
    </div>
  <img src="img/logo.jpg" width="152" height="65" >
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
<section class="main-heading">
       
<div class="overlay">
           
<div class="container">
               
<div class="row">

	<div class="container" id="abc">
	<form action="" method="POST" role="form">
		<legend style="color: white;">Image By User</legend>
		<label>Upload image</label>

	<form action="image.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="image" accept="image/*" class="form-control" value="choose">
                    <br>
                    
                </form>
				<div class="form-group">
			<label for="">Name of image</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">Captured place</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">Description</label>
			<input type="textarea" class="form-control" id="" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">Credit to: </label>
			<input type="text" class="form-control" id="" placeholder="Input field" required>
		</div>
		<button type="button" class="btn btn-default">Send</button>
	</form>
</div>
</div>
</div>
</section>
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
		

		
	</form>
</div>


</body>
</html>