<footer>
  <div class="page_wrap">
    <?php snippet("logo") ?>
    <div class="flex">
      <?php foreach ($pages->visible() as $p): ?>
        <div>
          <h5><a href="<?= $p->url() ?>"><?= $p->title() ?></a></h5>
          <ul class="cleanList">
            <?php foreach ($p->children()->visible() as $c): ?>
              <li>
                <h6><a href="<?= $c->url() ?>"><?= $c->title() ?></a></h6>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</footer>
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
