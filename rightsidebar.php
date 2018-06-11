<div class="start-right">
    <?php dynamic_sidebar('side-ad'); ?>
</div>



<?php if(wp_is_mobile()): ?>
  <!-- ここはスマホでも表示されます　-->
  <?php dynamic_sidebar('smp-sidebar'); ?>
<?php else: ?>
  <!-- ここはスマホでは表示されません -->
  <div class="sidebar-area">
      <?php dynamic_sidebar('sidebar'); ?>
  </div>
<?php endif; ?>

<?php dynamic_sidebar('sidebar-bottom-ad'); ?>
