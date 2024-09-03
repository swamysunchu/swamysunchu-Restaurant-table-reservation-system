<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>TableGuru</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <style>
 /* Navigation bar styling */
 .navbar {
      background-color: #333;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
    }

    .navbar-brand {
      font-size: 30px;
      font-weight: bold;
    }

    .navbar-links {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 10px;
    }

    .navbar-link {
      color: #fff;
      text-decoration: none;
      font-size: 16px;
    }

    .navbar-link:hover {
      color: #ff00ff;
    }

    .navbar-button {
      background-color: #ff00ff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      text-decoration: none;
    }

    .navbar-button:hover {
      background-color: #fff;
      color: #ff00ff;
    }

    /* Move navbar-links to the right side */
    .navbar-links {
      margin-left:auto;
    }

    .navbar .dropdown {
      float: right;
      overflow: hidden;
    }

    .navbar .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .navbar .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .navbar .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .navbar .dropdown-content a:hover {
      background-color: #ddd;
    }

    .navbar .dropdown:hover .dropdown-content {
      display: block;
    }

      /* Slideshow container */
      .slideshow-container {
       
          position: relative;
          max-width: 100%;
          margin: auto;
      }

      /* Hide the images by default */
      .mySlides {
          display:none;
      }

      /* Styling for the slideshow navigation dots */
      .dot {
          height: 10px;
          width: 10px;
          margin: 5px 5px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
      }

      .active {
          background-color: #717171;
      }

    .image-container {
      display: flex;
      overflow-x: scroll;
      scroll-behavior: smooth;
      padding: 20px;
    }

    .image-container img {
      margin-right: 10px;
      width: 300px;
      height: 150px;
      border-radius: 5px;
      transition: transform 0.3s;
    }

    .image-container img:hover {
      transform: scale(1.1);
    }

    .image-container a {
      text-decoration: none;
      color: #000;
    }
.ab{
	animation: scroll 10s linear infinite;

}
/*css for footer*/

.footer {
    padding: 40px 0;
    background-color: #5d076c;
}

.social-items {
    color: #fff;
    text-align: center;
}

.social-items a {
    color: #fff;
    width: 40px;
    height: 40px;
    margin: 1rem;
    opacity: 0.8;
    line-height: 38px;
    font-size: 1.4rem;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    border: 1.4px solid #ccc;
}

.social-items a:hover {
    opacity: 1;
}

.list {
    padding: 0;
    margin-top: 0;
    font-size: 18px;
    line-height: 1.6;
    list-style: none;
    margin-bottom: 0;
    text-align: center;
}

.list a {
    opacity: 0.8;
    color: #fff;
    text-decoration: none;
}

.list li {
    padding: 0 15px;
    display: inline-block;
}

.list a:hover {
    opacity: 1;
}

.copyright {
    font-size: 14px;
    margin-top: 15px;
    text-align: center;
    color: rgb(245, 243, 243);
}
  </style>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="navbar-brand">TableGuru</div>
      <ul class="navbar-links">
        <li><a class="navbar-link" href="home1.html">Home</a></li>
        <li><a class="navbar-link" href="about.html">About</a></li>
        <li><a class="navbar-link" href="contactus.html">Contact us</a></li>
      </ul>&emsp;
      <div class="dropdown">
        <button class="dropbtn"><i class="fa fa-user"></i> <span class="username"><?php echo $_SESSION['username']; ?></span>
        </button>
        <div class="dropdown-content">
          <a href="home.html">Sign Out</a>
        </div>
      </div>
    </nav>
  </header>

<!-- Slideshow container -->
<br><br><br>
<div class="slideshow-container">
	<!-- Slides -->
	<div class="mySlides">
		<img src="offer1.jpg" width="500" height="150"alt="Image 1">
	</div>
  
	<div class="mySlides">
		<img src="offer2.jpg" width="500" height="150" alt="Image 2">
	</div>
  
	<div class="mySlides">
		<img src="offer3.jpg" width="500" height="150" alt="Image 3">
	</div>
  
	
  
	<!-- Navigation dots -->
	<div style="text-align: left;">
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
		

	</div>
  </div>
  
  <script>
	// JavaScript code for slideshow functionality
	var slideIndex = 0;
	showSlides();
  
	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex > slides.length) {
			slideIndex = 1;
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].className += " active";
		setTimeout(showSlides, 2000); // Change slide every 2 seconds (2000 milliseconds)
	}
  </script>

  <div class="image-container animate">
    <a href="platform65.html">
      <img src="platform65.jpg" alt="Platform 65 ">
      <p>Platform 65</p>
      </a>
    <a href="pistahouse.html">
      <img src="pistahouse.jpg.png" alt="pista house">
      <p>pista house</p>
    </a>
    <a href="airportbawachi.html">
      <img src="airportbawarchi.jpg" alt="Airport bawachi">
      <p>airport bawachi</p>
    </a>
    <a href="paradise.html">
      <img src="Paradise.jpg" alt="paradise">
      <p>Paradise</p>
    </a>
	<a href="Subbayyagarihotel.html">
		<img src="Subbayyagarihotel.jpg" alt="Subbayyagarihotel">
		<p>Subbayya gari hotel</p>
	  </a>
  
  </div>
  <br>
  <footer class="footer">
	<div class="social-items">
		<a href="#"><i class="fa-brands fa-instagram"></i></a>
		<a href="#"><i class="fa-brands fa-facebook"></i></a>
	</div>

	<ul class="list">
		<li>
			<a href="home1.html">Home</a>
		</li>
		<li>
			<a href="services.html">Services</a>
		</li>
		<li>
			<a href="about.html">About</a>
		</li>
		<li>
			<a href="contactus.html">contact us</a>
		</li>
	
	</ul>
	<p class="copyright"> @ All rights reserved sunchu.in 2023 </p>
</footer>
</body>
</html>
