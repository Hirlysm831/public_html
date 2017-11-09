<?=login() ? tab($p) : ''?>
<article>
  <h2 id="main" class="title"><?=$p->title?></h2>
  <?=$p->body?>
</article>
