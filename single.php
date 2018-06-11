<?php get_header(); ?>

<!--ナビゲーション-->
<?php get_template_part('content','menu'); ?>




<!-- 投稿一覧の上　-->
<div class="ad-area">
  <?php dynamic_sidebar('post-top'); ?>
</div>


  <div class="main-contents-area">



      <!-- 左メインコンテンツ -->
    	<div class="content-area ">


        <?php dynamic_sidebar('posts-detail-top'); ?>

        <?php get_template_part('loopposts'); ?>

        <div class="ad-area">
            <?php dynamic_sidebar('post-bottom'); ?>
        </div>

      </div>




      <!-- 右サイドバー　-->
    	<div class="sidebar-area">
         <?php get_template_part('rightsidebar'); ?>
      </div>



  </div>


  <!--　投稿一覧エリア下　-->
  <div class="ad-area">
    <?php dynamic_sidebar('footer-top'); ?>
  </div>

  <?php get_footer(); ?>



  <?php //アクセス数の記録をする

    $count_key = 'postviews';
    $count = get_post_meta($post->ID,$count_key,true);
    $count++;
    update_post_meta($post->ID,$count_key,$count);

  ?>
