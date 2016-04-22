<div class="results two-col">
  <div class="col-1">
    <?php snippet('searchparams') ?>
  </div>
  <div class="col-2">
    <ul class="result_list">
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
