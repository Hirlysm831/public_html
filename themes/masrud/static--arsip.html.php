<?=login() ? tab($p) : ''?>
<article>
  <h2 id="main" class="title"><?=$p->title?></h2>
  <?=$p->body?>
  <h4>Kategori</h4>
  <?=kategori()?>
  <hr>
  <h4>Posting</h4>
  <?=arsip()?>
  <?php
    function kategori()
    {
      $dir = 'cache/widget';
      $filename = 'cache/widget/category.list.cache';
      $tmp = array();
      $cat = array();
      $list = array();

      if (is_dir($dir) === false) {
        mkdir($dir, 0775, true);
      }

      if (file_exists($filename)) {
        $cat = unserialize(file_get_contents($filename));
      } else {
        $arr = get_category_info(null);
        foreach ($arr as $a) {
          $cat[] = array($a->md, $a->title);
        }
        array_push($cat, array('uncategorized', 'Uncategorized'));
        asort($cat);
        $tmp = serialize($cat);
        file_put_contents($filename, print_r($tmp, true));
      }
      echo '<ul>';
      foreach ($cat as $k => $v) {
        if (get_categorycount($v['0']) !== 0) {
          echo '<li><a href="' . site_url() . 'category/' . $v['0'] . '">' . $v['1']. '</a></li>';
        }
      }
      echo '</ul>';
    }

    function arsip()
    {
      $dir = 'cache/widget';
      $filename = 'cache/widget/recent.cache';
      $tmp = array();
      $posts = array();

      if (is_dir($dir) === false) {
        mkdir($dir, 0775, true);
      }

      $count = 1000;
      if (file_exists($filename)) {
        $posts = unserialize(file_get_contents($filename));
        if (count($posts) != $count) {
          $posts = get_posts(null, 1, $count);
          $tmp = serialize($posts);
          file_put_contents($filename, print_r($tmp, true));
        }
      } else {
        $posts = get_posts(null, 1, $count);
        $tmp = serialize($posts);
        file_put_contents($filename, print_r($tmp, true));
      }

      if (! empty($custom)) {
        return $posts;
      } else {
        echo '<ul>';
        foreach ($posts as $post) {
          echo '<li><a href="'.$post->url.'" target="_blank">'.$post->title.'</a> <span class="date"> &minus; '.date('d F Y', $post->date).'</span></li>';
        }
        if (empty($posts)) {
          echo '';
        }
        echo '</ul>';
      }
    }
  ?>
</article>
