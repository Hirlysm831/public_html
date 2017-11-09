<?php if (config('category.info') === 'true'): ?>
  <?php if (!empty($category)): ?>
    <h2 class="category">Kategori: <span class="category__title"><?=$category->title?></span></h2>
  <?php endif ?>
<?php endif ?>
<div id="main"></div>
<?php
  $i = 0; $len = count($posts);
  foreach ($posts as $p):
    if ($i == 0) {
      $class = 'post first';
    }
    elseif ($i == $len - 1) {
      $class = 'post last';
    } else {
      $class = 'post';
    }
  $i++
?>
<article class="<?=$class?>">
  <h2 class="title"><a href="<?=$p->url?>"><?=$p->title?></a></h2>
  <div class="date"><?=date('d F Y', $p->date)?><span class="dot">|</span>Kategori: <span class="category"><?=$p->category?></span></div>
  <p><?=get_teaser($p->body, $p->url)?>.....</p>
</article>
<?php endforeach ?>
<?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
  <div class="pager">
    <?php if (!empty($pagination['prev'])): ?>
      <a class="newer" href="?page=<?=$page - 1?>" rel="prev">Newer</a>
    <?php endif ?>
    <?php if (!empty($pagination['next'])): ?>
      <a class="older" href="?page=<?=$page + 1?>" rel="next">Older</a>
    <?php endif ?>
  </div>
<?php endif ?>
