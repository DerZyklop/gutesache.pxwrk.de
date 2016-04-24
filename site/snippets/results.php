<div class="flex">
  <div class="flex-3">
    <?php snippet('searchparams') ?>
  </div>
  <div class="flex-9">

    <div class="input-group flex">
      <input type="text" class="eg_input_keyword form-control flex-9" placeholder="Energiegenossenschaft in Mainz">
      <?php $results = 56; ?>
      <?php $btn_text = "" ?>
      <?php if ($results) : ?>
        <?php $btn_text += (String)$results + " "; ?>
      <?php endif; ?>
      <?php $btn_text += "Ergebnisse Anzeigen"; ?>
      <a class="eg_search_btn btn btn-primary flex-3" href="/"><?= $btn_text ?></a>
    </div>

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
