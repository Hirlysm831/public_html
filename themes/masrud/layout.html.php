<?php
  function minify($buffer)
  {
    $protected_parts = ['<pre>,</pre>','<,>'];
    $extracted_values = [];
    $i = 0;

    foreach ($protected_parts as $part) {
      $finished = false;
      $search_offset = $first_offset = 0;
      $end_offset = 1;
      $startend = explode(',', $part);

      if (count($startend) === 1) $startend[1] = $startend[0];
        $len0 = strlen($startend[0]); $len1 = strlen($startend[1]);
        while ($finished === false) {
          $first_offset = strpos($buffer, $startend[0], $search_offset);

          if ($first_offset === false) $finished = true;
          else {
            $search_offset = strpos($buffer, $startend[1], $first_offset + $len0);
            $extracted_values[$i] = substr($buffer, $first_offset + $len0, $search_offset - $first_offset - $len0);
            $buffer = substr($buffer, 0, $first_offset + $len0).'$$#'.$i.'$$'.substr($buffer, $search_offset);
            $search_offset += $len1 + strlen((string)$i) + 5 - strlen($extracted_values[$i]);
            ++$i;
          }
        }
    }

    $buffer = preg_replace("/\s/", " ", $buffer);
    $buffer = preg_replace("/\s{2,}/", " ", $buffer);
    $replace = [
      '> <' => '><',
      ' >' => '>',
      '< ' => '<',
      '</ ' => '</',
      ' {' => '{',
      ' }' => '}',
      '{ ' => '{',
      '} ' => '}',
      ' { ' => '{',
      ' } ' => '}'];

    $buffer = str_replace(array_keys($replace), array_values($replace), $buffer);

    for ($d = 0; $d < $i; ++$d)
      $buffer = str_replace('$$#'.$d.'$$', $extracted_values[$d], $buffer);

    return $buffer;
 }
ob_start('minify') ?>
<!doctype html>
<html amp lang="id">
  <head>
    <meta charset="utf-8">
    <title><?=is_index() ? blog_title() : $title?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
    <meta name="google-site-verification" content="<?=config('google.wmt.id')?>">
    <link rel="icon" href="<?=site_url()?>favicon.png" type="image/png">
    <link rel="canonical" href="<?=$canonical?>">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="dns-prefetch" href="https://cdn.ampproject.org/">
    <?php if (isset($is_post)) { ?>
      <link rel="dns-prefetch" href="https://pagead2.googlesyndication.com/">
      <link rel="dns-prefetch" href="https://ampproject.net/">
      <link rel="dns-prefetch" href="https://cdn.rawgit.com/">
      <meta name="description" content="<?=$p->description?>">
      <meta property="og:url" content="<?=$p->url?>">
      <meta property="og:type" content="article">
      <meta property="og:title" content="<?=$p->title?>">
      <meta property="og:description" content="<?=$p->description?>">
      <meta property="og:image" content="<?=!empty($p->image) ? $p->image : site_url().'themes/masrud/img/img.png'?>">
      <meta property="article:author" content="<?=config('social.facebook')?>">
      <meta property="fb:app_id" content="<?=config('fb.appid')?>">
      <script type="application/ld+json">{"@context":"http://schema.org","@type":"BlogPosting","mainEntityOfPage":{"@type":"WebPage","@id":"<?=$p->url?>"},"headline":"<?=$p->title?>","image":{"@type":"ImageObject","url":"<?=!empty($p->image) ? $p->image : site_url().'themes/masrud/img/img.png'?>","height":405,"width":720},"datePublished":"<?=date('Y-m-d', $p->date)?>T<?=date('H:m:s', $p->date)?>+07:00","dateModified":"<?=date('Y-m-d', $p->date)?>T<?=date('H:m:s', $p->date)?>+07:00","author":{"@type":"Person","name":"<?=config('blog.copyright')?>"},"publisher":{"@type":"Organization","name":"<?=blog_title()?>","logo":{"@type":"ImageObject","url":"<?=site_url()?>themes/masrud/img/amp.png","width":600,"height":60}},"description":"<?=$p->description?>"}</script>
      <?php if (strpos($p->category, "Review") !== false) { ?>
        <script type="application/ld+json">{"@context":"http://schema.org/","@type":"Review","itemReviewed":{"@type":"Thing","name":"<?=$p->title?>"},"author":{"@type":"Person","name":"M. Rudianto"},"reviewRating":{"@type":"Rating","ratingValue":"10","bestRating":"10"},"publisher":{"@type":"Organization","name":"<?=blog_title()?>"}}</script>
      <?php } ?>
      <script async src='https://cdn.ampproject.org/v0.js'></script>
      <script async custom-element='amp-ad' src='https://cdn.ampproject.org/v0/amp-ad-0.1.js'></script><!--
      <script async custom-element="amp-sticky-ad" src="https://cdn.ampproject.org/v0/amp-sticky-ad-1.0.js"></script>-->
      <script async custom-element='amp-form' src='https://cdn.ampproject.org/v0/amp-form-0.1.js'></script>
      <script async custom-element='amp-analytics' src='https://cdn.ampproject.org/v0/amp-analytics-0.1.js'></script>
      <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <?php } elseif (is_index()) { ?>
      <meta name="description" content="<?=config('blog.description')?>">
      <meta property="og:site_name" content="<?=blog_title()?>">
      <meta property="og:url" content="<?=site_url()?>blog">
      <meta property="og:type" content="website">
      <meta property="og:title" content="<?=is_index() ? blog_title() : $title?>">
      <meta property="og:description" content="<?=config('blog.description')?>">
      <meta property="og:image" content="<?=site_url()?>themes/masrud/img/masrud.png">
      <meta property="fb:app_id" content="<?=config('fb.appid')?>">
      <meta name="author" content="<?=config('social.facebook')?>">
      <script async src='https://cdn.ampproject.org/v0.js'></script>
      <script async custom-element='amp-form' src='https://cdn.ampproject.org/v0/amp-form-0.1.js'></script>
      <script async custom-element='amp-analytics' src='https://cdn.ampproject.org/v0/amp-analytics-0.1.js'></script>
    <?php } else { ?>
    <script async src='https://cdn.ampproject.org/v0.js'></script>
    <script async custom-element='amp-form' src='https://cdn.ampproject.org/v0/amp-form-0.1.js'></script>
    <script async custom-element='amp-analytics' src='https://cdn.ampproject.org/v0/amp-analytics-0.1.js'></script>
    <?php } ?>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom='amp-custom'>
      @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v15/CWB0XYA8bzo0kSThX0UTuA.woff2) format('woff2')
      }
      @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v16/vPcynSL0qHq_6dX7lKVByfesZW2xOQ-xsNqO47m55DA.woff2) format('woff2')
      }
      @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v15/d-6IYplOFocCacKzxwXSOFtXRa8TVwTICgirnJhmVJw.woff2) format('woff2')
      }
      * {
        margin: 0;
        padding: 0
      }
      html {
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        color: #494949;
        font-family: Roboto, Sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 1.6;
        word-break: keep-all;
        word-spacing: 1px;
        word-wrap: break-word
      }
      body {
        background: #f5f5f5
      }
      header, nav, main, article, footer {
        display: block
      }
      h1, h2, h3, h4, h5, h6 {
        font-weight: 700;
        line-height: 1.3;
        padding: .3529em 0
      }
      h3, h4, h5, h6 {
        padding: .6470em 0 0
      }
      h1 {
        font-size: 200%
      }
      h2 {
        font-size: 180%
      }
      h3 {
        font-size: 160%
      }
      h4 {
        font-size: 140%
      }
      h5 {
        font-size: 120%
      }
      h6 {
        font-size: 100%
      }
      p {
        margin: 1.3529em 0 1.3529em
      }
      strong {
        font-weight: 700
      }

      em {
        font-style: italic
      }
      small {
       font-size: .8823em
      }
      amp-img, pre {
        border-radius: 3px
      }
      u {
        border-bottom: 2px solid #757575;
        text-decoration: none
      }
      u:hover {
        border: none
      }
      ul, ol {
        margin: .9411em 0 .9411em 2em
      }
      ul li, ol li {
        padding: .5294em 0
      }
      hr {
        border: 1px solid #e6e6e6;
        display: block;
        margin: 1.5294em auto
      }
      a {
        color: #2196f3;
        text-decoration: none
      }
      a:hover {
        border-bottom: 2px solid #64b5f6;
        color: #42a5f5
      }
      .container {
        background: #fff;
        margin: 0 auto;
        max-width: 680px;
        padding: 0 15px
      }
      a.skip {
        border: none;
        color: #ffffff;
        font-size: 100%;
        left: .5294em;
        padding: 0.2941em .6470em;
        position: absolute;
        text-decoration: none;
        top: -2.4706em;
        z-index: 1
      }
      a.skip:focus {
        background: #424242;
        top: .5294em
      }
      header h1 {
        font-size: 1.8823em;
        padding: .6470em 0 .1176em
      }
      header h1 a, footer a {
        color: inherit
      }
      header h1 a:hover {
        border-bottom: none;
        color: inherit
      }
      nav {
        font-size: 110%;
        font-weight: 700;
        padding-bottom: 40px;
        position: relative
      }
      nav ul {
        border-bottom: 2px solid #e6e6e6;
        list-style: none;
        margin: 0;
        padding: .1176em 0 0 0;
        width: 100%
      }
      nav ul li {
        display: inline-block;
        padding-right: 1.4705em;
        position: relative
      }
      nav a {
        border-bottom: 3px solid #fff;
        color: inherit
      }
      nav a:hover,
      footer a:hover {
        border-bottom: 3px solid #959595;
        color: inherit
      }
      .search {
        margin: -2.8235em 0 .5882em 0;
        position: relative
      }
      input[type="search"] {
        background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0OCIgaGVpZ2h0PSI0OCIgdmlld0JveD0iMCAwIDQ4IDQ4Ij48cGF0aCBkPSJNMzEgMjhoLTEuNTlsLS41NS0uNTVDMzAuODIgMjUuMTggMzIgMjIuMjMgMzIgMTljMC03LjE4LTUuODItMTMtMTMtMTNTNiAxMS44MiA2IDE5czUuODIgMTMgMTMgMTNjMy4yMyAwIDYuMTgtMS4xOCA4LjQ1LTMuMTNsLjU1LjU1VjMxbDEwIDkuOThMNDAuOTggMzggMzEgMjh6bS0xMiAwYy00Ljk3IDAtOS00LjAzLTktOXM0LjAzLTkgOS05IDkgNC4wMyA5IDktNC4wMyA5LTkgOXoiLz48L3N2Zz4=);
        background-position: center right;
        background-repeat: no-repeat;
        background-size: 1.4117em;
        border: none;
        float: right;
        font-family: Roboto, Sans-serif;
        font-size: 100%;
        padding: .5294em .5294em .7647em 1.7647em;
        position: absolute;
        right: 0;
        transition: width .4s ease-in-out;
        width: .5294em
      }
      input[type="search"]:focus {
        background: #fff;
        color: inherit;
        outline: none;
        padding: .5294em .5294em .7647em 0;
        width: 100%
      }

      main {
        padding: 1.2941em 0
      }
      article {
        margin-bottom: 1.823em
      }
      .date {
        color: #757575;
        font-size: .8823em
      }
      <?php if (is_index()) { ?>
        .post {
          border-bottom: 2px dotted #e6e6e6;
          margin-bottom: 1em;
          padding-bottom: 1em
        }
        .last {
          border: none;
          margin-bottom: .5294em
        }
        .title a {
          color: inherit;
          font-size: 90%
        }
        .title a:hover {
          border-bottom: 3px solid #64b5f6;
          color: #42a5f5
        }
        .category a {
          border-bottom: 1px dotted #ddd;
          color: inherit
        }
        .category a:hover {
          border-bottom: 2px solid #64b5f6;
          color: #42a5f5
        }
        .pager {
          height: 1em;
          margin-bottom: 1em
        }
        .pager a {
          background: #e0e0e0;
          border-radius: 20px;
          color: #424242;
          display: block;
          padding: .5em 1.25em;
        }
        .pager a:hover {
          background: #eee;
          border: none;
        }
        .newer {
          float: left
        }
        .older {
          float: right
        }
      <?php } if (isset($is_post)) { ?>
        .search {
          margin-bottom: .5882em
        }
        .featured__img {
          margin: 1.4117em 0 1em
        }
        .category a {
          border-bottom: 1px dotted #42a5f5;
        }
        .category a:hover {
          border-bottom: 2px solid #42a5f5;
        }
        figcaption {
          font-size: .925em;
          margin: -.5294em 0 5%;
          text-align: center
        }
        pre, code {
          font-family: Consolas, Menlo, Monaco, 'Lucida Console', 'Liberation Mono', 'DejaVu Sans Mono', 'Bitstream Vera Sans Mono', 'Courier New', monospace, serif
        }
        pre code {
          background-color: #f5f5f5;
          border: 1px solid #e0e0e0;
          color: #303030;
          display: block;
          font-size: .8823em;
          line-height: 1.5;
          margin: .8823em 0;
          max-height: 405px;
          overflow: auto;
          padding: .8823em 1.1764em .7647em
        }
        code {
          background-color: #f5f5f5;
          border: 1px solid #e0e0e0;
          border-radius: 2px;
          color: #e1306c;
          display: inline-block;
          font-size: .8823em;
          line-height: 1;
          padding: .4117em .3529em .1764em
        }
        blockquote {
          background: #eceff1;
          border: 2px dashed #90a4ae;
          border-radius: 4px;
          margin: 2.1176em 0;
          padding: .8223em 1.176em
        }
        blockquote p {
          display: inline
        }
        .tc {
          max-width: 100%;
          overflow: auto
        }
        table {
          border-collapse: collapse;
          border-spacing: 0;
          margin: 1em 0;
          width: 100%;
          white-space: pre-wrap;
          word-wrap: break-word
        }
        th, td {
          border: 1px solid #e6e6e6;
          padding: .8823em;
          text-align: left
        }
        thead {
          background: #f4f4f4
        }
        tbody {
          font-size: .8823em
        }
        .notif, .warning {
          border-radius: 4px;
          font-size: .9411em;
          margin: 2em 0;
          padding: .8223em 1.176em
        }
        .notif {
          background: #e8f5e9;
          color: #4caf50
        }
        .warning {
          background: #ffebee;
          color: #f44336
        }
        .ads {
          display: block;
          padding: 1.7647em 0 1.1764em
        }
        .left {
          float: left;
          margin-right: 1.3em
        }
        .right {
          float: right;
          margin-left: 1.3em
        }
        .related {
          border-bottom: 2px dotted #e6e6e6;
          border-top: 2px dotted #e6e6e6;
          margin: 1.5em 0
        }
        .related ul li {
          margin-left: -.6470em;
          padding: .5294em 0
        }
        .related ul li:last-of-type {
          border-bottom: none
        }
        .fp {
          display: block;
          height: 240px;
          overflow: hidden;
          width: auto
        }
        @media print {
          .skip, header, nav, .share, .related, .ads, .fp, amp-ad.ad, footer {
            display: none
          }
        }
      <?php } if ($bodyclass == 'in-page tentang' ||
      $bodyclass == 'in-page kontak' ||
      $bodyclass == 'in-page arsip' ||
      $bodyclass == 'in-page kebijakan-dan-privasi' ||
      $bodyclass == 'in-page sangkalan') { ?>
        .title {
          margin-bottom: -.5294em
        }
      <?php } ?>
      @media all and (min-width: 480px) {
        .container {
          padding: 0 35px
        }
        .mobile {
          display: none
        }
      }
      footer {
        background: #fff;
        position: relative;
        z-index: 1
      }
      .contact a {
        border-bottom: 2px dotted #bdbdbd;
        font-weight: 700
      }
      .footer__link {
        border-top: 2px solid #e6e6e6;
        line-height: 2.5;
        margin: 0;
        padding: 1em 0
      }
      .dot {
        background: inherit;
        display: inline-block;
        margin: auto .5294em
      }
    </style>
  </head>
  <body class="<?=$bodyclass?>">
    <div class="container">
      <a href="#main" class="skip">Skip to main content</a>
      <header>
        <h1><a href="<?=site_url()?>"><?=blog_title()?></a></h1>
      </header>
      <nav>
        <ul>
          <li><a href="<?=site_url()?>blog">Home</a></li>
          <li><a href="<?=site_url()?>arsip">Arsip</a></li>
          <li><a href="<?=site_url()?>">Kontak</a></li>
          <li><a href="<?=site_url()?>category/source-code">Download</a></li>
          <li><a href="https://goo.gl/b7zPDw">Rekomendasi Hosting</a></li>
        </ul>
        <form class="search" action="<?=site_url()?>" target="_top">
         <input type="search" name="search" aria-label="Cari" placeholder="Ketik dan tekan enter....." required autocomplete="off">
        </form>
      </nav>
      <main>
        <?=content()?>
      </main>
      <footer id="footer">
        <?php if (!isset($is_post)) { ?>
         <hr>
         <p class="contact">Freelance PHP programmer. Hubungi saya melalui WhatsApp <a href="https://api.whatsapp.com/send?phone=6285735501035&amp;text=Assalamu%27alaikum%20%3A%29" target="_blank">0857-3550-1035</a>&nbsp; atau email <a href="mailto:m45rud.project@gmail.com" target="_blank">m45rud.project&#64;gmail.com</a>
          </p>
        <?php } ?>
        <p class="footer__link">
          &copy; <?=config('blog.copyright')?>
          <span class="dot">&bull;</span>
          <a href="<?=site_url()?>kebijakan-dan-privasi">Privasi</a>
          <span class="dot">&bull;</span>
          <a href="<?=site_url()?>sangkalan">Sangkalan</a>
        </p>
      </footer>
    </div>
    <amp-analytics type="googleanalytics"><script type="application/json">{"vars":{"account":"UA-51349970-10"},"triggers":{"trackPageview":{"on":"visible","request":"pageview"}}}</script></amp-analytics>
  </body>
</html>
<?php ob_end_flush() ?>