<?=login() ? tab($p) : ''?><!--
<div class="mobile">
  <amp-sticky-ad layout="nodisplay">
    <amp-ad class="ads center" width="320" height="100" type="adsense" data-ad-client="ca-pub-6898355102728494" data-ad-slot="4110568161">
    </amp-ad>
  </amp-sticky-ad>
</div>-->
<article>
  <?php if ($p->image) { ?>
    <amp-img class="featured__img" src="<?=$p->image?>" alt="<?=$p->title?>" height="405" width="720" layout="responsive"></amp-img>
  <?php } ?>
  <h2 id="main" class="title"><?=$p->title?></h2>
  <div class="date"><?=date('d F Y', $p->date)?><span class="dot">|</span>Kategori: <span class="category"><?=$p->category?></span></div>
  <?php
    $show_after_p = 1;
    $content = $p->body;
    if (substr_count($content, '<p>') > $show_after_p) {
      $contents = explode('</p>', $content);
      $p_count = 1;
      foreach ($contents as $content)
      {
        echo $content;
        if ($p_count == $show_after_p)
        {
  ?>
    <div class="ads <?=config('ad.position')?>">
      <amp-ad width=300 height=250 type="adsense" data-ad-client="ca-pub-6898355102728494" data-ad-slot="5268216567"></amp-ad>
    </div>
  <?php
        }
    echo "</p>";
    $p_count++;
      }
    }
  ?>
  <div class="related">
    <?=get_related($p->related)?>
</div>
  <p class="contact">Freelance PHP programmer. Hubungi saya melalui WhatsApp <a href="https://api.whatsapp.com/send?phone=6285735501035&amp;text=Assalamu%27alaikum%20%3A%29" target="_blank">0857-3550-1035</a> atau email <a href="mailto:m45rud.project@gmail.com" target="_blank">m45rud.project&#64;gmail.com</a>
  </p><!--
  <div class="fp">
    <amp-iframe src="https://cdn.rawgit.com/m45rud/fp-amp/eb2c727a/fp-amp.html" frameborder="0" scrolling="no" width="300" height="360" layout="responsive" sandbox="allow-forms allow-scripts allow-same-origin allow-popups"></amp-iframe>
  </div>-->
</article>
