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
    <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
    <div class="row">
    
</div>

<div class="row">

<div class="col-md-4">
<img class="img-fluid" src="<?php the_field('articleimage');?>" alt="a woman">
<h4 class="article-title"><?php the_field('articletitle'); ?></h4>
<p class="date" ><?php the_field('articledate'); ?></p>
<p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
<a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
</div>

<div class="col-md-4">
<img class="img-fluid" src="<?php the_field('articleimage2');?>" alt="Robot">
<h4 class="article-title"><?php the_field('articletitle2'); ?></h4>
<p class="date" ><?php the_field('articledate2'); ?></p>
<p class="article-p"><?php the_field('articleexcerpt2'); ?> </p>
<a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
</div>

<div class="col-md-4">
<img class="img-fluid" src="<?php the_field('articleimage3');?>" alt="Map">
<h4 class="article-title"><?php the_field('articletitle3'); ?></h4>
<p class="date" ><?php the_field('articledate3'); ?></p>
<p class="article-p"><?php the_field('articleexcerpt3'); ?> </p>
<a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
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