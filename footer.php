</div>
<footer class="footer mt-4">

  <div class="grid pt-3">
    <div class="col-50">
      <p>© Copyright <?php echo date("Y"); //display current year ?> -
      <?php bloginfo('title'); // display wp blog title ?> -</br> P.Iva 03820190126
      </br>Piazza Garibaldi, 3, 21043 Castiglione Olona VA, </br>
      </p>
    </div>
    <div class="col-50 text-right">
      <a href="https://www.facebook.com/caffedelborgocastiglioneolona/" target="_blank"><img class="facebook mb-2" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/logo-facebook.svg" alt="logo facebook"></a>
      <a href="https://instagram.com/caffedelborgocastiglioneolona?igshid=NTc4MTIwNjQ2YQ==" target="_blank"><img class="instagram mb-2" src="<?php echo get_stylesheet_directory_uri(); ?>/icons/logo-instagram.svg" alt="logo instagram"></a>
      </br>
      <a href="/privacy-policy"> Privacy Policy</a> - 
      <a href="/cookie-policy"> Cookie Policy</a>
    </div>
  </div>

</footer>

<?php wp_footer(); // insert scripts by WordPress at at end of the page ?>

</body>
</html>
