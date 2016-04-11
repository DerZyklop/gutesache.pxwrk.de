<?php snippet('result-counter') ?>
<div class="results">
  <?php snippet('searchparams') ?>
  <ul class="result_list">
    <?php foreach ($pages->find('register')->children() as $item): ?>
      <?php snippet('result-list-item', array('company' => $item)) ?>
    <?php endforeach ?>
  </ul>
</div>
