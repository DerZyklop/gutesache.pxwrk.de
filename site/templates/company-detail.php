<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gute Sache</title>

  <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
  <script type="text/javascript" src="/assets/js/script.js"></script>
</head>
<body>
  <main class="page_wrap">
    <h2><?= $page->title() ?></h2>
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
    <p><?= $p->verband() ?>
    <p><?= $p->kategorie() ?>
    <p><?= $p->banche() ?>
    <p><?= $p->praeambel() ?>
    <p><?= $p->geschaeftszweck() ?>
    <p><?= $p->historie() ?>
    <p><?= $p->facebook() ?>
    <p><?= $p->twitter() ?>
    <p><?= $p->pinterest() ?>
    <p><?= $p->linkedin() ?>
  </main>
</body>
</html>
