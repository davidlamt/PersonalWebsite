<!-- Reference to the custom PHP file -->
<?php include("creative.php"); ?>

<!doctype html>
<html>
<head>
    <title>David Tran - Developer</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	  <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Reference to the custom CSS file -->
    <link rel="stylesheet" type="text/css" href="creative.css" />

</head>

<body data-spy="scroll" data-target=".navbar-collapse">

  <!-- The navigation bar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="#homePage" class="navbar-brand">&#60;david.tran&#47;&#62;</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#homePage">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-epanded="false">About
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#aboutPage">About</a></li>
                <li><a href="#knowledgePage">Knowledge</a></li>
                <li><a href="#educationPage">Education</a></li>
              </ul>
          </li>
          <li><a href="">Blog</a></li>
          <li><a href="http://davidtranscend.com/portfolio.php">Portfolio</a></li>
          <li><a href="">Resume</a></li>
          <li><a href="#" data-toggle="modal" data-target="#contactModal">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Modal for the contact page -->
  <div class="modal" id="contactModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal">x</button>
          <h4 class="modal-title">Let's Get In Touch!</h4>
        </div>
        <div class="modal-body">
          <p>Questions, comments, inquiries? Send me an email and I'll get back to you as soon as possible!</p>
          <div class="formWarning alert alert-success centered" id="submitSuccess">Thank you!</div>
          <div class="formWarning alert alert-danger centered" id="submitFail">Your email could not be sent. Please try again.</div>
          <form method="POST" class="emailForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control nameInput textInput" placeholder="Name" />
              <span class="formWarning alert alert-danger" id="warningName">Please enter your name</span>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control emailInput textInput" placeholder="Email" />
              <span class="formWarning alert alert-danger" id="warningEmail">Please enter a valid email address</span>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control subjectInput textInput" placeholder="Subject" />
              <span class="formWarning alert alert-danger" id="warningSubject">Please enter your subject</span>
            </div>
            <div class="form-group">
              <textarea name="message" class="form-control messageInput textInput" placeholder="Message" rows="5" ></textarea>
              <span class="formWarning alert alert-danger" id="warningMessage">Please enter your message</span>
            </div>
            <div class="centered">
              <!-- <input type="submit" name="submit" class="btn btn-success" value="Submit" /> -->
              <button name="submit" class="btn btn-success" id="myFormSubmit" value="Submit" />Send Email</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <ul>
            <li><a href="https://github.com/davidlamt" target="_blank">GitHub</a></li>
            <li><a href="https://twitter.com/davidlamt" target="_blank">Twitter</a></li>
          </ul>
          <button class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Container for the home page -->
  <div class="container contentContainer" id="homePage">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 centered">
        <h1 class="bold">WELCOME</h1>
        <p id="separatingLine">_</p>
        <p class="lead" id="welcomeParagraph">I'm David and I'm a Computer Engineering major at the University of California, Irvine.
          I've created this website to share my projects with others.</p>
        <a href="#aboutPage" class="btn btn-custom btn-lg centered" id="aboutButton">FIND OUT MORE</a>
      </div>
    </div>
  </div>

  <!-- Container for the about page -->
  <div class="container contentContainer" id="aboutPage">
    <div class="row">
      <div class="col-md-3 col-md-offset-1 centered">
        <img class="circleImage" src="images/david-image.png" />
      </div>
      <div class="col-md-offset-1 col-md-6">
        <h1 class="centered">Hi, I'm David!</h1>
        <p>I am a 20 year old Computer Engineering major at the University of California, Irvine. I was born in Northern California but I am
          currently living in Southern California. I enjoy watching TV shows, reading books, listening to music, and coding.
          I am fluent in both English and Vietnamese. I have a lot of interest in technology, especially in web and mobile app development.</p>
      </div>
    </div>
  </div>

  <!-- Container for the knowledge page-->
  <div class="container contentContainer" id="knowledgePage">
    <div class="row">
      <div class="col-md-12">
        <h1>Knowledge</h1>
        <div class="col-md-6 col-md-offset-3">
          <h2>Web Development</h2>
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
              <span class="sr-only">70% Complete (Success)</span>
              <span class="progressBarLabel">HTML</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
              <span class="sr-only">60% Complete (Info)</span>
              <span class="progressBarLabel">CSS</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              <span class="sr-only">40% Complete (Warning)</span>
              <span class="progressBarLabel">JavaScript</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
              <span class="sr-only">30% Complete (Warning)</span>
              <span class="progressBarLabel">jQuery</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              <span class="sr-only">40% Complete (Yellow)</span>
              <span class="progressBarLabel">Bootstrap</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-lightBlue" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
              <span class="sr-only">20% Complete (Light Blue)</span>
              <span class="progressBarLabel">PHP</span>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
              <span class="sr-only">10% Complete (Purple)</span>
              <span class="progressBarLabel">MySQL</span>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <h2>Other Skills</h2>
        </div>
        <div class="col-md-3 col-md-offset-2">
          <h3>Programming Languages</h3>
          <ul>
            <li>Python</li>
            <li>C</li>
            <li>Java</li>
          </ul>
        </div>
        <div class="col-md-3 col-md-offset-2">
          <h3>Other Software</h3>
          <ul>
            <li>Microsoft Office</li>
            <li>Lyx</li>
            <li>Android Studio</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Container for the education page -->
  <div class="container contentContainer" id="educationPage">
    <div class="row">
      <div class="col-md-12">
        <h1>Education</h1>
      </div>
      <div class="col-md-5 col-md-offset-1">
        <h2>College Education</h2>
        <h3>University of California, Irvine</h3>
        <p>Bachelor in Computer Engineering, expected in 2016</p>
        <div class="accordion">
          <h4>Fall 2015 - Spring 2016</h4>
          <p>Starting this Fall!</p>
        </div>
        <br />
        <div class="accordion">
          <h4>Fall 2014 - Spring 2015</h4>
          <div>
            <h5>Major</h5>
            <ul>
              <li>Organization of Digital Computers</li>
              <li>Electrical Engineering Analysis</li>
              <li>Organization of Digital Computers Lab</li>
              <li>Introduction to Computer Networks</li>
              <li>Electronics I</li>
              <li>Electronics II</li>
              <li>Software Engineering Projects in C</li>
              <li>Continuous-Time Signals and Systems</li>
              <li>Discrete-Time Signals and Systems</li>
              <li>Object-Oriented Systems and Programming</li>
              <li>Processor Hardware and Software Interfaces</li>
            </ul>
          </div>
        </div>
        <br />
        <div class="accordion">
          <h4>Fall 2013 - Spring 2014</h4>
          <div>
            <h5>Major</h5>
            <ul>
              <li>Advanced C Programming</li>
              <li>Engineering Probability</li>
              <li>Network Analysis I</li>
              <li>Network Analysis II</li>
            </ul>
            <h5>General Education</h5>
            <ul>
              <li>Introduction to Differential Equations</li>
              <li>Introduction to Anthropology</li>
              <li>Introduction to Philosophy</li>
              <li>Discrete Time Mathematics</li>
              <li>Introduction to Art History</li>
              <li>Adolescent Psychology</li>
            </ul>
          </div>
        </div>
        <br />
        <div class="accordion">
          <h4>Fall 2012 - Spring 2013</h4>
          <div>
            <h5>Major</h5>
            <ul>
              <li>Introduction to Programming</li>
              <li>Introduction to Electrical Engineering</li>
              <li>Computer Systems and Programming in C</li>
              <li>Introduction to Digital Systems</li>
            </ul>
            <h5>General Education</h5>
            <ul>
              <li>Calculus</li>
              <li>Introduction to Physics</li>
              <li>Gender and Power Studies</li>
              <li>Critical Reading</li>
              <li>Multivariable Calculus</li>
              <li>Classical Physics</li>
              <li>Infinite Series and Linear Algebra</li>
              <li>Introduction to Psychology</li>
              <li>Argument and Research</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <h2>Online Education</h2>
          <h3><a href="https://www.udemy.com/complete-web-developer-course/" target="_blank">The Complete Web Developer Course</a></h3>
          <p>Currently Enrolled</p>
          <h3><a href="https://www.udemy.com/design-and-develop-a-killer-website-with-html5-and-css3/" target="_blank">
            Build Responsive Real World Websites with HTML5 and CSS3</a></h3>
          <p>Currently Enrolled</p>
          <h3><a href="https://www.udemy.com/learn-bootstrap-development-by-building-10-projects/" target="_blank">
            Learn Bootstrap Development By Building 10 Projects</a></h3>
          <p>Currently Enrolled</p>
          <h3><a href="https://www.udemy.com/the-complete-web-development-course-learn-by-building-apps/" target="_blank">
            Projects in PHP and MySQL</a></h3>
          <p>Currently Enrolled</p>
      </div>
      <div class="col-md-3 col-md-offset-2 centered moreButton">
        <a href="http://davidtranscend.com/portfolio.php" class="btn btn-customPortfolio btn-lg centered" id="firstPortfolioButton">View My Portfolio</a>
      </div>
      <div class="col-md-3 col-md-offset-2 centered moreButton">
        <a href="" class="btn btn-customPortfolio btn-lg centered" id="secondPortfolioButton">View My Resume</a>
      </div>
    </div>
  </div>

  <!-- Container for the footer -->
  <footer class="footer">
    <div class="container">
      <div class="col-md-3 col-md-offset-2">
        <h4>Navigation</h4>
        <ul>
          <li><a href="#homePage">Home</a></li>
          <li><a href="#aboutPage">About</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="http://davidtranscend.com/portfolio.php">Portfolio</a></li>
          <li><a href="">Resume</a></li>
          <li><a href="#" data-toggle="modal" data-target="#contactModal">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-md-offset-2">
        <h4>Connect With Me!</h4>
        <ul>
          <li><a href="https://github.com/davidlamt" target="_blank">GitHub</a></li>
          <li><a href="https://twitter.com/davidlamt" target="_blank">Twitter</a></li>
        </ul>
      </div>
      <div class="col-md-12">
        <p class="text-muted">Copyright &#169; 2015 <a href="http://www.davidtranscend.com/"><strong>www.davidtranscend.com</strong></a>
           - All rights reserved</p>
      </div>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!-- jQuery UI -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

  <!-- Reference to the custom JavaScript file -->
  <script type="text/javascript" src="creative.js"></script>

</body>
</html>
