<!-- footer -->
<footer class="section footer">
  <div class="footer-bottom">
    <div class="container">
      <div class="col-md-12">
        <p>
        <ul class="footer-share">
          <?php wp_nav_menu( array( 
            'theme_location' => 'social',
            'menu_class' => 'footer-share'
            )); 
          ?>
        </ul>
        </p>
        <p>© 2020<br>
          Made with <i class="fa fa-heart pulse"></i> by <a href="http://www.designstub.com/" target="_blank">Designstub</a><br>
          Resesigned by <a href="#">Marcelo Vieira</a>
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- footer --> 

<?php wp_footer(); ?>

</body>
</html>