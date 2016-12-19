<!DOCTYPE html>
<html lang="en">

  <?php include "inc/head.inc"; ?>

<body>

  <?php include "inc/nav.inc"; ?>

    <!-- Top Section -->
    <section id="first">
        <div class="container">

            <h1>Sophie Wu</h1>

            <div class="content">

              <p class="text">Welcome to the portfolio website of Sophie Wu. This is the project 3 site, and contains a visual portfolio, some accomplishments, and a contact page if you would like to reach me. Please enjoy.
              </p>

              <a href="https://en.wikipedia.org/wiki/Cat" class="button">Source</a>

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

    <!-- Second Section -->
    <section id="second">            
      <h1>Accomplishments</h1>
        <div class="container">


       </div><!-- .container -->

    </section>

<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>

</body>

</html>
