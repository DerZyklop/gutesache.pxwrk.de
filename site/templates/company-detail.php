<!-- <link rel="stylesheet" type="text/css" href="/assets/css/styles.css"> -->

<main>

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

      <?php if ($pages->find('erweiterte-suche')->children()->count()) : ?>
        <div class="content-section">
          <ul class="eg-meta cleanList flex">
            <?php foreach ($pages->find('erweiterte-suche')->children() as $category): ?>
              <?php $filterName = $category->uid(); ?>
              <?php if ($page->$filterName()->length()): ?>
                <li>
                  <h5><?= $category->title() ?></h5>
                  <h6>
                    <?= $page->$filterName() ?>
                  </h6>
                </li>
              <?php endif ?>
            <?php endforeach ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php if ($page->text()->length()) : ?>
        <div class="content-section">
          <p><?= $page->text() ?>
        </div>
      <?php endif; ?>
      <!-- <div class="content-section">
        <?php if ($page->video()->length()): ?>
          <h5><?= $page->videotitle() ?></h5>
          <?= youtube($page->video(), "100%", 500) ?>
          <p><?= $page->videodescription() ?></p>
        <?php endif ?>
      </div> -->
      <?php if ($page->praeambel()->length()) : ?>
        <div class="content-section">
          <h5>Präambel</h5>
          <?= $page->praeambel()->kirbytext() ?>
        </div>
      <?php endif; ?>
      <?php if ($page->geschaeftszweck()->length()) : ?>
        <div class="content-section">
          <h5>Geschäftszweck</h5>
          <p><?= $page->geschaeftszweck() ?></p>
        </div>
      <?php endif; ?>
      <?php if ($page->historie()->length()) : ?>
        <div class="content-section">
          <h5>Historie</h5>
          <p><?= $page->historie() ?></p>
        </div>
      <?php endif; ?>

    </div>
    <div class="flex-1">
    </div>
    <div class="flex-3 eg-sidebar">
      <?php $logo = $page->images()->find("logo.png"); ?>
      <?php if ($logo) : ?>
        <div class="content-section">
          <?php if ($logo != ""): ?>
            <div class="eg-logo">
              <?= thumb($logo) ?>
            </div>
          <?php endif ?>
        </div>
      <?php endif; ?>


      <?php if (
        $page->plz()->length() ||
        $page->city()->length() ||
        $page->street()->length() ||
        $page->housenr()->length()
      ): ?>
        <div class="content-section">
          <strong><span class="fa fa-map-marker"></span> Adresse</strong><br />
          <?php if ($page->plz()->length() || $page->city()->length()): ?>
            <?= $page->plz() ?> <?= $page->city() ?><br />
          <?php endif ?>
          <?php if ($page->street()->length() || $page->housenr()->length()): ?>
            <?= $page->street().' '.$page->housenr() ?><br />
          <?php endif ?>
        </div>
      <?php endif; ?>


      <?php if ($page->mail()->length() || $page->website()->length()): ?>
        <div class="content-section">
          <strong><span class="fa fa-link"></span> Im Internet</strong><br />
          <?php if ($page->website()->length()): ?>
            <a href="mailto:<?= $page->website() ?>">www.der-zyklop.de ➡</a><br>
          <?php endif; ?>
          <?php if ($page->mail()->length()): ?>
            <a href="mailto:<?= $page->mail() ?>"><?= $page->mail() ?> ➡</a>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <?php $avatar = $page->images()->find($page->poc_avatar()->title()); ?>
      <?php if ($avatar) : ?>
        <div class="content-section eg-poc_avatar">
          <?= thumb($avatar) ?>
        </div>
      <?php endif; ?>
      <?php if ($page->poc_name()->length()) : ?>
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
      <?php endif; ?>
      <?php if ($page->facebook()->length()) : ?>
        <div class="content-section">
          <strong><span class="fa fa-facebook"></span> Facebook</strong><br />
          <?= $page->facebook() ?>
        </div>
      <?php endif; ?>
      <?php if ($page->twitter()->length()) : ?>
        <div class="content-section">
          <strong><span class="fa fa-twitter"></span> Twitter</strong><br />
          <a href="https://twitter.com/<?= $page->twitter() ?>">@<?= $page->twitter() ?></a>
        </div>
      <?php endif; ?>
      <?php if ($page->pinterest()->length()) : ?>
        <div class="content-section">
          <strong><span class="fa fa-pinterest"></span> Pinterest</strong><br />
          <?= $page->pinterest() ?>
        </div>
      <?php endif; ?>
      <?php if ($page->linkedin()->length()) : ?>
        <div class="content-section">
          <strong><span class="fa fa-linkedin"></span> Linkedin</strong><br />
          <?= $page->linkedin() ?>
        </div>
      <?php endif; ?>
      <!-- <?php if ($page->unternehmensform()->length()) : ?>
        <div class="content-section">
          <strong><span class="fa fa-briefcase"></span> Unternehmensform</strong><br />
          <?= $page->unternehmensform() ?>
        </div>
      <?php endif; ?> -->
    </div>
  </div>


</main>
