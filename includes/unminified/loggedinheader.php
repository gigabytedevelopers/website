<header id=home>
    <div class="carousel carousel-fade slide" data-ride=carousel id=home-slider>
        <div class=carousel-inner>
            <div class="item active" style=background-image:url(images/slider/1.jpg)>
                <div class=caption>
                    <h1 class="animated fadeInLeftBig">Welcome to <span>Gigabyte Developers</span></h1>
                    <p class="animated fadeInRightBig">The Best Programming Hub For You</p><a href=#services class="animated btn btn-start fadeInUpBig" data-scroll>Start now</a></div>
            </div>
            <div class=item style=background-image:url(images/slider/2.jpg)>
                <div class=caption>
                    <h1 class="animated fadeInLeftBig">Say Hello to <span>Gigabyte</span></h1>
                    <p class="animated fadeInRightBig">Moving Programmers Forward</p><a href=#services class="animated btn btn-start fadeInUpBig" data-scroll>Start now</a></div>
            </div>
            <div class=item style=background-image:url(images/slider/divider2.jpg)>
                <div class=caption>
                    <h1 class="animated fadeInLeftBig">Quality <span>Social Media</span> Interaction</h1>
                    <p class="animated fadeInRightBig">Our social network called <a href=javascript:void(0) class=captions><strong>Tawkk</strong></a> offers you the best out-of-box social media experience</p><a href=#services class="animated btn btn-start fadeInUpBig" data-scroll>Start now</a></div>
            </div>
            <div class=item style=background-image:url(images/slider/rappixmg.jpg)>
                <div class=caption>
                    <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
                    <p class="animated fadeInRightBig">Creativity, Your First Choice For Success</p><a href=#services class="animated btn btn-start fadeInUpBig" data-scroll>Start now</a></div>
            </div>
            <div class=item style=background-image:url(images/slider/wisezy.jpg)>
                <div class=caption>
                    <h1 class="animated fadeInLeftBig">We are your <span>First Choice</span></h1>
                    <p class="animated fadeInRightBig">Number one option for your services</p><a href=#services class="animated btn btn-start fadeInUpBig" data-scroll>Start now</a></div>
            </div>
            <div class=item style=background-image:url(images/slider/5.jpg)>
                <div class=caption>
                    <h1 class="animated fadeInLeftBig">We are 100% <span>Efficient</span></h1>
                    <p class="animated fadeInRightBig">Our work speak for itself</p><a href=#services class="animated btn btn-start fadeInUpBig" data-scroll>Start now</a></div>
            </div>
            <div class=item style=background-image:url(images/slider/3.jpg)>
                <div class=caption>
                    <h1 class="animated fadeInLeftBig">We are <span>Unique</span></h1>
                    <p class="animated fadeInRightBig">There are no other like us in the world</p><a href=#services class="animated btn btn-start fadeInUpBig" data-scroll>Start now</a></div>
            </div>
            <div class=item style=background-image:url(images/slider/4.jpg)>
                <div class=caption>
                    <h1 class="animated fadeInLeftBig">We are <span>Top Class</span></h1>
                    <p class="animated fadeInRightBig">Always on top of our league!</p><a href=#services class="animated btn btn-start fadeInUpBig" data-scroll>Start now</a></div>
            </div>
            <div class=item style=background-image:url(images/slider/6.jpg)>
                <div class=caption>
                    <h1 class="animated fadeInLeftBig">24/7 <span>Customer Support</span></h1>
                    <p class="animated fadeInRightBig">Our Support agents are always ready to answer!</p><a href=#services class="animated btn btn-start fadeInUpBig" data-scroll>Start now</a></div>
            </div>
        </div><a href=#home-slider class=left-control data-slide=prev><i class="fa fa-angle-left"></i></a> <a href=#home-slider class=right-control data-slide=next><i class="fa fa-angle-right"></i></a> <a href=#services id=tohash><i class="fa fa-angle-down"></i></a></div>
    <div class=main-nav>
        <div class=container>
            <div class=navbar-header>
                <button class=navbar-toggle data-target=.navbar-collapse data-toggle=collapse type=button><span class=sr-only>Toggle navigation</span> <span class=icon-bar></span> <span class=icon-bar></span> <span class=icon-bar></span></button> <a href=index class=navbar-brand><h1><img alt=Logo class=img-responsive src=./images/gigalogo.png></h1></a></div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="scroll active"><a href=#home>Home</a>
                        <li class=scroll><a href=#services>Service</a>
                            <li class=scroll><a href=#about-us>About Us</a>
                                <li class=scroll><a href=#portfolio>Portfolio</a>
                                    <li class=scroll><a href=#team>Team</a>
                                        <li class=scroll><a href=#classes>Classes</a>
                                            <li class=scroll><a href=#blog>Blog</a>
                                                <li class=scroll><a href=#contact>Contact</a>
                                                    <li class=dropdown><a href=# class=dropdown-toggle aria-expanded=false aria-haspopup=true data-toggle=dropdown id=drop1 role=button><?php if (empty($user_data['profile']) === false) { echo '<img src="', $user_data ['profile'], '" alt="DP">'; } ?>   Hello,&nbsp<?php echo $user_data ['username']; ?>! <b class=caret></b><br><?php
if (is_admin($session_user_id, 1) === true) {
    echo '<b style="line-height:0.5;float:right;font-size:10px;padding-right:15px;font-weight:normal;font-family:roboto;">Welcome Admin!</b>';
} else if (has_access($session_user_id, 2) === true) {
    echo '<b style="line-height:0.5;float:right;font-size:10px;padding-right:15px;font-weight:normal;font-family:roboto;">Moderator!</b>';
}
?></a>
                                                        <ul class=dropdown-menu aria-labelledby=drop1>
                                                            <li class=scrollex><a href="user/<?php echo $user_data['username']; ?>" style="padding-left:32px;"><i class="fa fa-user"></i>View Profile</a>
                                                                <li class=scrollex><a href=settings style="padding-left:32px;"><i class="fa clicks fa-edit"></i>Update Profile</a>
                                                                    <li class=scrollex><a href=picture style="padding-left:35px;"><i class="fa clicks fa-picture-o"></i>Profile Picture</a>
                                                                        <li class=scrollex><a href=changepassword style="padding-left:32px;"><i class="fa clickss fa-cogs"></i>Edit Password</a>
                                                                            <li class=scrollexer><a href=javascript:void(0) target=_blank><i class="fa clicksss fa-comments" style="padding-left:-5px;"></i>Tawkk</a>
                                                                                <li class=scrollex><a href=search style="padding-left:25px;"><i class="fa fa-search gnss"></i>Search</a>
                                                                                    <?php
if (is_admin($session_user_id, 1) === true) {
    echo '<li class=scrollexer><a href=admin style="padding-left:25px;"><i class="fa fa-users"></i>User Count</a>';
}
?>
                                                                                        <li class=divider role=separator>
                                                                                            <li class=scrollexer><a href=logout style="padding-left:25px;"><i class="fa clicksss fa-sign-out"></i>Log Out</a></ul>
                </ul>
            </div>
        </div>
    </div>
</header>
