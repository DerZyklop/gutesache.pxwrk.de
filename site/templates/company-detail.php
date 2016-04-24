<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">

<main class="page-wrap">

  <div class="flex">
    <div class="flex-12">
      <h2><?= $page->title() ?></h2>
    </div>
    <div class="flex-8">

      <?php snippet("eg-meta") ?>

      <?php snippet("meta", array('company' => $page)) ?>


      <?php $p = $page; ?>
      <p><?= $p->text() ?>
      <p><?= $p->unternehmensform() ?>
      <a href="<?= url($p->website()) ?>"><?= $p->website() ?></a>
      <p><?= $p->video() ?>
      <p><?= $p->videotitle() ?>
      <p><?= $p->videodescription() ?>
      <p><?= $p->logo() ?>
      <p><?= $p->praeambel() ?>
      <p><?= $p->geschaeftszweck() ?>
      <p><?= $p->historie() ?>
      <p><?= $p->facebook() ?>
      <p><?= $p->pinterest() ?>
      <p><?= $p->linkedin() ?>

    </div>
    <div class="flex-1">
    </div>
    <div class="flex-3 eg-sidebar">
      <?php snippet("eg-logo") ?>
      <p>
        <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Adresse</strong><br />
        <?= $page->plz() ?> <?= $page->city() ?><br />
        <?= $page->street().' '.$page->housenr() ?><br /><br>
      </p>
      <p>
        <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Im Internet</strong><br />
        <a href="mailto:<?= $page->mail() ?>">www.der-zyklop.de ➡</a><br>
        <a href="mailto:<?= $page->mail() ?>"><?= $page->mail() ?> ➡</a>
      </p>
      <p class="eg-poc_avatar">
        <?= thumb($page->images()->find($page->poc_avatar()->title())) ?>
      </p>
      <p>
        <?php if ($page->poc_gender() == "female"): ?>
          <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Ansprechpartnerin</strong>
          <br>
          Frau <?= $p->poc_firstname() ?> <?= $p->poc_name() ?>
        <?php else : ?>
          <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Ansprechpartner</strong>
          <br>
          Herr <?= $p->poc_firstname() ?> <?= $p->poc_name() ?>
        <?php endif ?>
      </p>
      <p>
        <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Twitter</strong><br />
        <a href="https://twitter.com/<?= $page->twitter() ?>">@<?= $page->twitter() ?></a>
      </p>

    </div>
  </div>


</main>
