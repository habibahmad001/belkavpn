<?php
/*
Template Name: Главная страница
*/
?>
<?php get_header(); ?>

<?php
  $bgi = carbon_get_post_meta($post->ID, 'home_image');
  $title = carbon_get_post_meta($post->ID, 'home_welcome_title');
  $text_btn = carbon_get_post_meta($post->ID, 'home_welcome_btn');
  $text_right = carbon_get_post_meta($post->ID, 'home_info_title');
  $features_title = carbon_get_post_meta($post->ID, 'home_features_title');
  $features_text = carbon_get_post_meta($post->ID, 'home_features_text');
  $features = carbon_get_post_meta($post->ID, 'home_features');
  $pricing_title = carbon_get_post_meta($post->ID, 'home_pricing_title');
  $pricing_text = carbon_get_post_meta($post->ID, 'home_pricing_text');
  $currency = carbon_get_post_meta($post->ID, 'home_currency');
  $pricing = get_posts(['post_type' => 'pricing', 'numberposts' => 3, 'order' => 'ASC',]);
  $devices_title = carbon_get_post_meta($post->ID, 'home_devices_title');
  $devices = carbon_get_post_meta($post->ID, 'home_devices');
  $appstore = carbon_get_post_meta($post->ID, 'app_store');
  $googleplay = carbon_get_post_meta($post->ID, 'google_play');

  $is_show_chat = carbon_get_theme_option('is_show_chat');
  $chat_ava = carbon_get_theme_option('chat_ava');
  $chat_title = carbon_get_theme_option('chat_title');
  $chat_text = carbon_get_theme_option('chat_text');
?>

<main>
  <section id="home" class="first-section">
    <div class="parallax-window first-section" data-parallax="scroll" data-speed="0.4" data-image-src="<?= $bgi ?>">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-12">
            <h1 class="main-title"><?= $title ?></h1>
            <div class="d-flex align-items-center flex-column flex-lg-row get-started-container">
              <a class="second-btn mr-0 mr-lg-5" href="#download"><?= $text_btn ?></a>
              <p class="mt-lg-0 mt-4"><?= $text_right ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="features-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="title-container features-container">
            <span id="features" class="bg-title">FEATURES</span>
            <h2><?= $features_title ?></h2>
            <p class="mt-2"><?= $features_text ?></p>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <?php foreach ($features as $item): ?>
        <div class="col-md-4 col-12 d-flex flex-column align-items-center feature-item">
          <img width="300px" src="<?= $item['image'] ?>" alt="feature-image">
          <p class="text-center"><?= $item['text'] ?></p>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="row mt-100">
        <div class="col-lg-12 text-center">
          <div class="title-container features-container">
            <span id="pricing" class="bg-title">PRICING</span>
            <h2><?= $pricing_title ?></h2>
            <p class="mt-2"><?= $pricing_text ?></p>
          </div>
        </div>
        <div class="d-flex justify-content-center w-100">
          <div class="select-container d-flex flex-column align-items-center">
            <button class="select-button d-flex justify-content-between"><span data-selected-cur="$" id="selected-val">USD</span><span class="arrow-down"><img
                    src="<?php echo get_template_directory_uri() ?>/assets/img/Arrow.png" alt=""></span></button>
            <ul class="select-dropdown" id="main-select-dropdown">
              <?php foreach ($currency as $item): ?>
              <li><span data-cur="<?= $item['ico']; ?>"><?= $item['text'] ?></span></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="row pricing-wrapper">

        <?php $i = 1; ?>

        <?php foreach ($pricing as $item): ?>

        <?php $selected = carbon_get_post_meta($item->ID, 'pricing_selected'); ?>

        <div class="col-md-4 col-12 <?php if ($selected == 1) { echo 'high'; } else { echo 'standard'; } ?>">

          <div class="pricing-container">
            <div class="pricing-item <?php if ($selected == 1) echo 'pricing-center'; ?>">
              <div class="pricing-item-header d-flex flex-column align-items-center">
                <img width="400px" height="300px" src="<?php echo carbon_get_post_meta($item->ID, 'pricing_image') ?>" alt="Pricing image">
                <h2><?= $item->post_title ?></h2>
                <p><?php echo carbon_get_post_meta($item->ID, 'pricing_plane') ?></p>
              </div>
              <div class="pricing-item-middle"></div>
              <div class="pricing-item-body d-flex flex-column align-items-center">
                <?php $pr_curs = carbon_get_post_meta($item->ID, 'pricing_cur'); ?>
                <strong class="mb-4"><small class="currency">$</small><span class="money<?php echo $i; $i++; ?>" id="<?php echo 'money-'.$item->ID ?>" <?php foreach ($pr_curs as $cur) { ?> <?php echo 'data-'.$cur['cur']. '=' . $cur['price'] ?> <?php } ?> ><?php echo carbon_get_post_meta($item->ID, 'pricing_price') ?></span> <small class="month">/mo</small></strong>
                <?php $dels = carbon_get_post_meta($item->ID, 'pricing_dels') ?>
                <?php foreach ($dels as $del): ?>
                  <del class="mt-3"><?= $del['del'] ?></del>
                <?php endforeach; ?>
                <?php $strings = carbon_get_post_meta($item->ID, 'pricing_strings'); ?>
                <?php foreach ($strings as $str): ?>
                  <p class="mt-3"><?= $str['str'] ?></p>
                <?php endforeach; ?>
                <a class="second-btn mt-5" href="#download"><?php echo carbon_get_post_meta($item->ID, 'pricing_btn_text') ?></a>
              </div>

            </div>
          </div>

        </div>

        <?php endforeach; ?>

      </div>

      <div class="row mt-100">
        <div class="col-lg-12 text-center">
          <div class="title-container features-container">
            <span class="bg-title">DEVICES</span>
            <h2 id="devices"><?= $devices_title ?></h2>
            <p class=""></p>
          </div>
        </div>
      </div>
      <div class="row mt-95 devices-wrapper">
        <div class="col-md-6">
          <div class="apps-container d-flex flex-column">
            <?php $def_image = null; ?>
            <?php foreach ($devices as $item): ?>
            <?php if ($item['select'] == 1) $def_image = $item['big_image']; ?>
            <div class="app-item <?php if ($item['select'] == 1) echo 'app-item-selected'; ?> d-flex align-items-center" data-img="<?= $item['big_image'] ?>">
              <img class="mr-4" src="<?= $item['ico'] ?>" alt="">
              <div class="app-content d-flex flex-column">
                <h3><?= $item['title'] ?></h3>
                <p class="mt-2"><?= $item['description'] ?></p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="devices">
          <img id="device-image" src="<?= $def_image ?>" alt="device image">
        </div>
      </div>

      <div id="download" class="row justify-content-center mt-5">
        <a href="<?= carbon_get_post_meta($post->ID, 'app_store_url') ?>"><img src="<?= $appstore ?>" alt="app store"></a>
        <a class="ml-sm-4 ml-0" href="<?= carbon_get_post_meta($post->ID, 'google_play_url') ?>"><img width="200px" src="<?= $googleplay ?>" alt="google play"></a>
      </div>

    </div>
  </section>

</main>
<?php if($is_show_chat != 0): ?>
  <aside>
    <div role="button" class="chat-btn">
      <svg class="svg-close-btn" focusable="false" aria-hidden="true" width="14" height="14"><path d="M13.978 12.637l-1.341 1.341L6.989 8.33l-5.648 5.648L0 12.637l5.648-5.648L0 1.341 1.341 0l5.648 5.648L12.637 0l1.341 1.341L8.33 6.989l5.648 5.648z" fill-rule="evenodd"></path></svg>
      <svg class="svg-mail-btn" focusable="false" aria-hidden="true" viewBox="0 0 28 32"><path d="M28,32 C28,32 23.2863266,30.1450667 19.4727818,28.6592 L3.43749107,28.6592 C1.53921989,28.6592 0,27.0272 0,25.0144 L0,3.6448 C0,1.632 1.53921989,0 3.43749107,0 L24.5615088,0 C26.45978,0 27.9989999,1.632 27.9989999,3.6448 L27.9989999,22.0490667 L28,22.0490667 L28,32 Z M23.8614088,20.0181333 C23.5309223,19.6105242 22.9540812,19.5633836 22.5692242,19.9125333 C22.5392199,19.9392 19.5537934,22.5941333 13.9989999,22.5941333 C8.51321617,22.5941333 5.48178311,19.9584 5.4277754,19.9104 C5.04295119,19.5629428 4.46760991,19.6105095 4.13759108,20.0170667 C3.97913051,20.2124916 3.9004494,20.4673395 3.91904357,20.7249415 C3.93763774,20.9825435 4.05196575,21.2215447 4.23660523,21.3888 C4.37862552,21.5168 7.77411059,24.5386667 13.9989999,24.5386667 C20.2248893,24.5386667 23.6203743,21.5168 23.7623946,21.3888 C23.9467342,21.2215726 24.0608642,20.9827905 24.0794539,20.7254507 C24.0980436,20.4681109 24.0195551,20.2135019 23.8614088,20.0181333 Z"></path></svg>
    </div>
    <div class="chat-widget-container">
      <div class="chat-widget-header">
        <div class="chat-widget-header-inner">
          <h2><?= $chat_title ?></h2>
          <p class="mt-3"><?= $chat_text ?></p>
        </div>
      </div>
      <div class="chat-widget-content">
        <div class="chat-widget-content-inner">
          <div class="d-flex flex-column">
            <p>Leave us a message</p>
            <small class="mt-1">Back later today</small>
            <div class="d-flex align-items-center mt-2">
              <img class="mr-3" src="<?= $chat_ava ?>" alt="">
              <a class="second-btn" href="#"><svg class="mr-2" focusable="false" aria-hidden="true" width="16px" height="12px" viewBox="0 0 16 12"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g transform="translate(-257.000000, -529.000000)"><g transform="translate(100.000000, 187.000000)"><g transform="translate(94.000000, 0.000000)"><g transform="translate(16.000000, 169.000000)"><g transform="translate(24.000000, 159.000000)"><g transform="translate(23.000000, 14.000000)"><path d="M10.8401488,6.224907 L15.6817765,11.0665347 C15.51005,11.3499528 15.2722574,11.5748794 14.9768457,11.7328673 C14.6509198,11.9071744 14.3276335,12 13.4361148,12 L2.5638852,12 C1.67236646,12 1.34908022,11.9071744 1.0231543,11.7328673 C0.72877254,11.5754302 0.491608869,11.3515205 0.320022148,11.069497 L5.16278101,6.22673813 L7.26933188,7.54333242 C7.55321179,7.72075737 7.66665987,7.76662232 7.80054357,7.79679663 C7.93442727,7.82697094 8.06557273,7.82697094 8.19945643,7.79679663 C8.33334013,7.76662232 8.44678821,7.72075737 8.73066812,7.54333242 L10.8401488,6.224907 Z M11.7104341,5.6809787 L15.6940002,3.19124987 C15.7876675,3.1327078 15.9110576,3.16118243 15.9695997,3.25484974 C15.9894661,3.28663606 16,3.32336558 16,3.36084953 L16,9.4361148 C16,9.63606843 15.9953306,9.80743801 15.9861196,9.95666428 L11.7104341,5.6809787 Z M4.29249574,5.68280984 L0.0141588143,9.96114676 C0.0047635636,9.81087199 2.47328067e-17,9.63807348 0,9.4361148 L1.24567172e-16,3.36084953 C1.11040097e-16,3.25039258 0.08954305,3.16084953 0.2,3.16084953 C0.237483943,3.16084953 0.274213468,3.17138342 0.305999788,3.19124987 L4.29249574,5.68280984 Z M1,-2.48689958e-14 L15,-2.48689958e-14 C15.5522847,-2.49704488e-14 16,0.44771525 16,1 L16,1.8763932 C16,1.95214761 15.9571995,2.02140024 15.8894427,2.05527864 L8.4472136,5.7763932 C8.1656861,5.91715695 7.8343139,5.91715695 7.5527864,5.7763932 L0.110557281,2.05527864 C0.0428004752,2.02140024 3.97855298e-16,1.95214761 3.88578059e-16,1.8763932 L0,1 C-6.76353751e-17,0.44771525 0.44771525,-2.47675427e-14 1,-2.48689958e-14 Z"></path></g></g></g></g></g></g></g></svg> New message</a>
            </div>
          </div>
        </div>
      </div>
      <div class="chat-widget-content mt-3">
        <div class="chat-widget-content-inner">
          <div class="d-flex flex-column">
            <p class="small-text">Find an answer yourself</p>
            <form action="" class="d-flex mt-2 widget-form">
              <input type="text">
              <button type="submit"><span class="glyphicon glyphicon-chevron-right"></span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </aside>
<?php endif; ?>
<?php get_footer(); ?>