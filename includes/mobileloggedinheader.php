<header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(./images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated">Welcome to <span>Gigabyte Developers</span></h1>
            <p class="animated">The Best Programming Hub For You</p>
            <a data-scroll class="btn btn-start animated" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(./images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated">Say Hello to <span>Gigabyte</span></h1>
            <p class="animated">Moving Programmers Forward</p>
            <a data-scroll class="btn btn-start animated" href="#services">Start now</a>
          </div>
        </div>
		<div class="item" style="background-image: url(./images/slider/divider2.jpg)">
          <div class="caption">
            <h1 class="animated">Quality <span>Social Media</span> Interaction</h1>
            <p class="animated">Our social network called <a class="captions" href="javascript:void(0)"><strong>Weiglo</strong></a> offers you the best out-of-box social media experience </p>
            <a data-scroll class="btn btn-start animated" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(./images/slider/rappixmg.jpg)">
          <div class="caption">
            <h1 class="animated">We are <span>Creative</span></h1>
            <p class="animated">Creativity, Your First Choice For Success</p>
            <a data-scroll class="btn btn-start animated" href="#services">Start now</a>
          </div>
        </div>
		<div class="item" style="background-image: url(./images/slider/wisezy.jpg)">
          <div class="caption">
            <h1 class="animated">We are your <span>First Choice</span></h1>
            <p class="animated">Number one option for your services</p>
            <a data-scroll class="btn btn-start animated" href="#services">Start now</a>
          </div>
        </div>
		<div class="item" style="background-image: url(./images/slider/5.jpg)">
          <div class="caption">
            <h1 class="animated">We are 100% <span>Efficient</span></h1>
            <p class="animated">Our work speak for itself</p>
            <a data-scroll class="btn btn-start animated" href="#services">Start now</a>
          </div>
        </div>
		<div class="item" style="background-image: url(./images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated">We are <span>Unique</span></h1>
            <p class="animated">There are no other like us in the world</p>
            <a data-scroll class="btn btn-start animated" href="#services">Start now</a>
          </div>
        </div>
		<div class="item" style="background-image: url(./images/slider/4.jpg)">
          <div class="caption">
            <h1 class="animated">We are <span>Top Class</span></h1>
            <p class="animated">Always on top of our league! </p>
            <a data-scroll class="btn btn-start animated" href="#services">Start now</a>
          </div>
        </div>
    <div class="item" style="background-image: url(./images/slider/4.jpg)">
          <div class="caption">
            <h1 class="animated">24/7 <span>Customer Support</span></h1>
            <p class="animated">Our Support agents are always ready to answer! </p>
            <a data-scroll class="btn btn-start animated" href="#services">Start now</a>
          </div>
      </div>
      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index">
            <h1><img class="img-responsive" src="./images/gigalogo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Service</a></li> 
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
            <li class="scroll"><a href="#team">Team</a></li>
			<li class="scroll"><a href="#classes">Classes</a></li>
            <li class="scroll"><a href="#blog">Blog</a></li>
            <li class="scroll"><a href="#contact">Contact</a></li>   
			<li class="dropdown">
            <a id="drop1" href="javascript:void(0)" role="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if (empty($user_data['profile']) === false) { echo '<img src="', $user_data ['profile'], '" alt="">'; } ?>&nbsp&nbspHello, <?php echo $user_data ['username']; ?>! <b class="caret"></b></a>
            <ul class="dropdown-menu" aria-labelledby="drop1">
              <li class="scrollex"><a href="user/<?php echo $user_data['username']; ?>"><i class="fa fa-user"></i>View Profile</a></li>
              <li class="scrollex"><a href="settings"><i class="fa fa-edit clicks"></i>Update Profile</a></li>
              <li class="scrollex"><a href="picture"><i class="fa fa-picture-o clicks"></i>Profile Picture</a></li>
              <li class="scrollex"><a href="changepassword"><i class="fa fa-cogs clickss"></i>Edit Password</a></li>
              <li class="scrollex"><a href="javascript:void(0)" target="_blank"><i class="fa fa-comments gns"></i>GigabyteNetwork</a></li>
			  <li class="scrollex"><a href="search"><i class="fa fa-search gnss"></i>Search</a></li>
			  <li role="separator" class="divider"></li>
              <li class="scrollexer"><a href="logout"><i class="fa fa-sign-out clicksss"></i>Log Out</a></li>
            </ul>
          </li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header>