

<footer class="footer">

          <div class="footermenu">



                <div class="footer-nav">

                  <div class="container">
                    <div class="row">

                          <div class="col-sm-4">
                            <!-- フッター左のウィジェット　-->
                            <?php dynamic_sidebar('footer-left'); ?>

                          </div>

                          <div class="col-sm-4">
                            <!--　フッター中央のウィジェット　-->
                            <?php dynamic_sidebar('footer-center'); ?>

                          </div>

                          <div class="col-sm-4">
                            <!--　フッター右のウィジェット　-->
                            <?php dynamic_sidebar('footer-right'); ?>

                          </div>

                    </div>
                  </div>


                </div>



              <div class="footermenu">


                    <P><?php dynamic_sidebar('copyrigth'); ?></P>



             </div>

</footer>



</div><!-- wrapper -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/menu.js"></script>




<?php wp_footer(); ?>
</body>
</html>
