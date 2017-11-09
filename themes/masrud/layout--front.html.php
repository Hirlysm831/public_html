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
ob_start('minify');

$desc = 'PHP programmer dari Nganjuk, Jawa Timur. Melayani jasa pembuatan website dan aplikasi berbasis web berkualitas dengan harga terjangkau.';
$tl = config('blog.copyright').' &minus; [PHP Programmer]';
?>

<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <title><?=config('blog.copyright').' [PHP Programmer] &minus; '.blog_title()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
    <meta name="google-site-verification" content="<?=config('google.wmt.id')?>">
    <meta name="description" content="<?=$desc?>">
    <meta property="og:site_name" content="<?=$tl?>">
    <meta property="og:url" content="<?=site_url()?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?=$tl?>">
    <meta property="og:description" content="<?=$desc?>">
    <meta property="og:image" content="<?=site_url()?>themes/masrud/img/masrud.png">
    <meta property="fb:app_id" content="<?=config('fb.appid')?>">
    <meta name="author" content="<?=config('social.facebook')?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?=config('social.twitter')?>">
    <meta name="twitter:creator" content="<?=config('social.twitter')?>">
    <meta name="twitter:title" content="<?=$tl?>">
    <meta name="twitter:description" content="<?=$desc?>">
    <meta name="twitter:image" content="<?=site_url()?>themes/masrud/img/masrud.png">
    <link rel="icon" href="<?=site_url()?>favicon.png" type="image/png">
    <link rel="canonical" href="<?=$canonical?>">
    <link rel="dns-prefetch" href="https://www.google-analytics.com/">
    <script type="application/ld+json">[{"@context":"http://schema.org","@type":"WebSite","name":"<?=blog_title()?>","url":"<?=site_url()?>","potentialAction":{"@type":"SearchAction","target":"<?=site_url()?>search/{search_term_string}","query-input":"required name=search_term_string"}},{"@context":"http://schema.org","@type":"Organization","url":"<?=site_url()?>","logo":"<?=site_url()?>favicon.png","sameAs":["https://web.facebook.com/masrudcom/","https://plus.google.com/+Masrudcomm"],"contactPoint":{"@type":"ContactPoint","telephone":"+62-857-3550-1035","contactType":"customer service"}},{"@context":"http://schema.org","@type":"Person","address":{"@type":"PostalAddress","addressLocality":"Nganjuk","addressRegion":"Jawa Timur","addressCountry":"ID","postalCode":"64475","streetAddress":"RT/RW 02/05 Dosari, Bareng, Sawahan, Nganjuk."},"email":"mailto:rudi@masrud.com","image":"<?=site_url()?>themes/masrud/img/rudi.jpg","jobTitle":"PHP Programmer","name":"<?=config('blog.copyright')?>","telephone":"+62-857-3550-1035","url":"<?=site_url()?>"}]</script>
    <style>
      @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/CWB0XYA8bzo0kSThX0UTuA.woff2) format('woff2')
      }
      @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v18/Hgo13k-tfSpn0qi1SFdUfVtXRa8TVwTICgirnJhmVJw.woff2) format('woff2')
      }
      * {
        margin: 0;
        padding: 0
      }
      html {
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        font-family: Roboto, Sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 1.4
      }
      body {
        background: #fff;
        height: 100vh;
        width: 100vw
      }
      h1 {
          font-size: 275%
      }
      h1, h2, .home {
        font-weight: 300
      }
      p {
        margin: .75em 0
      }
      a {
        color: #2196f3;
        text-decoration: none
      }
      a:hover {
        border-bottom: 2px solid #64b5f6;
        color: #42a5f5
      }
      main {
        left: 8%;
        padding: 0 .75em;
        position: absolute;
        top: 50%;
        transform: translate(0, -50%);
      }
      @media all and (min-width: 500px) {
        main {
          left: 50%;
          position: absolute;
          top: 50%;
          transform: translate(-50%, -50%);
        }
      }
    </style>
  </head>
  <body>
    <main>
        <h1>M. Rudianto</h1>
        <h2>PHP Programmer</h2>
        <p class="home">Sawahan, Nganjuk - Jawa Timur</p>
        <p><a href="mailto:m45rud.project@gmail.com" target="_blank">m45rud.project&#64;gmail.com</a></p>
        <p><a href="https://api.whatsapp.com/send?phone=6285735501035&amp;text=Assalamu%27alaikum%20%3A%29" target="_blank">0857-3550-1035</a></p>
        <p><a href="<?=site_url()?>blog">my blog</a></p>
        <p><a href="https://github.com/m45rud" target="_blank">code</a></p>
    </main>
  </body>
</html>
<?php ob_end_flush() ?>
