<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Nature | Wilde Adventures</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link href="css/animate-custom.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header id="header">
      <div class="intro-header">
        <div class="container">
          <nav class="navbar navbar-default">
          <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"></a>
            </div><!-- end navbar-header -->

           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
               <li><a href="#">HOME</a></li>
               <li><a href="#about">ABOUT</a></li>
               <li><a href="#services">SERVICES</a></li>
               <li><a href="#portfolio">PROJECTS</a></li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">TEAM</a></li>
          <li><a href="#">CONTACT</a></li>
         </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
      </nav>
      <div class="row">
        <div class="col-md-6">
          <div class="intro-text">
                  <h2>The typeface doesn't really matter,<br />
                  as long as the <span>text is good</span></h2>
                  <hr>
                  <h4 class="author-name">John Mazda</h4>
              </div><!-- end intro-text -->
            </div><!-- end col -->
            <div class="col-md-6">
              <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on">
                                <h1>Log in</h1>
                                <p>
                                    <label for="username" class="uname" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p class="keeplogin">
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button">
                                    <input type="submit" value="Login" />
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on">
                                <h1> Sign up </h1>
                                <p>
                                    <label for="usernamesignup" class="uname">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p>
                                    <label for="emailsignup" class="youmail"> Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/>
                                </p>
                                <p>
                                    <label for="passwordsignup" class="youpasswd">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p>
                                    <label for="passwordsignup_confirm" class="youpasswd">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button">
									<input type="submit" value="Sign up"/>
								</p>
                                <p class="change_link">
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div><!-- end register -->
                    </div><!-- end wrapper -->
                </div>  <!-- end container demo ->
            </div><!-- end col -->
          </div><!-- end row -->
      </div><!-- end container -->
     </div><!-- end intro-header -->
    </header>

    <section id="about">
      <div class="container">
        <div class="about-page">
          <div class="col-sm-6">
            <h3 class="big-title"><span>DESCRIPTION</span></h3>
            <p>&nbsp;&nbsp;Vestibulum malesuada tempus felis, eu scelerisque ligula hendrerit sit amet.
               Nullam quis egestas ipsum. Donec odio urna, egestas sit amet suscipit ac,
                rutrum eu risus.Cras non commodo mi. Pellentesque sit amet sapien nec purus mattis fringilla.
                Quisque sit amet aliquam nunc.<br>
                &nbsp;&nbsp;Cras blandit efficitur orci a egestas.
                Pellentesque efficitur ac libero quis rutrum. Nulla tincidunt semper neque ac feugiat.
                Nullam id lorem nec dui vestibulum vehicula eget sit amet nulla. Phasellus urna dui, hendrerit ut
                laoreet sit amet, posuere a nisi. Pellentesque eros orci, consequat et suscipit nec, placerat sed metus.
                Phasellus sollicitudin congue suscipit.</p>
          </div><!-- end col -->
          <div class="col-sm-6">
            <div class="profile-wall">
              <img src="img/profile.jpg" alt="profile-our-team">
            </div><!-- end profile-wall -->
          </div><!-- end col -->
        </div><!-- end about-page -->
      </div><!-- end container -->
    </section>

    <section id="services">
      <div class="services-general">
        <div class="container">
          <div class="row">
            <div class="col-md-4 description">
              <h3 class="big-title"><span>SERVICES</span></h3>
              <p class="service-text">&nbsp; &nbsp; Nulla molestie mollis euismod. Quisque nec mattis mauris,
                ut posuere mi. Suspendisse mattis nisl ut maximus pharetra.
                Vestibulum vitae blandit ante. Nam id metus mollis felis feugiat egestas.
                Vivamus at cursus mi, vel tristique urna. Nullam vitae diam diam. </p>
                <hr>
            </div><!-- end col -->
            <div class="col-md-8">
              <div class="box-services">
                <div class="row">
                  <div class="list-services">
                    <div class="col-md-6 lists">
                      <i class="fa fa-briefcase" aria-hidden="true"></i>
                      <h4>Branding</h4>
                      <hr class="line">
                      <p>Mauris tristique venenatis interdum. Donec non rutrum dui. Nulla eu dignissim lacus.</p>
                  </div><!-- end row -->
                  <div class="col-md-6">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <h4>VeryFast</h4>
                    <hr class="line">
                    <p>Pellentesque placerat nisl leo, ut tempor est dapibus id.</p>
                  </div><!-- end col -->
               </div><!-- end list services -->
           </div><!-- end row -->
           <div class="row">
             <div class="list-services">
               <div class="col-md-6">
                 <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                 <h4>New Ideas</h4>
                 <hr class="line">
                 <p>Mauris tristique venenatis interdum. Donec non rutrum dui. Nulla eu dignissim lacus.</p>
               </div><!-- end col -->
               <div class="col-md-6">
                 <i class="fa fa-picture-o" aria-hidden="true"></i>
                 <h4>Gallery</h4>
                 <hr class="line">
                 <p>Mauris tristique venenatis interdum. Donec non rutrum dui. .</p>
               </div> <!-- end col -->
              </div><!-- end list-services -->
            </div><!-- end row -->
          </div><!-- end box-services -->
        </div><!-- end col 8 -->
      </div><!-- end row -->
    </div><!-- end container -->
    </div><!-- end services-general -->
    </section>

    <section id="portfolio">
          <div class="row">
            <div class="col-md-6">
              <div class="content-list">
                <h3 class="big-title"><span>PORTFOLIO</span></h3>
                <ul class="list-menu">
                  <li class="active" data-filter="all">All</li>
                  <li data-filter="1">Photography</li>
                  <li data-filter="2">Services</li>
                  <li data-filter="3">New photos</li>
                  <li data-filter="4">Best photos</li>
                  <li data-filter="5">Most beautiful</li>
                </ul>
              </div><!-- end content -->
            </div><!-- end col -->
            <div class="grid">
              <div class="col-md-6">
				      	<figure class="effect-sarah" data-category="1" data-sort="">
					     	<img src="img/photo-one.jpg" alt="img13"/>
					    	<figcaption>
						    	<h2>VINTAGE</h2>
						    	<p>Sarah likes to watch clouds. She's quite depressed.</p>
					    	</figcaption>
				      	</figure>

				      	<figure class="effect-sarah" data-category="1" data-sort="Instant">
					      	<img src="img/photo-two.jpg" alt="img20"/>
					      	<figcaption>
						      	<h2>Instant</h2>
						      	<p>Sarah likes to watch clouds. She's quite depressed.</p>
					      	</figcaption>
				      	</figure>

                <figure class="effect-sarah" data-category="1" data-sort="Decor">
                <img src="img/photo-three.jpg" alt="img13"/>
                <figcaption>
                  <h2>Decor</h2>
                  <p>Sarah likes to watch clouds. She's quite depressed.</p>
                </figcaption>
                </figure>

                <figure class="effect-sarah" data-category="1" data-sort="Personality">
                  <img src="img/photo-four.jpg" alt="img20"/>
                  <figcaption>
                    <h2>Personality</h2>
                    <p>Sarah likes to watch clouds. She's quite depressed.</p>
                  </figcaption>
                </figure>
              </div><!-- end col -->
            </div><!-- end grid -->
          </div><!-- end row -->
    </section>

    <section id="team">
      <div class="container">
          <div class="row">
              <div class="col-md-4 description">
                <h3 class="big-title"><span>OURTEAM</span></h3>
                <p class="service-text">&nbsp; &nbsp; Nulla molestie mollis euismod. Quisque nec mattis mauris,
                  ut posuere mi. Suspendisse mattis nisl ut maximus pharetra. </p>
                  <hr>
              </div><!-- end col -->
              <div class="col-md-8">
                <div class="row">
                  <div class="info-team">
                <div class="col-sm-4 team-list">
                    <h2>John Mayer</h2>
                    <img src="img/client_1.png">
                    <p> Integer tortor velit, cursus nec est maximus, volutpat ultrices erat.</p>
                    <div class="social-buttons">
                    </div><!-- end social buttons -->
                  </div><!-- end teamlisr 1-->
                  <div class="col-sm-4 team-list">
                    <h2>Emily Monroe</h2>
                    <img src="img/client_2.png">
                    <p> Integer tortor velit, cursus nec est maximus, volutpat ultrices erat.</p>
                </div><!-- end col teamlist 2-->
                <div class="col-sm-4 team-list">
                  <h2>Nick Alison</h2>
                  <img src="img/client_3.png">
                  <p> Integer tortor velit, cursus nec est maximus, volutpat ultrices erat.</p>
                </div><!-- end teamlist 3 -->
              </div><!-- end col -->
            </div><!-- end row -->
          </div><!-- end col -->
        </div><!-- end container -->
    </section>
  </body>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.filterizr.js"></script>
    <script src="js/controls.js"></script>

    <!-- Filterizr -->

   </body>
</html>
