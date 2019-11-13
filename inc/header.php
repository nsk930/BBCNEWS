 <div id="topbar">
	  <a href="index.php"> <img id="logo" src="images/BBC-logo.jpg">  
    <div id="signin-div" class="topbar-section">
       <img id="signin-image" src="images/signinimage.jpg">
	  <?php if(!isset($_SESSION['email'])){?> <a href="signup.php"><span id="Signin-text">Sign in</span></a><?php }else{ ?> <a href="logout.php"><span id="Signin-text">Logout</span></a><?php } ?>
	</div> 
	<div id="bell-div">
	  <img id="wiglyline" src="images/wiglyline.png">
	  <img id="bell" src="images/bell-icon.png">
	  </div>
    <div class="topbar-section top-menu">
	 News
	 </div>
	 <div class="topbar-section top-menu">
	 Sports
	 </div>
	 <div class="topbar-section top-menu">
	 Weather
	 </div>
	 <div class="topbar-section top-menu">
	 iplayer
	 </div>
	 <div class="topbar-section top-menu">
	 TV
	 </div>
	 <div class="topbar-section top-menu">
	 More
	 <img id="arrow" src="images/more-arrow.png">
	 </div>
	 <form action ="searchresult.php" method = "post">
	 <div class="topbar-section">
	    <input id="search-box" type="text" name="searchterm" placeholder="Search News">
		<input type="image" id="magnifying-glass" src="images/magnifying-glass.png">
		<input type="submit" value="search" hidden>
	</div>	
	</form>
   </div>
   <div class="clear"></div>
   <div id="menu-bar-container">
      <div id="menu-bar">
	  <h1>NEWS</h1>
	  
	  </div>
	    <div class="clear"></div>
	<div id="menu-bar-2-container">
	 <div id="menu-bar-2">
	   <a href="index.php">Home</a>
	   <a href="election.php">Election 2019</a>
	   <a href="sports.php">Sports</a>
	   <a href="asia.php">Asia</a>
	   <a href="india.php">India</a>
	   <a href="buisness.php">Buisness</a>
	   <a href="science.php">Science</a>
	   <a href="stories.php">Stories</a>
	   <a href="entertainment.php">Entertainment & Arts</a>
	   <a href="health.php">Health</a>
	
	 
	   
	   </div>
	</div> 
   </div>