<?php snippet('header') ?>
<?php snippet('menu') ?>

<?= css('assets/css/home.css') ?>

<div class="swiper mySwiperHome">
  <div class="swiper-wrapper">

<?php foreach($page->children() as $exhi) : ?>

    <?php foreach($exhi->images() as $image): ?>
      <div class="swiper-slide" data-info="<?= $exhi->info()->kirbytext() ?>">
        <figure>
          <img src="<?= $image->url() ?>" alt="">
        </figure>
        <div class="info">
          <div class="info_text">
            <div><?= $exhi->description()->kirbytext() ?></div>
          </div>
          <div class="info_back">
            <!-- click here to make everything go away -->
          </div>
          <button class="info_b" type="button" name="Info">info</button>
        </div>
      </div>


    <?php endforeach ?>
<?php endforeach ?>


  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

<div class="infohome">
  <?= $page->children()->first()->info()->kirbytext() ?>
</div>


<?php snippet('footer') ?>
