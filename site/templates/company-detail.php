<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">

<main class="page-wrap">

  <div class="flex">
    <div class="flex-12">
      <div class="flex flex-start">

        <div class="">
          <h2><span class="bookmark fa fa-bookmark-o"></span></h2>
        </div>
        <div class="flex-11">
          <h2><?= $page->title() ?></h2>
        </div>

      </div>
    </div>
    <div class="flex-8">

      <div class="content-section">
        <?php snippet("eg-meta") ?>
      </div>

      <div class="content-section">
        <?php snippet("meta", array('company' => $page)) ?>
      </div>
      <div class="content-section">
        <p><?= $page->text() ?>
      </div>
      <div class="content-section">
        <?php if ($page->video()->length()): ?>
          <h5><?= $page->videotitle() ?></h5>
          <?= youtube($page->video(), "100%", 500) ?>
          <p><?= $page->videodescription() ?></p>
        <?php endif ?>
      </div>
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
      <div class="content-section">
        <?php snippet("eg-logo") ?>
      </div>
      <div class="content-section">
        <strong><span class="fa fa-map-marker"></span> Adresse</strong><br />
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
      </div>
      <div class="content-section">
        <strong><span class="fa fa-link"></span> Im Internet</strong><br />
        <a href="mailto:<?= $page->mail() ?>">www.der-zyklop.de ➡</a><br>
        <?php if ($page->mail()->length()): ?>
          <a href="mailto:<?= $page->mail() ?>"><?= $page->mail() ?> ➡</a>
        <?php endif ?>
      </div>
      <?php $avatar = $page->images()->find($page->poc_avatar()->title()); ?>
      <?php if ($avatar) : ?>
        <div class="content-section eg-poc_avatar">
          <?= thumb($avatar) ?>
        </div>
      <?php endif; ?>
      <div class="content-section">
        <?php if ($page->poc_gender() == "female"): ?>
          <strong><span class="fa fa-user"></span> Ansprechpartnerin</strong>
          <br>
          Frau <?= $page->poc_firstname() ?> <?= $page->poc_name() ?>
        <?php else : ?>
          <strong><span class="fa fa-user"></span> Ansprechpartner</strong>
          <br>
          Herr <?= $page->poc_firstname() ?> <?= $page->poc_name() ?>
        <?php endif ?>
      </div>
      <div class="content-section">
        <strong><span class="fa fa-facebook"></span> Facebook</strong><br />
        <?= $page->facebook() ?>
      </div>
      <div class="content-section">
        <strong><span class="fa fa-twitter"></span> Twitter</strong><br />
        <a href="https://twitter.com/<?= $page->twitter() ?>">@<?= $page->twitter() ?></a>
      </div>
      <div class="content-section">
        <strong><span class="fa fa-pinterest"></span> Pinterest</strong><br />
        <?= $page->pinterest() ?>
      </div>
      <div class="content-section">
        <strong><span class="fa fa-linkedin"></span> Linkedin</strong><br />
        <?= $page->linkedin() ?>
      </div>
      <div class="content-section">
        <strong><span class="fa fa-briefcase"></span> Unternehmensform</strong><br />
        <?= $page->unternehmensform() ?>
      </div>
    </div>
  </div>


</main>
