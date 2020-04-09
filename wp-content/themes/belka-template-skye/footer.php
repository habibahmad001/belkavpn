<?php
$footer_logo = carbon_get_theme_option('footer_logo');
$und1 = carbon_get_theme_option('footer_under_logo1');
$und2 = carbon_get_theme_option('footer_under_logo2');
$und2_url = carbon_get_theme_option('footer_under_logo2_url');

$social_title = carbon_get_theme_option('footer_social_title');
$social = carbon_get_theme_option('footer_social');
?>

<footer class="footer">
  <div class="footer-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12 d-flex flex-column align-items-lg-start align-items-center">
          <?php if ($footer_logo): ?>
            <a class="footer-logo" href="/"><img src="<?= $footer_logo ?>" alt="Footer Logo"></a>
          <?php endif; ?>
          <p class="mt-2"><?=  $und1 ?></p>
          <a class="mt-2" href="<?= $und2_url ?>"><small><?= $und2 ?></small></a>
        </div>
        <div class="col-lg-2 col-6 mt-lg-0 mt-4 d-flex flex-column align-items-center align-items-lg-start">
          <h3>PRODUCT</h3>
          <?php
          wp_nav_menu([
              'theme_location' => 'footer_products',
              'container' => null,
              'items_wrap' => '<ul class="mt-md-4 mt-3 d-flex flex-column align-items-center align-items-lg-start text-center footer-menu">%3$s</ul>'
          ]);
          ?>
        </div>
        <div class="col-lg-2 col-6 mt-lg-0 mt-4 d-flex flex-column align-items-center align-items-lg-start">
          <h3>APPS</h3>
          <?php
          wp_nav_menu([
              'theme_location' => 'footer_apps',
              'container' => null,
              'items_wrap' => '<ul class="mt-md-4 mt-3 d-flex flex-column align-items-center align-items-lg-start text-center footer-menu">%3$s</ul>'
          ]);
          ?>
        </div>
        <div class="col-lg-2 mt-lg-0 mt-4 offset-lg-0 offset-7 col-4 d-flex flex-column align-items-center align-items-lg-start">
          <h3 class="text-center">BELKA AT WORK</h3>
          <?php
          wp_nav_menu([
              'theme_location' => 'footer_belka',
              'container' => null,
              'items_wrap' => '<ul class="mt-md-4 mt-3 d-flex flex-column align-items-center align-items-lg-start text-center footer-menu">%3$s</ul>'
          ]);
          ?>
        </div>
        <div class="col-lg-2 mt-lg-0 mt-4 offset-lg-0 offset-1 col-4 d-flex flex-column align-items-center align-items-lg-start">
          <h3 class="text-center"><?= $social_title ?></h3>
          <ul class="mt-md-4 mt-3 d-flex justify-content-start">
            <?php foreach ($social as $item): ?>
              <li class="mr-2"><a href="<?= $item['url'] ?>"><img src="<?= $item['ico'] ?>" alt="icon"></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
		  
      </div>
		
		<a href="https://www.producthunt.com/posts/belka-vpn-android-app?utm_source=badge-featured&utm_medium=badge&utm_souce=badge-belka-vpn-android-app" target="_blank"><img src="https://api.producthunt.com/widgets/embed-image/v1/featured.svg?post_id=169092&theme=light" alt="Belka VPN Android App - Newest && Secured VPN | Product Hunt Embed" style="width: 250px; height: 54px;" width="250px" height="54px" /></a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>