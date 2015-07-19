<!doctype html>
<html>
<head>
    <title>David Tran - Developer</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	  <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Reference to the custom CSS file -->
    <link rel="stylesheet" type="text/css" href="creative.css" />

</head>

<body data-spy="scroll" data-target=".navbar-collapse">

  <!-- The navigation bar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="http://davidtranscend.com/" class="navbar-brand">&#60;david.tran&#47;&#62;</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li><a href="http://davidtranscend.com/">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-epanded="false">About
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://davidtranscend.com/#aboutPage">About</a></li>
                <li><a href="http://davidtranscend.com/#knowledgePage">Knowledge</a></li>
                <li><a href="http://davidtranscend.com/#educationPage">Education</a></li>
              </ul>
          </li>
          <li><a href="">Blog</a></li>
          <li class="active"><a href="http://davidtranscend.com/portfolio.php">Portfolio</a></li>
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

  <!-- Container for web development portfolio -->
  <div class="container contentContainer" id="webDevPage">
    <div class="row">
      <div class="col-md-12 centered">
        <h1>Web Development</h1>
        <h2>Personal Projects</h2>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="images/spytraining-preview.png" alt="">
          <div class="caption">
            <h3>Spy Training</h3>
            <p>A simple reaction game.</p>
            <p class="centered">
              <a href="http://davidtranscend.com/portfolio/SpyTraining" class="btn btn-primary" role="button" target="_blank">View Project</a>
              <a href="https://github.com/davidlamt/Spy-Training" class="btn btn-default" role="button" target="_blank">View Source Code</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="images/coderunner-preview.png" alt="">
          <div class="caption">
            <h3>CodeRunner</h3>
            <p>A simple code player.</p>
            <p class="centered">
              <a href="http://davidtranscend.com/portfolio/CodeRunner" class="btn btn-primary" role="button" target="_blank">View Project</a>
              <a href="https://github.com/davidlamt/CodeRunner" class="btn btn-default" role="button" target="_blank">View Source Code</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="images/myapp-preview.png" alt="">
          <div class="caption">
            <h3>MyApp</h3>
            <p>An application landing page.</p>
            <p class="centered">
              <a href="http://davidtranscend.com/portfolio/MyApp" class="btn btn-primary" role="button" target="_blank">View Project</a>
              <a href="https://github.com/davidlamt/MyApp" class="btn btn-default" role="button" target="_blank">View Source Code</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="images/contactform-preview.png" alt="">
          <div class="caption">
            <h3>Contact Form</h3>
            <p>A simple contact form.</p>
            <p class="centered">
              <a href="http://davidtranscend.com/portfolio/ContactForm" class="btn btn-primary" role="button" target="_blank">View Project</a>
              <a href="https://github.com/davidlamt/ContactForm" class="btn btn-default" role="button" target="_blank">View Source Code</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="images/weatherpredictor-preview.png" alt="">
          <div class="caption">
            <h3>Weather Predictor</h3>
            <p>A weather predictor application.</p>
            <p class="centered">
              <a href="http://davidtranscend.com/portfolio/WeatherPredictor" class="btn btn-primary" role="button" target="_blank">View Project</a>
              <a href="https://github.com/davidlamt/WeatherPredictor" class="btn btn-default" role="button" target="_blank">View Source Code</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="images/secretdiary-preview.png" alt="">
          <div class="caption">
            <h3>Secret Diary</h3>
            <p>A diary application that saves users' entries.</p>
            <p class="centered">
              <a href="http://davidtranscend.com/portfolio/SecretDiary" class="btn btn-primary" role="button" target="_blank">View Project</a>
              <a href="https://github.com/davidlamt/SecretDiary" class="btn btn-default" role="button" target="_blank">View Source Code</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Container for the footer -->
  <footer class="footer">
    <div class="container">
      <div class="col-md-3 col-md-offset-2">
        <h4>Navigation</h4>
        <ul>
          <li><a href="http://davidtranscend.com/">Home</a></li>
          <li><a href="http://davidtranscend.com/#aboutPage">About</a></li>
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

  <!-- Reference to jQuery -->
  <script src="js/jquery-1.11.3.min.js"></script>

  <!-- jQuery UI -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Link to the toastr files -->
  <link href="toastr/toastr.css" rel="stylesheet"/>
  <script src="toastr/toastr.js"></script>

  <!-- Reference to the custom JavaScript file -->
  <script type="text/javascript" src="creative.js"></script>

</body>
</html>
