<div class="menu">

  <div class="menu-item">
    <a href="<?= $site->find('exhibitions')->url() ?>"><?= $site->title() ?></a>
  </div>
  <div class="menu-item">
    <a href="<?= $site->find('about')->url() ?>"><?= $site->find('about')->title() ?></a>
  </div>
  <?php foreach ($site->find("works")->children() as $year) : ?>
    <div class="menu-item">
      <a href="<?= $year->url() ?>"><?= $year->title() ?></a>
    </div>
  <div class="menu-item">
    <a href="<?= $site->find('contact')->url() ?>"><?= $site->find('contact')->title() ?></a>
  </div>
  <?php endforeach; ?>

</div>
