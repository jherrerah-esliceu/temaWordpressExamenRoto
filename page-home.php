<?php get_header(); ?>
<h1>Esto es el home</h1>
<?php
        while(have_posts()){
            the_post();?>
            <h3>
            <?php the_content(); ?>
            </h3>
            <?php
        }
    ?>
<?php get_footer(); ?>