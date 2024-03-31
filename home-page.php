<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   <!--  Tells WordPress to include header.php -->
<section class= "container-fluid text-center aboutbg">
        <div class="container">
        <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
        <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
        <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

         

  <div class="blocker"></div>
  </div> <!-- container -->
</section> <!-- container fluid -->

<section class="container-fluid articlesbg">
    <div class="container">
    <h3 class="text-center">LATEST ARTICLES</h3>
    <div class="row">
    
</div>

<div class="row"><!--  a row that gives us access to the BS columns-->

<div class="col-md-4">
    <img class="img-fluid" src="http://170.187.231.66/~mesh1/wp-content/themes/starter_for_josh_site/images/port1.jpg">
    <h4 class="article-title">A PORTRAIT</h4>
    <p class="date">Friday 12 December 2020</p>
    <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
    </p>
    <a class="readmore" href="#">CONTINUE READING</a>
</div>

<div class="col-md-4">
    <img class="img-fluid" src="http://170.187.231.66/~mesh1/wp-content/themes/starter_for_josh_site/images/port2.jpg">
    <h4 class="article-title">A PORTRAIT</h4>
    <p class="date">Friday 12 December 2020</p>
    <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
    </p>
    <a class="readmore" href="#">CONTINUE READING</a>
</div>

<div class="col-md-4">
    <img class="img-fluid" src="http://170.187.231.66/~mesh1/wp-content/themes/starter_for_josh_site/images/port3.jpg">
    <h4 class="article-title">A PORTRAIT</h4>
    <p class="date">Friday 12 December 2020</p>
    <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
    </p>
    <a class="readmore" href="#">CONTINUE READING</a>
</div>

<div class="col-md-4">
    <h4>A GAMES DESIGN</h4>
    <p >12 December 2020</p>
    <p>STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
    </p>
    <a href="#" >CONTINUE READING</a>
</div>
    
</div><!-- row-->
</div><!-- container-->
</section><!-- container-fluid-->

<?php get_footer();?>   <!--  Tells WordPress to include footer.php -->