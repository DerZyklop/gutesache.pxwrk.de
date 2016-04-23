<div class="results flex">
  <div style="flex: 1">
    <?php snippet('searchparams') ?>
  </div>
  <div style="flex: 3">
    <ul class="cleanList result_list">
      <?php foreach ($pages->find('register')->children() as $item): ?>
        <?php snippet('result-list-item', array('company' => $item)) ?>
      <?php endforeach ?>
    </ul>
  </div>
</div>


<div class="overlay-placeholder hide">
  <div class="inner-wrap close-overlay">
    <div class="inner">
    </div>
  </div>
</div>
