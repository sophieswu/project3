<!DOCTYPE html>
<html lang="en">

  <?php include "inc/head.inc"; ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" href="portfolio.jquery.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="portfolio.jquery.js"></script>

  <script>
    $(document).ready(function() {
      $('.thumbs').portfolio({
        cols: 4,
        transition: 'slideDown'
      });
     });
  </script>
        
  <style>
    
    .thumbs {
      display: block;
    }
    
    .footer {
      display: block;
      width: 100%;
      margin-top: 50px;
      margin-bottom: 30px;
    }        

    .portfolio-content div {
      background-color: white;
    }
    </style>
  </head>

<body>

  <?php include "inc/nav.inc"; ?>
  <section>
  <div class="container content">

    <body>
        <center>
            <h1>Portfolio</h1>
        </center>
        <ul class="thumbs">
            <li><a href="#thumb1" class="thumbnail" style="background-image: url('images/thumb1.jpg')"><h4>GitHub</h4></a>
            </li>
            <li>
                <a href="#thumb2" class="thumbnail" style="background-image: url('images/thumb2.png')"><h4>LinkedIn</h4></a>
            </li>
            <li>
                <a href="#thumb3" class="thumbnail" style="background-image: url('images/thumb3.PNG')"><h4>Project 1</h4></a>
            </li>
            <li>
                <a href="#thumb4" class="thumbnail" style="background-image: url('images/thumb4.PNG')"><h4>Project 2</h4></a>
            </li>
            <li>
                <a href="#thumb5" class="thumbnail" style="background-image: url('images/thumb5.PNG')"><h4>JS Form</h4></a>
            </li>
            <li>
                <a href="#thumb6" class="thumbnail" style="background-image: url('images/thumb6.PNG')"><h4>Wordpress</h4></a>
            </li>
            <li>
                <a href="#thumb7" class="thumbnail" style="background-image: url('images/thumb7.PNG')"><h4>Phonebook</h4></a>
            </li>
            
        </ul>

        <div class="portfolio-content">
            <div id="thumb1">
                <h2>GitHub</h2>
                <p>Find Sophie Wu's finished projects on GitHub.</p>
                <a href="https://github.com/sophieswu" class="button">Go To</a>
            </div>

            <div id="thumb2">
                <h2>LinkedIn</h2>
                <p>Connect with Sophie Wu professionally on LinkedIn</p>
                <a href="https://www.linkedin.com/in/sophieswu" class="button">Go To</a>
            </div>

            <div id="thumb3">
                <h2>Project 1</h2>
                <p>A completed project done for CSC174, on the topic of important figures in computer science.</p>
                <a href="http://urcsc170.org/ksitthisack/team6_project1/" class="button">Go To</a>
            </div>

            <div id="thumb4">
                <h2>Project 2</h2>
                <p>A complete project done for CSC174, upgrading another group's website.</p>
                <a href="http://www.urcsc170.org/lli42/project02/" class="button">Go To</a>
            </div>

            <div id="thumb5">
                <h2>JavaScript Form</h2>
                <p>A functional JS form to collect information.</p>
                <a href="http://urcsc174.org/swu38/lab10/" class="button">Go To</a>
            </div>

            <div id="thumb6">
                <h2>Wordpress</h2>
                <p>A functional Wordpress site, filled with sample text and a calender plug-in.</p>
                <a href="http://www.urcsc174.org/swu38/lab11/" class="button">Go To</a>
            </div>

            <div id="thumb7">
                <h2>Phonebook</h2>
                <p>An online phonebook attached to a database to save information.</p>
                <a href="http://urcsc174.org/swu38/lab12/html-form.html" class="button">Go To</a>
            </div>

            
        </div>
        <center class="footer">
            <a href="https://github.com/arsenetoumani/jquery-portfolio">Find the JQuery plugin here.</a>
        </center>
    </body>

  </div>
  </section>

</body>

</html>
