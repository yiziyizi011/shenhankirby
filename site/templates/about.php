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

<div class="textwrapperCN">
  <div class="aboutCN">
    <?php echo $page->aboutcn()->kirbytext() ?>
  </div>
  <div class="educationCN">
    <?php echo $page->educationcn()->kirbytext() ?>
  </div>
  <div class="soloCN">
    <?php echo $page->solocn()->kirbytext() ?>
  </div>
  <div class="groupCN">
    <?php echo $page->groupcn()->kirbytext() ?>
  </div>

</div>



<?php snippet('footer') ?>
