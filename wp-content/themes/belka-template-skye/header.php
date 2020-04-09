<?php
$logo = carbon_get_theme_option('header_logo');
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="https://belkavpn.com/wp-content/uploads/2019/11/fav.png" type="image/png" sizes="16x16">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <style type="text/css">
    .your-IP {
      background-color: #151922;
      padding: 4px 0;
      text-align: center;
      color: #fff;
      font-size: 16px;
      font-family: Gordita,sans-serif;
      -webkit-font-smoothing: antialiased;
    }
    
  </style>

  <?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148798311-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-148798311-1');
   jQuery(window).scroll(function() {
        var mar_top = jQuery(window).scrollTop();
        if(mar_top >= 10) {
          jQuery(".your-IP").css("position", "absolute");
        } else {
          jQuery(".your-IP").removeAttr("style")
        }
    });
</script>

	
</head>
<body <?php body_class(); ?>>
<div class="your-IP">
  Your IP: <?php echo $_SERVER['REMOTE_ADDR'];?>
</div>
<header>

  <div class="header-container">
    <div class="header-container-inner container">
      <?php if ($logo): ?>
      <div class="logo">
        <a href="#home"><img src="<?php echo $logo ?>" alt="Logo"></a>
      </div>
      <?php endif; ?>
      <nav class="navbar-container">
        <?php
        wp_nav_menu([
            'theme_location' => 'top_first',
            'container' => null,
            'items_wrap' => '<ul class="first-nav d-flex" id="first-nav">%3$s</ul>'
        ]);
        ?>
        <?php
        wp_nav_menu([
            'theme_location' => 'top_second',
            'container' => null,
            'items_wrap' => '<ul class="second-nav d-flex" id="second-nav">%3$s</ul>'
        ]);
        ?>
        <ul id="dropdown-menu" class="hidden-nav" style="display: none !important;">

        </ul>
      </nav>
      <a id="btn-show" href="#" class="menu-btn">
        <span></span>
      </a>
    </div>
  </div>
</header>