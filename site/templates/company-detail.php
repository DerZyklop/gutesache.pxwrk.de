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
      <p><?= $page->text() ?>
      <a href="<?= url($page->website()) ?>"><?= $page->website() ?></a>


      <?php if ($page->video()->length()): ?>
        <h5><?= $page->videotitle() ?></h5>
        <?= youtube($page->video(), "100%", 500) ?>
        <p><?= $page->videodescription() ?></p>
      <?php endif ?>

      <div class="content-section">
        <h5>Präambel</h5>
        <p><?= $page->praeambel() ?></p>
      </div>
      <div class="content-section">
        <h5>Geschäftszweck</h5>
        <p><?= $page->geschaeftszweck() ?></p>
      </div>
      <div class="content-section">
        <h5>Historie</h5>
        <p><?= $page->historie() ?></p>
      </div>

    </div>
    <div class="flex-1">
    </div>
    <div class="flex-3 eg-sidebar">
      <?php snippet("eg-logo") ?>
      <p>
        <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Adresse</strong><br />
        <?php if (
          !$page->plz()->length() &&
          !$page->city()->length() &&
          !$page->street()->length() &&
          !$page->housenr()->length()
        ): ?>
          -
        <?php endif ?>
        <?php if ($page->plz()->length() || $page->city()->length()): ?>
          <?= $page->plz() ?> <?= $page->city() ?><br />
        <?php endif ?>
        <?php if ($page->street()->length() || $page->housenr()->length()): ?>
          <?= $page->street().' '.$page->housenr() ?><br /><br>
        <?php endif ?>
      </p>
      <p>
        <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Im Internet</strong><br />
        <a href="mailto:<?= $page->mail() ?>">www.der-zyklop.de ➡</a><br>
        <?php if ($page->mail()->length()): ?>
          <a href="mailto:<?= $page->mail() ?>"><?= $page->mail() ?> ➡</a>
        <?php endif ?>
      </p>
      <?php $avatar = $page->images()->find($page->poc_avatar()->title()); ?>
      <?php if ($avatar) : ?>
        <p class="eg-poc_avatar">
          <?= thumb($avatar) ?>
        </p>
      <?php endif; ?>
      <p>
        <?php if ($page->poc_gender() == "female"): ?>
          <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Ansprechpartnerin</strong>
          <br>
          Frau <?= $page->poc_firstname() ?> <?= $page->poc_name() ?>
        <?php else : ?>
          <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Ansprechpartner</strong>
          <br>
          Herr <?= $page->poc_firstname() ?> <?= $page->poc_name() ?>
        <?php endif ?>
      </p>
      <p>
        <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Facebook</strong><br />
        <?= $page->facebook() ?>
      </p>
      <p>
        <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Twitter</strong><br />
        <a href="https://twitter.com/<?= $page->twitter() ?>">@<?= $page->twitter() ?></a>
      </p>
      <p>
        <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Pinterest</strong><br />
        <?= $page->pinterest() ?>
      </p>
      <p>
        <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Linkedin</strong><br />
        <?= $page->linkedin() ?>
      </p>
      <p>
        <strong><img src="/assets/images/google-location-icon-icon-location.png" height="12px"> Unternehmensform</strong><br />
        <?= $page->unternehmensform() ?>
      </p>
    </div>
  </div>


</main>
