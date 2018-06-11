
<div class="mainposts-area">



  <?php if(have_posts()): while(have_posts()):the_post(); ?>


    <div class="post-detail">

      

      <div class="tag-area">
        <small>
          <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> >
         <?php the_category(','); ?> >
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        </small>

      <small><i class="far fa-calendar-alt fa-fw"></i><?php the_time('Y年n月j日'); ?></small>
          <div class="kizi-title"><h1><?php the_title(); ?></h1></div>




                                <div class="kizi-honbun">
                                    <?php the_content(); ?>
                                </div>

                                    <hr>
                                    <P class="post-tag"><?php the_tags('',''); ?><br /></P>







         <?php endwhile;?>
       <?php else : ?>
         <P>記事が見つかりませんでしたｗ</P>
       <?php endif; ?>



       <!--　記事本文下ウィジェットエリア -->
      <?php dynamic_sidebar('posts-detail-bottom'); ?>



   </div><!-- end post-detail -->

   <?php if (is_single()) :  // 投稿ページのときのみ関連記事を表示させる?>
     <!--関連記事出力エリア -->
     <?php get_template_part('get-category-posts'); ?>
  <?php endif; ?>


</div>
