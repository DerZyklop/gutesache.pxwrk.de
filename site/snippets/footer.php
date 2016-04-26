<section class="footer">
  <footer class="no-link-highlighting">
    <div>
      <div class="flex">
        <div class="flex-4">
          <?php snippet("logo") ?>
        </div>
        <div class="flex-4">
          <?php foreach ($pages->visible() as $item): ?>
            <h5><a href="<?= $item->url() ?>">
              <?php if ($item->pageicon()->length()): ?>
                <span class="fa <?= $item->pageicon() ?>"></span>
              <?php endif ?>
              <?= $item->title() ?>
            </a></h5>
          <?php endforeach ?>
        </div>
        <div class="flex-4">
          <?php foreach ($pages->find("user-area")->children()->visible() as $item): ?>
            <h5><a href="#">
              <?php if ($item->pageicon()->length()): ?>
                <span class="fa <?= $item->pageicon() ?>"></span>
              <?php endif ?>
              <?= $item->title() ?>
            </a></h5>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </footer>
</section>
<script>
  (function(d) {
    var config = {
      kitId: 'vrc7dhy',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
