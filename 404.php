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

        <h4>エラーが起きました。ページが見つかりません。</h4>

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
