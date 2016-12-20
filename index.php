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

              <p>
                Welcome to the portfolio website of Sophie Wu. This is the project 3 site, and contains a visual portfolio, some accomplishments, and a contact page if you would like to reach her. 
                She is proficient with HTML, CSS, JavaScript, Java, and Python. As well, she has experience being a TA for high school and college students. 

              </p>

              <a href="http://www.urcsc170.org/swu38/" class="button">Labs Link</a>

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

    <!-- Second Section -->
    <section id="second"> 
    <div class="container">           
      <h1>Accomplishments</h1>

          <p>Sophie Wu graduated from Vestavia Hills High School in 2014 as an honors student. <img src="images/vhhs.png" alt="VHHS logo">
            Vestavia Hills High School (VHHS), founded in 1970, is a public high school in Vestavia Hills, Alabama, a suburb of Birmingham, Alabama, USA. It is part of the Vestavia Hills City Schools.
            Vestavia has 150 courses available on yearly basis. 
            Vestavia offers a number of AP courses (World History, U.S. History, European History, Human Geography, English Language & Lit., Calculus AB, Calculus BC, Computer Science Principles, Psychology, Physics 1, Statistics, Biology, Chemistry, French, Latin, Spanish, German, Government, Economics, Studio Art, Environmental Science, and Comparative Government). 
            Vestavia also offers Honors courses for all core subjects to all grades. 
          </p>

          

          <p>Sophie Wu currently attends the University of Rochester,<img src="images/uofr.svg" alt="U of R logo"> and is pursuing a statistics major and a computer science and Chinese minor. 
            The University of Rochester (commonly referred to as U of R or UR) is a private, nonsectarian, research university in Rochester, New York.
            The university grants undergraduate and graduate degrees, including doctoral and professional degrees. 
            The university has six schools and various interdisciplinary programs.
            The University of Rochester, across all of its schools and campuses, enrolls approximately 5,600 undergraduates and 4,600 graduate students. 
            Its 158 buildings house over 200 academic majors. 
            Additionally, Rochester (along with its affiliated Strong Health System) is the largest employer in the Greater Rochester area and the sixth largest employer in New York.
          </p>

          <p>Sophie Wu has also worked for Girls Who Code as a Teaching Assistant for a Summer Immersion Program. <img src="images/gwc.png" alt="GWC logo">
            Girls Who Code is a nonprofit organization which aims to support and increase the number of women in computer science. 
            The organization runs summer programs which teach computing and programming skills to high school girls.
          </p>

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
