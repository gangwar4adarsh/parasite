<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>HOME</title>
  </head>
  <body>

    <div class="row border">

      <div class="border border-danger">
           <?php

           $custom_logo_id = get_theme_mod( 'custom_logo' );
           $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

           if ( has_custom_logo() ) { ?>
                <img src="<?php echo esc_url( $logo[0] ) ?>" >
           <?php } else {
                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
        }?>
      </div>

      <div class="border border-success">
        <?php wp_nav_menu("menu-1") ?>
      </div>
    </div>






    <h1>Hello, Tehri</h1>
    <h2>
      <?php
      while ( have_posts() ) : the_post(); ?>
        <div class="entry-content-page">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="800" height="333">
          </div>
        <?php endwhile; ?>

    
  </h2>

  <h3>New Tehri is a city and a municipal board in Tehri Garhwal District in the Indian state of Uttarakhand. It is the administrative seat of Tehri Garhwal District. This urban municipality area has 11 wards, from Vidhi Vihar to Vishwakarma Puram (Koti colony). Mrs Seema Krishali is chairperson of Nagar Palika tehri, She is the First Lady Chairperson of Tehri Municipal corporate. She won this position as an independent. defeating candidates of Nationals parties like congress. Shri Umesh Gusain of BJP was chairman of the Tehri Nagarpalika before Mrs Seema krishali. He is the only Chairman who won this seat two times consecutively in 61 years. Tehri now comes under the Tehri assembly seat of Uttarakhand and the Tehri Lok Sabha seat of India, which are represented by Dhan Singh Negi (Bhartiya Janta Party) and Mala Rajya Laxmi Shah (Bhartiya Janta Party) respectively</h3>
</body>





    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>