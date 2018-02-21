<?php
/**
 * The template for displaying the footer.
 *
 * @package anissa
 */

?>


<footer id="colophon" role="contentinfo">
  <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>

    <hr>
    

 <!-- SIGN UP
    =========================================-->
    <section class="container mt-5">
      <div class="row">
          <div class="widget-area col text-center">
           <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php endif; ?>
          </div>
      </div>
      <div class="text-center">

        <hr class="footer-hr">

      <ul id="footerSocial">
        <li>
          <a href="https://www.facebook.com/PrivateCollectionsSF/" target="_blank">
            <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/enterprise_youth/" target="_blank">
            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/EFY_SF" target="_blank">
            <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/company/81612/" target="_blank">
            <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
    </div>

    </section>


 <!-- ENTERPRISE
    =========================================--> 
    <section class="container-fluid">
      <div class="row text-center">
          <div class="col-sm-6 mt-5">
           <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <?php dynamic_sidebar( 'footer-2' ); ?>
            <?php endif; ?>
          </div>
          <div class="col-sm-6 logo mt-3">
           <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
            <?php dynamic_sidebar( 'footer-3' ); ?>
            <?php endif; ?>
          </div>
      </div>
    </section>


  <?php endif; ?>

</footer>

<?php wp_footer(); ?>

</body>
</html>



