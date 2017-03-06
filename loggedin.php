<?php
include 'core/init.php';  
protect_page();
global $session_user_id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="google-site-verification" content="RjAgqUgYfT94lQ7oGZqqRI87NeSdR_6fecSUipiGBmg" />
  <meta property="og:image" content="https://www.facebook.com/gigabytedevelopersinc/photos/a.1676965692579485.1073741825.1676948882581166/1677029205906467/?type=3&theater" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Official website Homepage of Gigabyte Developers Incorporated">
  <meta name="author" content="Gigabyte Developers Incorporated">
  <title>Gigabyte Developers Incorporated | Home</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="css/icomoon.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/gigaicon.ico">
</head><!--/head-->

<body>
	<div id="fb-root"></div>
	<!-- Faccebook Page Plugin Script -->
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<noscript>
  <p>To contact us, please enable JavaScript in your browser, and then reload this page.</p>
</noscript>
  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>Gigabyte Developers</span></h1>
            <p class="animated fadeInRightBig">The Best Programming Hub For You</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Say Hello to <span>Gigabyte</span></h1>
            <p class="animated fadeInRightBig">Moving Programmers Forward</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
		<div class="item" style="background-image: url(images/slider/divider2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Quality <span>Social Media</span> Interaction</h1>
            <p class="animated fadeInRightBig">Our social network called <a class="captions" href="http://localhost/humhub-1.1.0/" target="_blank"><strong>GigabyteNetwork</strong></a> offers you the best out-of-box social media experience </p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/rappixmg.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Creativity, Your First Choice For Success</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
		<div class="item" style="background-image: url(images/slider/wisezy.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are your <span>First Choice</span></h1>
            <p class="animated fadeInRightBig">Number one option for your services</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
		<div class="item" style="background-image: url(images/slider/5.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are 100% <span>Efficient</span></h1>
            <p class="animated fadeInRightBig">Our work speak for itself</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
		<div class="item" style="background-image: url(images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Unique</span></h1>
            <p class="animated fadeInRightBig">There are no other like us in the world</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
		<div class="item" style="background-image: url(images/slider/4.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Top Class</span></h1>
            <p class="animated fadeInRightBig">Always on top of our league! </p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
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
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/gigalogo.png" alt="logo"></h1>
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
            <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if (empty($user_data['profile']) === false) { echo '<img src="', $user_data ['profile'], '" alt="">'; } ?>&nbsp&nbspHello, <?php echo $user_data ['username']; ?>! <b class="caret"></b></a>
            <ul class="dropdown-menu" aria-labelledby="drop1">
              <li class="scrollex"><a href="user/<?php echo $user_data['username']; ?>"><i class="fa fa-user"></i>View Profile</a></li>
              <li class="scrollex"><a href="settings"><i class="fa fa-edit clicks"></i>Update Profile</a></li>
              <li class="scrollex"><a href="picture"><i class="fa fa-picture-o clicks"></i>Profile Picture</a></li>
              <li class="scrollex"><a href="changepassword"><i class="fa fa-cogs clickss"></i>Edit Password</a></li>
              <li class="scrollex"><a href="http://localhost/gigabytenetwork" target="_blank"><i class="fa fa-comments gns"></i>GigabyteNetwork</a></li>
			  <li class="scrollex"><a href="search"><i class="fa fa-search gnss"></i>Search</a></li>
			  <li role="separator" class="divider"></li>
              <li class="scrollexer"><a href="logout"><i class="fa fa-sign-out clicksss"></i>Log Out</a></li>
            </ul>
          </li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <?php
if (is_admin($session_user_id, 1) === true) {
	echo 'Hello Admin!';
} else if (has_access($session_user_id, 2) === true) {
	echo 'Hello Moderator!';
}
?>
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Our Services</h2>
            <p>Our team at Gigabyte Developers Incorporated work ceaselessly to offer you a wide range of professional services in and outside the computer world of technologies. You can also <a href="contact" target="_blank">Contact Us</a> if you want to know more about the services we render to our customers.</p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
            </div>
            <div class="service-info">
              <h3>Brand Identity</h3>
              <p>Gigabyte Developers stands out unique amongst its competitors in the world of Tech-Know-How.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
            </div>
            <div class="service-info">
              <h3><a href="http://localhost/mybb_1807/Upload/index.php" target="_blank">Knowledge Base</a></h3>
              <p>Gigabyte Developers offers you brainstorming ideas that can help you as an average person.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
            </div>
            <div class="service-info">
              <h3>Supporting You</h3>
              <p>Young computer gurus are not to be left out as GIGABYTE offers support to deserving persons.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-bitbucket"></i>
            </div>
            <div class="service-info">
              <h3><a href="contact" target="_blank">Software Development</a></h3>
              <p>We offer Software Development for a wide range of platforms such as Android, iOS, Mac OX, Windows, Linux, Windows Mobile, Fedora etc.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
            </div>
            <div class="service-info">
              <h3>Professional Design</h3>
              <p>100% Unique, professional Web Design and Graphic Design can be found here at Gigabyte Developers Incorporated</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-gift"></i>
            </div>
            <div class="service-info">
              <h3><a href="tutorials" target="_blank">Clean Code</a></h3>
              <p>Ever wanted to code but don't know where to start? Well, we offer lots of tutorial classes for a wide range of programming languages</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->
  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>About us</h2>
            <p>Gigabyte Developers Incorporated which is a Non-Governmental Organization was established to harness and elevate the potential in young computer gurus allover the world. Gigabyte Developers Incorporated is known globally for its quality and genuine services. The company was formerly known as Gigabyte Developers but was later in 2016 incorporated with <a href="http://www.accessteam.netne.net">The Access Team</a>, <a href="http://www.facebook.com/mezuestudios">Mezue Studios, LLC</a>, <a href="#">Catarax Solutions</a> and <a href="#">Gigabyte Studios Incorporated</a> and from then on, it was transformed from Gigabyte Developers to Gigabyte Developers Incorporated. </p>
            <p>Gigabyte Developers Incorporated was founded in December, 2015 by <br><a href="http://www.facebook.com/austin.nwokoma.9">Mr. Nwokoma Emmanuel</a>. The name of this great company was derived from GIGABYTE which was Mr. Emmanuel's nickname during his days in college. Mr. Nwokoma Emmanuel was called GIGABYTE because of his wide knowledge in Computer Software & Hardware Engineering, including his programming skills in over 8 programming languages. </p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">User Experiances</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead">Web Design</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="80">80%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Programming</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="75">75%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Fun</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="90">90%</div>
              </div>
			<div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Media</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="70">70%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Our Portfolio</h2>
          <p>Here are some visual representation of our abilities, skills, capabilities, knowledge, qualities and potential. Some materials in this section represent tangible work related events at Gigabyte Developers Incorporated.</p>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/portfolio2.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Software Development</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="http://www.accessteam.netne.net" target="_blank" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details2.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/portfolio4.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Android Development</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="http://www.mezuestudios.net23.net" target="_blank" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details4.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/portfolio7.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Professional Designs</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details7.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/portfolio6.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Branded Identity</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details6.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/portfolio9.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Website Development</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details9.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/portfolio5.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Graphic Designs</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="https://www.facebook.com/Dondarls-designs-1594446370845541/" target="_blank"><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details5.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/portfolio1.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Knowledge Base</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details1.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/portfolio8.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Website Designs</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="#" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="images/portfolio/portfolio-details8.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>The Team</h2>
          <p>Meet the root of our Company's tree. They are the major members of the Company's team. They are the people behind the successful movement of this Company.</p>
        </div>
      </div>
      <div class="team-members">
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/giga.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Nwokoma Emmanuel</h3>
                <h4>CEO &amp; Founder</h4>
                <p>Emmanuel works hard to combine his expert technical knowledge with a real eye for design. Working with clients from a wide range of industries around the world. He is the one making the Company tick.</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="http://www.facebook.com/austin.nwokoma.9" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="http://www.twitter.com/Enwokoma" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="googleplus" href="http://www.plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                  <li><a class="skype" href="skype:emmanuel.nwokoma?call" target="_blank"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/boobz.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Okocha Ebube</h3>
                <h4>Tech/Support Manager</h4>
                <p>Ebube is an experienced IT practitioner and manages projects from inception to delivery. He understands client objectives when working on a project, weather large or small.</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="googleplus" href="http://www.plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                  <li><a class="skype" href="skype:?call" target="_blank"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/mezue.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Mezue Ceejay</h3>
                <h4>Software Engineer</h4>
                <p>Being a Creative Director and Engineer is not an easy task, but Ceejay loves what he does. His effective combination of knowledge and expertise has become an important pillar in our agency.</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="googleplus" href="http://www.plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                  <li><a class="skype" href="skype:?call" target="_blank"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/3.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Ojukwu Ikenna</h3>
                <h4>UI/UX Designer</h4>
                <p>Ikenna a.k.a Skalez began making websites when animated logos and scrolling text were cool, but has since found a love for simplicity, creating websites and desgins that are a lovely to browse.</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="googleplus" href="http://www.plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                  <li><a class="skype" href="skype:?call" target="_blank"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </div>
  </section><!--/#team-->

  <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-user"></i>
          <h3>4000+</h3>
          <p>Happy Clients</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fa fa-desktop"></i>
          <h3>200+</h3>                    
          <p>Modern Websites</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="fa fa-trophy"></i>
          <h3 class="timer">10</h3>                    
          <p>WINNING AWARDS</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-comment-o"></i>                    
          <h3>24/7</h3>
          <p>Fast Support</p>
        </div>                 
      </div>
    </div>
  </section><!--/#features-->

  <section id="classes">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Featured Pricing Table For Classes</h2>
          <p>Our team offers you great tutorial classes which you will definitely find interesting because of our great user friendly interaction technique. As we need no customer regrets, we have made all our tutoring plans FREE for now so as to suite the needs of our customers.</p>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3>Free Plan</h3>
              <!-- <div class="price">
                $0<span>/Month</span>                          
              </div> -->
              <ul>
                <li>Introductory Python Classes</li>
                <li>Introductory HTML/CSS Classes</li>
				<li>Introductory Javascript Classes</li>
				<li>Introductory JQuery Classes</li>
                <li>Introductory SQL Classes</li>
                <li>Introductory PHP Classes</li>
				<li>Introductory Java Classes</li>
				<li>Introductory Photoshop Classes</li>
				<li>Introductory Illustrator Classes</li>
              </ul>
              <a href="registerform" class="btn btn-lg btn-primary">Click Here</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3>Basic Plan</h3>
              <!-- <div class="price">
                $0<span>/Month</span>                                
              </div> -->
              <ul>
                <li>Basic Python Classes</li>
                <li>Basic HTML/CSS Classes</li>
				<li>Basic Javascript Classes</li>
				<li>Basic JQuery Classes</li>
                <li>Basic SQL Classes</li>
                <li>Basic PHP Classes</li>
				<li>Basic Java Classes</li>
				<li>Basic Photoshop Classes</li>
				<li>Basic Illustrator Classes</li>
              </ul>
              <a href="registerform" class="btn btn-lg btn-primary">Click Here</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3>Standard Plan</h3>
              <!-- <div class="price">
                $0<span>/Month</span>                                
              </div> -->
              <ul>
                <li>Standard Python Classes</li>
                <li>Standard HTML/CSS Classes</li>
				<li>Standard Javascript Classes</li>
				<li>Standard JQuery Classes</li>
                <li>Standard SQL Classes</li>
                <li>Standard PHP Classes</li>
				<li>Standard Java Classes</li>
				<li>Standard Photoshop Classes</li>
				<li>Standard Illustrator Classes</li>
              </ul>
              <a href="registerform" class="btn btn-lg btn-primary">Click Here</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
             <h3>Professional Plan</h3>
              <!-- <div class="price">
                $0<span>/Month</span>                    
              </div> -->
              <ul>
                <li>Professional Python Classes</li>
                <li>Professional HTML Classes</li>
				<li>Professional Javascript Classes</li>
				<li>Professional JQuery Classes</li>
                <li>Professional SQL Classes</li>
				<li>Professional PHP Classes</li>
				<li>Professional Java Classes</li>
				<li>Professional Photoshop Classes</li>
				<li>Professional Illustrator Classes</li>
				<li>Professional Android Classes</li>
				<li>Professional C++ Classes</li>
				<li>Professional Visual Basic Classes</li>
				<li>Professional Node.JS Classes</li>
              </ul>
              <a href="registerform" class="btn btn-lg btn-primary">Click Here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#pricing-->

  <section id="twitter" class="parallax">
    <div>
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
			<span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>
              <h4>Testimonials</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                </div>
                <div class="item">
                  <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                </div>
                <div class="item">                                
                  <p>Introducing Shortcode generator for Helix V2 based templates <a href="#"><span>#helixframework #joomla</span> http://bit.ly/1qlgwav</a></p>
                </div>
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Blog Posts</h2>
          <p>Latest updates on the happenings at Gigabyte Developers Incorporated, latest tutorials by our team regarding lots and lots of programming languages and some Software Development platforms. </p>
        </div>
      </div>
		
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgigabytedevelopersinc%2F&tabs=timeline&width=300&height=400&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="382" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		
		<a class="twitter-timeline" href="https://twitter.com/Enwokoma" data-widget-id="740163416065724417">Tweets by @Enwokoma</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		
		<a class="twitter-timeline" href="https://twitter.com/gigabytedevsinc" data-widget-id="740168844568842240">Tweets by @gigabytedevsinc</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
	
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="#" class="btn-loadmore" data-single_url="portfolio-single.html"><i class="fa fa-repeat"></i> Load More</a>
        </div>                
      </div>
    </div>
	  <div id="portfolio-single-wrap">
		  <div id="portfolio-single">
		  </div>
	  </div><!-- /#portfolio-single-wrap -->
  </section><!--/#blog-->
  
	<!-- ==== GREYWRAP ==== -->
	<div id="greywrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 centered wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="300ms">
					<img class="img-responsive" src="images/macbook.png" align="">
				</div>
				<div class="col-lg-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
					<h2>Hire Us Now!</h2></div>
				<div class="col-lg-4 wow fadeInUpBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<p>Do you want our team at Gigabyte Developers Incorporated to do the work for you? Of course you want to, because we are awesome and 100% professional!. Here at Gigabyte Developers Incorporated, we work very hard every day to program lots of stuffs and to craft pixel perfect sites!. So, click on the button below to get started</p></div>
				<div class="wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="600ms">
					<p>
					<a href="contact" target="_blank" class="btns btns-success">Contact Us</a></p>
				</div>				
				<div class="clearfix"></div>
			</div><!-- row -->
		</div>
		<br>
		<br>
	</div>
	<div class="clearfix"> </div>
	<!-- greywrap -->

  <section id="contact">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15885.369892254239!2d7.489328367024799!3d5.516085470816583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1042c334a5b7942b%3A0xf1cad6c310f743d0!2sWorld+Bank+Estate!5e0!3m2!1sen!2sng!4v1466686298378" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
            <p>Do you have questions that require answers, do you have any suggestions that you would like to make, do you have any ideas you want to share? If YES, then don't hesitate to contact us. <br/>Fill out the form below and await a reply from us within 24-48hrs or 1-2 business days.</p>
          </div>
        </div>
<?php
/* include('STMP/SMTPconfig.php');
include('STMP/SMTPClass.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$to = $_POST['to'];
$from = $_POST['from'];
$subject = $_POST['sub'];
$body = $_POST['msg'];
$SMTPMail = new SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body);
$SMTPChat = $SMTPMail->SendMail();
} */
?>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="contact-form">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="vname" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div> 
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="vemail" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="sub" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="msg" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit" name="submit" id="send"> Send Now</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>You can meet our team and representatives in person at our Main Office/Headquarters by just paying a homely visit at the address below or call on phone for more details to schedule a visit to Gigabyte Developers Incorporated.</p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> #40, Nnokwa Street, World Bank Housing Estate, Umuahia, Abia State. Nigeria </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +234 810 430 9369, +234 701 723 6746  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:gigabytedevelopers@gmail.com"> gigabytedevelopers@gmail.com</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="http://www.gigsbytedevelopersinc.netai.net" target="_blank">www.gigabytedevelopersinc.com</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
	<div class="partners">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 wow fadeInRightBig" data-wow-duration="1200ms" data-wow-delay="300ms">
					<h2 class="heading">Our Partners</h2></div>
				</div>
				<div class="col-xs-12"> 
					<div class="row">
						<nav>
							<ul>
								<li class="col-md-2 col-sm-3 col-xs-6 wow flipInY" data-wow-duration="1000ms" data-wow-delay="400ms"><a href="http://www.gigabytestudiosinc.netai.net"><img src="images/partners/partner01.jpg" alt="" class="img-responsives"></a></li>
								<li class="col-md-2 col-sm-3 col-xs-6 wow flipInY" data-wow-duration="1000ms" data-wow-delay="600ms"><a href="http://www.accessteam.netne.net"><img src="images/partners/partner02.jpg" alt="" class="img-responsives"></a></li>
								<li class="col-md-2 col-sm-3 col-xs-6 wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms"><a href="http://www.mezuestudios.net23.net"><img src="images/partners/mezuestudios.png" alt="" class="img-responsives"></a></li>
								<li class="col-md-2 col-sm-3 col-xs-6 wow flipInY" data-wow-duration="1000ms" data-wow-delay="1000ms"><a href="javascript:void(0)"><img src="images/partners/carterax.png" alt="" class="img-responsives"></a></li>
								<li class="col-md-2 col-sm-3 col-xs-6 wow flipInY" data-wow-duration="1000ms" data-wow-delay="1200ms"><a href="javascript:void(0)"><img src="images/partners/partner05.jpg" alt="" class="img-responsives"></a></li>
								<li class="col-md-2 col-sm-3 col-xs-6 wow flipInY" data-wow-duration="1000ms" data-wow-delay="1400ms"><a href="javascript:void(0)"><img src="images/partners/partner06.jpg" alt="" class="img-responsives"></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"> </div>
	<div class="container" id="contact" name="contact">
		<div class="row">
			<br>
			<h1 class="centered wow fadeInRightBig" data-wow-duration="1200ms" data-wow-delay="300ms">THANKS FOR VISITING US</h1>
			<div class="wow fadeInLeftBig" data-wow-duration="1200ms" data-wow-delay="400ms"><hr></div>
			<br>
			<br>
			<div class="col-lg-4 wow fadeInRightBig" data-wow-duration="1200ms" data-wow-delay="500ms">
				<h3>Contact Information</h3>
				<p><span class="icon icon-home wow fadeInUpBig" data-wow-duration="1200ms" data-wow-delay="600ms"></span> #40, Nnokwa Street, World Bank Housing Estate, Umuahia, Abia State. Nigeria <br/>
					<span class="icon icon-phone"></span> +234 810 430 9369 <br/>
					<span class="icon icon-mobile"></span> +234 701 723 6746 <br/>
					<span class="icon icon-envelop"></span> <a href="mailto:gigabytedevelopers@gmail.com" target="_blank"> gigabytedevelopers@gmail.com</a> <br/>
					<span class="icon icon-twitter"></span> <a href="http://www.twitter.com/gigabytedevsinc" target="_blank"> @gigabytedevsinc </a> <br/>
					<span class="icon icon-facebook"></span> <a href="http://www.facebook.com/gigabytedevelopersinc" target="_blank"> Gigabyte Developers Incorporated </a> <br/>
				</p>
			</div><!-- col -->
			
			<div class="col-lg-4 wow fadeInDown" data-wow-duration="1200ms" data-wow-delay="700ms">
				<h3>Newsletter</h3>
				<p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>
				<p>
					<form class="form-horizontal" role="form">
						<div class="form-group">
						    <label for="inputEmail1" class="col-lg-4 control-label"></label>
						    <div class="col-lg-10">
								<input type="email" class="form-controlss" id="inputEmail1" placeholder="Email">
						    </div>
						</div>
						<div class="form-group">
						    <label for="text1" class="col-lg-4 control-label"></label>
						    <div class="col-lg-10">
								<input type="text" class="form-controls" id="text1" placeholder="Your Name">
						    </div>
						</div>
						<div class="form-group">
						    <div class="col-lg-10">
								<button type="submit" class="btns btns-success">Sign in</button>
						    </div>
						</div>
					</form><!-- form -->
				</p>
			</div><!-- col -->
			
			<div class="col-lg-4 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="800ms">
				<h3>Support Us</h3>
				<p>Do you love our work and would like us to achieve more? If, yes! Then why not support us to aid our continuity by simply clicking on the donate button below and donate to us. No amount is too small.<br/>Note: "God loves a cheerfull giver"!</p>
				<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=G35ZM2EKPVZ9Y"s type="submit" class="btns btns-success wow fadeInRightBig" data-wow-duration="1200ms" data-wow-delay="1000ms">Donate</a>
			</div><!-- col -->
			
		</div><!-- row -->
		
	</div><!-- container -->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/gigalogo.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="twitter" href="http://www.twitter.com/gigabytedevsinc" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a class="facebook" href="http://www.facebook.com/gigabytedevelopersinc" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a class="googleplus" href="http://plus.google.com/+GigabyteDevelopers" target="_blank"><i class="fa fa-google-plus"></i></a></li> 
            <li><a class="pinterest" href="http://pinterest.com/gigabytedevsinc" target="_blank"><i class="fa fa-pinterest"></i></a></li>
            <li><a class="skype" href="skype:emmanuel.nwokoma?call"><i class="fa fa-skype"></i></a></li>
            <li><a class="linkedin" href="http://www.linkedin.com/emmanuelnwokoma" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2016 Gigabyte Developers Incorporated.</p>
          </div>
          <div class="col-sm-6">
            <!-- <p class="pull-right">Crafted by <a href="http://designscrazed.org/">Allie</a></p> -->
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  
  <!-- <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=96584980"></script> -->
  <noscript>
  <meta http-equiv="refresh" content="0;url=loggedinonmobile">
</noscript>
 <script type="text/javascript">
  <!--
  if (screen.width <= 800) {
    window.location = "http://www.gigabytedevsinc.byethost31.com/loggedinonmobile";
  }
  //-->
</script>
<script>
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

$(function () {
    $('div').slice(0, 3).show();
    $('#loadMore').on('click', function (e) {
        e.preventDefault();
        $('div:hidden').slice(0, 3).slideDown();
        if ($('div:hidden').length == 0) {
            $('#load').fadeOut('slow');
        }
        $('html,body').animate({ scrollTop: $(this).offset().top }, 1500);
    });
});
$('a[href=#top]').click(function () {
    $('body,html').animate({ scrollTop: 0 }, 600);
    return false;
});
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.totop a').fadeIn();
    } else {
        $('.totop a').fadeOut();
    }
});
//# sourceURL=pen.js
</script>
  <div id="loader-wrapper">
<div id="loader"></div>

<div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

  <!-- <<Attched Javascripts>> -->
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.sudoSlider.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script src="js/contactjs/jquery-migrate-1.1.1.js"></script>
<script src="js/contactjs/jquery.easing.1.3.js"></script>
<script src="js/contactjs/script.js"></script> 
<script src="js/contactjs/superfish.js"></script>
<script src="js/contactjs/jquery.equalheights.js"></script>
<script src="js/contactjs/jquery.mobilemenu.js"></script>
<script src="js/contactjs/tmStickUp.js"></script>
<script src="js/contactjs/jquery.ui.totop.js"></script>
<script src="js/contactjs/TMForm.js"></script> 
<script src="js/contactjs/modal.js"></script>

</body>
</html>