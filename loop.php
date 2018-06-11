

<div class="mainposts-area">



  <?php if ( have_posts() ) : ?>
     <?php while( have_posts() ) : the_post(); ?>




            <div class="mainposts-loop">



                         <div class="thumb">
                           <div class="main-post">

                               <figure class="snip1352">
                                 <a href="<?php the_permalink(); ?>">
                                   <img src="<?php echo mythumb( 'full' ); ?>">
                                 </a>
                               </figure>

                             <div class="main-post-text"><?php the_category(); ?></div>
                           </div>
                         </div>

                              <a href="<?php the_permalink(); ?>"><P><?php the_title(); ?></P></a>
                             <P class="post-tag"><?php the_tags('',''); ?><br />
                               <small><i class="far fa-calendar-alt fa-fw"></i><?php the_time('Y年n月j日'); ?></small>
                             </P>







                </div>

     <?php endwhile;?>
   <?php else : ?>
     <P>記事が見つかりませんでしたｗ</P>
   <?php endif; ?>


</div>


 <?php
   //Pagenation
   if (function_exists("pagination")) {
   pagination($additional_loop->max_num_pages);
   }
   ?>
