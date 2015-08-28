<!-- @FOOTER -->
<div class="footer">
  <div class="midpage">
    <span>&#169; Copyright <?php echo date('Y'); ?> &#8226; by PSDchat.com</span>
    <div class="social-media">
      <div><img src="<?php bloginfo('template_directory'); ?>/Images/facebook.png" alt=""></div>
      <div><img src="<?php bloginfo('template_directory'); ?>/Images/google+.png" alt=""></div>
      <div><img src="<?php bloginfo('template_directory'); ?>/Images/twitter.png" alt=""></div>
      <div><img src="<?php bloginfo('template_directory'); ?>/Images/linkedin.png" alt=""></div>
    </div>
  </div>
</div>

<script src="<?php bloginfo('template_directory'); ?>/Scripts/portofolio.js"></script>
<script>
$(document).ready(function(){
  $('.modal img').modal_box();
});
</script>
<?php wp_footer(); ?>
</body>
</html>