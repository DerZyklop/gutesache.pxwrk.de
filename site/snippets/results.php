<div class="flex">
  <div class="flex-3">
    <?php snippet('searchparams') ?>
  </div>
  <div class="flex-9">
    <?php snippet("eg-search-input") ?>

    <?php $results = 56; ?>
    <?php $btn_text = "" ?>
    <?php if ($results) : ?>
      <?php $btn_text += $results." "; ?>
    <?php endif; ?>
    <?php $btn_text = "Die Suche ergab <code>".$btn_text."</code> Treffer"; ?>
    <p><?= $btn_text ?></p>

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
