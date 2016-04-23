<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">

<main class="page-wrap">

  <div class="flex">
    <div class="flex-12">
      <h2><?= $page->title() ?></h2>
    </div>
    <div class="flex-8">

      <ul class="flatList cleanList flex">
        <?php snippet("interactive-list-item", array(
          "key" => "Verband",
          "value" => $page->verband()
        )) ?>
        <?php snippet("interactive-list-item", array(
          "key" => "Kategorie",
          "value" => $page->kategorie()
        )) ?>
        <?php snippet("interactive-list-item", array(
          "key" => "Branche",
          "value" => $page->branche()
        )) ?>
      </ul>

      <?php snippet("meta", array('company' => $page)) ?>

      <?php $p = $page; ?>
      <p><?= $p->text() ?>
      <p><?= $p->text() ?>
      <p><?= $p->poc_gender() ?>
      <p><?= $p->poc_firstname() ?>
      <p><?= $p->poc_name() ?>
      <p><?= $p->unternehmensform() ?>
      <p><?= $p->plz() ?>
      <p><?= $p->city() ?>
      <p><?= $p->street().' '.$p->housenr() ?>
      <a href="<?= url($p->website()) ?>"><?= $p->website() ?></a>
      <p><?= $p->video() ?>
      <p><?= $p->videotitle() ?>
      <p><?= $p->videodescription() ?>
      <p><?= $p->logo() ?>
      <p><?= $p->praeambel() ?>
      <p><?= $p->geschaeftszweck() ?>
      <p><?= $p->historie() ?>
      <p><?= $p->facebook() ?>
      <p><?= $p->twitter() ?>
      <p><?= $p->pinterest() ?>
      <p><?= $p->linkedin() ?>

    </div>
    <div class="flex-1">
    </div>
    <div class="flex-3">
      <?php $logo = $p->images()->find("logo.png"); ?>
      <?php if ($logo != ""): ?>
        <div class="eg-logo">
          <?= thumb($logo) ?>
        </div>
      <?php endif ?>
    </div>
  </div>


</main>
