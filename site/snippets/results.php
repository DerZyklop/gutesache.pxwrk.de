<div class="flex">
  <div class="flex-3">
    <?php snippet('searchparams') ?>
  </div>
  <div class="flex-9">

    <?php snippet("eg-search-input") ?>

    <ul class="cleanList results">
      <?php foreach ($pages->find('register')->children() as $item): ?>
        <?php snippet('result-list-item', array('company' => $item)) ?>
      <?php endforeach ?>
    </ul>
  </div>
</div>


<div class="overlay-placeholder hide">
  <div class="inner-wrap close-overlay">
    <section class="inner">
    </section>
  </div>
</div>
