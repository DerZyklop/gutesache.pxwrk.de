<?php snippet('result-counter') ?>
<div class="results">
  <?php snippet('searchparams') ?>
  <ul class="result_list">
    <?php for ($i=0; $i < 14; $i++) : ?>
      <?php snippet('result-list-item') ?>
    <?php endfor; ?>
  </ul>
</div>
