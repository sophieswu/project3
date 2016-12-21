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
    body {
      font-family: arial;
    }
    
    hr {
        margin-bottom: 40px;
    }
    
    h1 {
         margin-bottom: 0px;
        margin-top: 30px;
    }
    
    h3 {
      margin-top: 10px;
      font-weight: normal;
      color: #a6a6a6;
    }
            
    p {
      line-height: 25px;
    }
    
    a.button {
      text-decoration: none;
    }
    
    .button {
      padding: 14px 22px;
      background-color: #cecece;
      color: #333333;
      border-radius: 3px;
      margin-bottom: 20px;
      display: inline-block;
    }
    
    .button:hover {
      background-color: #e1e1e1;
    }
    
    .thumbs {
      display: block;
    }
    
    .footer {
      display: block;
      width: 100%;
      margin-top: 50px;
      margin-bottom: 30px;
    }        }
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
            <li><a href="#thumb1" class="thumbnail" style="background-image: url('images/thumb1.jpg')">
                <h4>Web development</h4></a>
            </li>
            <li>
                <a href="#thumb2" class="thumbnail" style="background-image: url('images/thumb2.jpg')"><h4>SEO</h4></a>
            </li>
            <li>
                <a href="#thumb3" class="thumbnail" style="background-image: url('images/thumb3.jpg')"><h4>Web design</h4></a>
            </li>
            <li>
                <a href="#thumb4" class="thumbnail" style="background-image: url('images/thumb4.jpg')"><h4>Project management</h4></a>
            </li>
            <li>
                <a href="#thumb5" class="thumbnail" style="background-image: url('images/thumb5.jpg')"><h4>Graphic design</h4></a>
            </li>
            <li>
                <a href="#thumb6" class="thumbnail" style="background-image: url('images/thumb6.jpg')"><h4>SEO</h4></a>
            </li>
            <li>
                <a href="#thumb7" class="thumbnail" style="background-image: url('images/thumb7.jpg')"><h4>Graphic design</h4></a>
            </li>
            <li>
                <a href="#thumb8" class="thumbnail" style="background-image: url('images/thumb8.jpg')"><h4>Graphic design</h4></a>
            </li>
            <li>
                <a href="#thumb9" class="thumbnail" style="background-image: url('images/thumb9.jpg')"><h4>Web development</h4></a>
            </li>
            <li>
                <a href="#thumb10" class="thumbnail" style="background-image: url('images/thumb10.jpg')"><h4>Web design</h4></a>
            </li>
            <li>
                <a href="#thumb11" class="thumbnail" style="background-image: url('images/thumb11.jpg')"><h4>Graphic design</h4></a>
            </li>
            <li>
                <a href="#thumb12" class="thumbnail" style="background-image: url('images/thumb12.jpg')"><h4>Fron-end development</h4></a>
            </li>
            <li>
                <a href="#thumb13" class="thumbnail" style="background-image: url('images/thumb13.jpg')"><h4>Web design</h4></a>
            </li>
            <li>
                <a href="#thumb13" class="thumbnail" style="background-image: url('images/thumb14.jpg')"><h4>Web design</h4></a>
            </li>
        </ul>

        <div class="portfolio-content">
            <div id="thumb1">
                <div class="media"><iframe src="//player.vimeo.com/video/69666609?byline=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                <h1>Web development</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer mollis nisi sit amet metus venenatis, ut congue turpis aliquet. Pellentesque eget elit sollicitudin, feugiat felis in, ornare diam. Morbi blandit sapien nibh, eu pulvinar tortor luctus nec. Aenean lobortis lacus cursus gravida adipiscing. Praesent in odio porta, placerat felis id, viverra est. Nam magna quam, tincidunt eget augue in, aliquet tristique ipsum.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb2">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>SEO</h1>
                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Integer a posuere tortor. Praesent malesuada mauris massa, non blandit neque tempus nec. Quisque fermentum nunc non hendrerit tempus.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb3">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Web design</h1>
                <p>Ut condimentum eros bibendum metus lacinia, ac condimentum justo faucibus. Nam nec dui convallis, sodales sapien in, gravida justo. Pellentesque pulvinar massa a nisl iaculis, quis iaculis elit tincidunt.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb4">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Project management</h1>
                <p>Suspendisse cursus commodo elit, at tempus felis hendrerit vel. Cras condimentum aliquam mauris at blandit. Pellentesque ac velit iaculis, lobortis nibh id, ultricies ante. Fusce vel urna justo. Maecenas rhoncus vel ligula eget feugiat. Maecenas blandit risus eros, vel imperdiet augue dapibus vitae.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb5">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb5">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb5">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb5">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb6">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb7">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb8">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb9">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb10">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb11">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb12">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb13">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>

            <div id="thumb14">
                <div class="media"><img src="images/media.jpg"/></div>
                <h1>Graphic design</h1>
                <p>Vestibulum gravida, ante ut consectetur dictum, dolor sapien pretium elit, sed tincidunt augue sem a lorem. Vivamus quis neque pharetra, consequat dolor vel, venenatis urna. Praesent diam quam, fermentum vel tortor eget, pulvinar tincidunt velit.</p>
                <a href="#" class="btn btn-primary">Learn More</a>
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
