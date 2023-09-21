<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>UpSkill</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="mypage.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");

        btn.onclick = function()
        {
            sidebar.classList.toggle("active");
        }
    </script>
    <script>
        function login()
        {
            alert("Login to the platform to view the courses!!!");
        }
    </script>
</head>
<body>   
<!--NAVIGATION-->
<header id="header">
	<nav>
		<!---<div class="logo"><img src="images/icon/logo.png" alt="logo"></div>--->
		<div class="logo">UpSkill</div>
		<ul>
			<li><a class="active" href="">Home</a></li>
			<li><a href="#portfolio_section">Statistics</a></li>
			<li><a href="#services_section">Instructors</a></li>
			<li><a href="#contactus_section">Contact</a></li>
		</ul>
		<a class="get-started" href="register.php">Register / Login</a>
		<img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
	</nav>
</header>

<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="e3.jpg">
				</div>
				<div class="side-text">
					<h2>About us !</h2>
					<p>Education is an important part of everyone's life, and finding the course which one wants to do and being able to find the right resources to learn from becomes a crucial part of the whole learning process. The traditional ways which involved offline education and required the students to reach a certain place at a specified time, as easy as it sounds there are many issues with this method of teaching, some of the major issues is the problems faced by student to reach these places making it not easily accessible to all and other issues involving that if a student misses a lecture they cannot attend the lecture again proving to be a really big disadvantage of the offline teaching system. In case the student wants to revise the topics it can only be done through the notes made by the student and in case of any doubt the student cannot listen to the lecture again in order to clarify the doubt and this makes the student dependent on the faculty even in the revision stage and as the faculty cannot be always available for the students this is also a disadvantage of the offline education system.
					</p>
				</div>
		</div>
	</div>

<!-- Some Popular Subjects -->
<div class="title">
    <span>Courses Offered By Us</span>
</div>
<br><br>
<div class="course">
    <center><div class="cbox">
    <div class="det"><a onclick=login() ><img src="book.png">C</a></div>
    <div class="det"><a onclick=login() ><img src="d1.png">C++</a></div>
    <div class="det"><a onclick=login() ><img src="paper.png">Java</a></div>
    <div class="det"><a onclick=login() ><img src="d1.png">Python</a></div>
    </div></center>
    <div class="cbox">
    <div class="det"><a onclick=login() ><img src="computer.png">DBMS</a></div>
    <div class="det"><a onclick=login() ><img src="data.png">Data Structures</a></div>
    <div class="det"><a onclick=login() ><img src="algo.png">Computer networking</a></div>
    <div class="det det-last"><a onclick=login() ><img src="projects.png">New Technologies</a></div>
    </div>
</div>

<!-- SERVICES -->
	<div class="service-swipe">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 60px; padding-bottom: 40px; color: #fff;">Instructors On The Platform</p></center>
		</div>
		<a href="https://www.youtube.com/c/AmanDhattarwal/about"><div class="s-card"><img src="computer-courses.png"><p>Aman Dhattarwal</p></div></a>
		<a href="https://www.youtube.com/c/LoveBabbar1/about"><div class="s-card"><img src="brainbooster.png"><p>Love Babbar</p></div></a>
		<a href="https://www.youtube.com/c/GateSmashers/about"><div class="s-card"><img src="online-tutorials.png"><p>Gate Smashers</p></div></a>
		<a href="https://www.youtube.com/c/ApnaCollegeOfficial/about"><div class="s-card"><img src="papers.jpg"><p>Shraddha Didi</p></div></a>
		<a href="https://www.youtube.com/c/JennyslecturesCSITNETJRF/about"><div class="s-card"><img src="brainbooster.png"><p>Jenny's Lectures</p></div></a>
		<a href="https://www.youtube.com/c/nesoacademy/about"><div class="s-card"><img src="help.png"><p>Neso Academy</p></div></a>
	</div>


<!-- PORTFOLIO -->
<div class="diffSection" id="portfolio_section">
    <center><p style="font-size: 50px; padding: 60px; padding-bottom: 40px;">Statistics</p></center>
    <div class="content">
        <p>
            “Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”
        </p>
    </div>
</div>
<div class="extra">
    <p>We're increasing this data every year</p>
    <div class="smbox">
    <span><center><div class="data">154</div><div class="det">Enrolled Students</div></center></span>
    <span><center><div class="data">48</div><div class="det">Total Courses</div></center></span>
    <span><center><div class="data">15</div><div class="det">Instructors</div></center></span>
    <span><center><div class="data">27</div><div class="det">Total Projects</div></center></span>
    </div>
</div>


<!-- CONTACT US -->


<!-- FEEDBACK -->


<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right, #FA4B37, #DF2771); margin-top: 20px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”</div></marquee>

<!-- FOOTER -->
	<footer>
		<div class="footer-container" id="contactus_section">
						<div class="left-col">
				<div class="logo">UpSkill</div>
				<div class="social-media">
					<a href="#"><img src="images/icon\fb.png"></a>
					<a href="https://www.instagram.com/__aneja_anmol__/"><img src="images/icon/insta.png"></a>
					<a href="#"><img src="images/icon\tt.png"></a>
					<a href="https://www.youtube.com/watch?v=biJ71oRJ6YE"><img src="images/icon/ytube.png"></a>
					<a href="https://www.linkedin.com/in/anmol-aneja-b18310200/"><img src="images/icon/linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2022 Created By Anmol Aneja All Rights Reserved.</p>
				<br><p><img src="images/icon/location.png"> Chandigarh University<br>MohaLI, Punjab-144401</p><br>
				<p><img src="images/icon/phone.png"> +91-734-752-6454<br><img src="images/icon/mail.png">&nbsp; 20BCS@5286@CUCHD.in</p>
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Our Newsletter</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">	
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>

</body>
</html>