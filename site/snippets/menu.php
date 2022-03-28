<div class="menu">

  <div class="menu-item <?php e($site->find('exhibitions')->isActive(), ' active') ?>">
    <a href="<?= $site->find('exhibitions')->url() ?>"><?= $site->title() ?></a>
  </div>
  <div class="menu-item <?php e($site->find('about')->isActive(), ' active') ?>">
    <a href="<?= $site->find('about')->url() ?>"><?= $site->find('about')->title() ?></a>
  </div>


  <?php foreach ($site->find("works")->children() as $year) : ?>
    <div class="menu-item<?php e($year->isActive(), ' active') ?>">
      <a href="<?= $year->url() ?>"><?= $year->title() ?></a>
    </div>
  <?php endforeach; ?>
  <div class="menu-item <?php e($site->find('contact')->isActive(), ' active') ?>">
    <a href="<?= $site->find('contact')->url() ?>"><?= $site->find('contact')->title() ?></a>
  </div>

</div>
