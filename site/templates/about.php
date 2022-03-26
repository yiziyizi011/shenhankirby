<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="textwrapper">
  <div class="about">
    <?php echo $page->about()->kirbytext() ?>
  </div>
  <div class="education">
    <?php echo $page->education()->kirbytext() ?>
  </div>
  <div class="solo">
    <?php echo $page->solo()->kirbytext() ?>
  </div>
  <div class="group">
    <?php echo $page->group()->kirbytext() ?>
  </div>

</div>



<?php snippet('footer') ?>
