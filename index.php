<?php get_header(); ?>
     
     
     
         <div class="main">
             
      
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
       <div class="post"> 
       <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
       <h6>posted on <?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></h6>
       
           
       
       <div class="entry">
           
           <?php the_content(); ?>
           
       </div>
       
       </div>
       
       <?php 
       endwhile;
       else:
       
       ?>
       
       
       <p>Sorry, but we couldn't find any posts.</p>
       
       <?php endif; ?>
       
       </div>
       
       <?php get_sidebar(); ?>
       
       
       <br />
       
       </div>
       
       
       <?php get_footer(); ?>
 