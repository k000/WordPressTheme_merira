

<aside class="near near-thumb">

<h4><i class="fas fa-columns fa-fw"></i>関連記事</h4>

<ul>

<?php
  $categories = get_the_category();
  foreach($categories as $category):
    $related_posts = get_posts(array('category__in' => array($category->cat_ID), 'exclude' => $post->ID, 'numberposts' => $post->ID, 'numberposts' => 6));

    global $post;

    if($related_posts): ?>


    <?php foreach($related_posts as $post): ?>


      <li>

          <a href="<?php the_permalink(); ?>">

          <!--  <div class="thumb" style="background-image: url(<?php echo get_the_post_thumbnail($related_post->ID,'fill'); ?>)"></div> -->


            <div class="thumb" style="background-image: url(<?php echo mythumb( 'thumbnail' ); ?>)"></div>


            <div class="text">
                   <?php the_title(); ?>
            </div>

          </a>

<small><i class="far fa-calendar-alt fa-fw"></i><?php the_time('Y年n月j日'); ?></small>


     </li>

  <?php endforeach; ?>

  <?php   wp_reset_postdata(); ?>

</ul>

<?php endif; endforeach; ?>
