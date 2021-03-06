<?php global $theme; ?>
<header class="site-header">
  <section class="site-header--top">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="tagline text-center">
            <?php bloginfo('description'); ?>
          </div>
        </div>
        <div class="col-md-6">
            <div class="search-form float-right">
              <form class="form-inline float-right" method="get" action="<?= home_url( '/' ); ?>">
                <input class="form-control form-control-sm" type="search" placeholder="Search" aria-label="Search" name="s" id="s">
              </form>
            </div>
            <ul class="social-media float-right">
              <?php foreach ($theme->customizer->getSocialOptions() as $socialMedia) : ?>
                <?php if (get_option($socialMedia) && get_option($socialMedia) !== '') : ?>
                    <li class="social-media--item"><a href="<?= get_option($socialMedia); ?>" target="_blank"><i class="social-media--icon icon-<?= $socialMedia ?>"></i></a>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="site-header--main">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-2">
          <?php if (get_option('header_logo')) : ?>
          <div class="site-logo ml-auto mr-auto">
            <a href="/" class="a-img">
              <img src="<?= get_option('header_logo'); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
          </div>
          <?php endif; ?>
        </div>
        <div class="col-md-10">
          <h1 class="site-title text-center">
            <?php if (get_option('header_title')) : ?>
              <?= (get_option('header_title')) ?>
            <?php else : ?>
              <?php bloginfo('name'); ?>
            <?php endif; ?></h1>
        </div>
      </div>
    </div>
  </section>
</header>
<?php

get_template_part('partials/nav', 'site');

?>
<main class="clearfix">