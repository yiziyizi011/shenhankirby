<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="about">
  <?php echo $page->about()->kirbytext() ?>
  <?php echo $page->education()->kirbytext() ?>
  <?php echo $page->solo()->kirbytext() ?>
  <?php echo $page->group()->kirbytext() ?>
</div>



<?php snippet('footer') ?>
