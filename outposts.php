<?php if ( have_posts() ) : ?>
   <?php while( have_posts() ) : the_post(); ?>


  <div class="col-xs-12 col-sm-6 col-md-6">
     <div class="col_box clearfix posts-area">
         <div class="col-xs-6 col-sm-12">

                         <div class="thumb">
                           <div class="main-post">
                               <figure class="snip1352">

                                 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full'); ?></a>
                               </figure>
                             <div class="main-post-text"><?php the_category(); ?></div>
                           </div>
                         </div>

           </div>

                         <div class="col-xs-6 col-sm-12">
                             <P><?php the_title(); ?></P>
                             <P class="post-tag"><?php the_tags('',''); ?><br />
                               <small><i class="far fa-calendar-alt fa-fw"></i><?php the_time('Y年n月j日'); ?></small>
                             </P>
                         </div>

     </div>
 </div>


   <?php endwhile;?>
 <?php else : ?>
   <P>記事が見つかりませんでしたｗ</P>
 <?php endif; ?>




 <?php
   //Pagenation
   if (function_exists("pagination")) {
   pagination($additional_loop->max_num_pages);
   }
   ?>
