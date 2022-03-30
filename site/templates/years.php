<?php snippet('header') ?>
<?php snippet('menu') ?>

<?= css('assets/css/year.css') ?>
<?= js('assets/js/jquery.zoom.min.js') ?>

<div class="swiper mySwiper works">
  <div class="swiper-wrapper works-wrapper">
    <?php foreach($page->children() as $project) : ?>
      <div class="swiper-slide" data-info="<?= $project->info()->kirbytext() ?>">
        <?php foreach($project->images() as $image): ?>
        <figure class="zoom">
          <img src="<?= $image->url() ?>" alt="">
        </figure>
        <?php endforeach ?>
      </div>
    <?php endforeach ?>

  </div>
</div>

<div class="info">
  <?= $page->children()->first()->info()->kirbytext() ?>
</div>

<div class="swiper-button-next">
  <svg width="29" height="67" viewBox="0 0 29 67" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M1.8327 3.48882L1.24991 3.69575L1.57431 4.22227L19.6127 33.5L1.57431 62.7777L1.24991 63.3042L1.8327 63.5112L7.3527 65.4712L7.73069 65.6054L7.94368 65.2655L27.6837 33.7655L27.8501 33.5L27.6837 33.2345L7.94368 1.73449L7.73069 1.39461L7.3527 1.52882L1.8327 3.48882Z" stroke="black"/>
  </svg>
</div>
<div class="swiper-button-prev">
  <svg width="29" height="67" viewBox="0 0 29 67" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M27.4273 63.5112L28.0101 63.3042L27.6857 62.7777L9.64729 33.5L27.6857 4.22227L28.0101 3.69575L27.4273 3.48882L21.9073 1.52882L21.5293 1.39461L21.3163 1.73449L1.57633 33.2345L1.40995 33.5L1.57633 33.7655L21.3163 65.2655L21.5293 65.6054L21.9073 65.4712L27.4273 63.5112Z" stroke="black"/>
  </svg>
</div>

<?php snippet('footer') ?>
