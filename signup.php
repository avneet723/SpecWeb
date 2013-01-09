<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        padding-bottom: 40px;
      }
    </style>
    <link href="./assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="./assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="./index.html"><font face='Arial' color='green'></font>Spec Translations</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="./index.html">Home</a></li>

                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="cat.html">CAT Tools</a></li>
                    <li><a href="languages.html">Languages</a></li>
                    <li><a href="resources.html">Resources</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clients <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="projects.html">Projects</a></li>
                  </ul>
                </li>

                <li><a href="ftp.html">Upload</a></li>
                <li><a href="privacy.html">Privacy</a></li>

                <li><a href="./contact-us.php">Contact Us</a></li>
                <li class="active"><a href="signup.php">Sign Up</a></li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <form class="navbar-search pull-right">
                        <input type="text" class="span2" placeholder="Username">
                        <input type="text" class="span2" placeholder="Password">
                        <label class="checkbox">
                          <input type="checkbox" value="remember-me"> Remember me
                        </label>
                        <button class="btn btn-large btn-primary" type="submit">Login</button>
                    </form>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="hero-unit">
          <h2>Create a new Spec Account </h2>
          <p class="tagline">Your Spec Account is more than just an average account. Share, collaborate, schedule, store, organize, and chat with your translator to grow your business globally and locally. 
        </div>

        <section class="span6">
          
          <form name="signup" method="post" action="signup_form_send.php">

            <div class="control-group">
              <label class="control-label" for="user_name"><i class="icon-user"></i>  Username</label>
              <div class="controls controls-row">
                <input type="text" class="input-xxlarge" id="user_name" placeholder="Please enter your email">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="full_name"><i class="icon-user"></i> Full Name</label>
              <div class="controls controls-row">
                <input type="text" class="input-xxlarge" id="full_name" placeholder="Please enter your email">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="email"><i class="icon-envelope"></i> Email</label>
              <div class="controls controls-row">
                <input type="text" class="input-xxlarge" id="email" placeholder="you@yourdomain.com">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="im_handle"><i class="icon-globe"></i> IM Handle</label>
              <div class="controls controls-row">
                <input type="text" class="input-xxlarge" id="im_handle" placeholder="your_handle@your_messenger">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="phone_num"><i class="icon-comment"></i> Phone Number</label>
              <div class="controls controls-row">
                <input type="text" class="input-xxlarge" id="phone_num" placeholder="555-555-5555">
              </div>
            </div>

            <div class="control-group">
            <div class="controls">
              <input type="submit" class="btn btn-success" value="Sign Up">
            </div>

          </form>

        </section>
        <section class="span6">

           <div class="container-indented">

              <form class="form-signin">
                <br>
                <br>
                <span style="padding-left: 70px; display:block">
                  <br> <h2>Already have an account?</h2>
                  <input type="text" class="input-large" placeholder="Email address"><br>
                  <input type="password" class="input-large" placeholder="Password">
                  <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                  <button class="btn btn-large btn-primary" type="submit">Sign in</button>
                </span>
              </form>

            </div> <!-- /container --> 

        </section>

      </div>

      <hr>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2012 Spec Translations, Inc.   All Rights Reserved &middot;   <a href="./contact-us.php">Contact Us</a> &middot; <a href="./privacy.html">Privacy</a> &middot; <a href="./terms.html">Terms</a> &middot; <a href="./disclaimer.html">Disclaimer</a> &middot; <a href="mailto:info@spectranslations.com">Email Us</a></p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/bootstrap-transition.js"></script>
    <script src="./assets/js/bootstrap-alert.js"></script>
    <script src="./assets/js/bootstrap-modal.js"></script>
    <script src="./assets/js/bootstrap-dropdown.js"></script>
    <script src="./assets/js/bootstrap-scrollspy.js"></script>
    <script src="./assets/js/bootstrap-tab.js"></script>
    <script src="./assets/js/bootstrap-tooltip.js"></script>
    <script src="./assets/js/bootstrap-popover.js"></script>
    <script src="./assets/js/bootstrap-button.js"></script>
    <script src="./assets/js/bootstrap-collapse.js"></script>
    <script src="./assets/js/bootstrap-carousel.js"></script>
    <script src="./assets/js/bootstrap-typeahead.js"></script>
    
    <script type="text/javascript">
      var conveythis_form_id = 250;
      var conveythis_user_id = "55bdaa0fbcdd176d56ad0444511f9703";
    </script>
    <a href="http://translation-cloud.com/" id="conveythis_main_link">translation services</a>
    <script type="text/javascript" src="http://conveythis.com/js/form.min.js"></script>

  </body>
</html>
