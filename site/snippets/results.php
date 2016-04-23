<div class="results flex">
  <div class="flex-3">
    <?php snippet('searchparams') ?>
  </div>
  <div class="flex-9">
    <ul class="cleanList result_list">
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
