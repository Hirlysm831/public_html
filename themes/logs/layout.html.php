<!DOCTYPE html>
<html>
<head>
    <?php echo head_contents() ?>
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description; ?>"/>
    <link rel="canonical" href="<?php echo $canonical; ?>" />
    <link href="<?php echo site_url() ?>themes/logs/css/style.css" rel="stylesheet"/>
    <?php if (publisher()): ?>
    <link href="<?php echo publisher() ?>" rel="publisher" /><?php endif; ?>
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="<?php echo $bodyclass; ?>" itemscope="itemscope" itemtype="http://schema.org/Blog">
<div class="hide">
    <meta content="<?php echo blog_title() ?>" itemprop="name"/>
    <meta content="<?php echo blog_description() ?>" itemprop="description"/>
</div>
<?php if (facebook()) { echo facebook(); } ?>
<?php if (login()) { toolbar(); } ?>
<div id="cover">
    <div id="header-wrapper">
        <header id="header" class="responsive">
            <div id="branding">
                <?php if (is_index()) { ?>
                    <h1 class="blog-title"><a rel="home" href="<?php echo site_url() ?>"><?php echo blog_title() ?></a></h1>
                <?php } else { ?>
                    <h2 class="blog-title"><a rel="home" href="<?php echo site_url() ?>"><?php echo blog_title() ?></a></h2>
                <?php } ?>
                <div class="blog-tagline"><p><?php echo blog_tagline() ?></p></div>
            </div>
        </header>
    </div>
    <div id="menu-wrapper">
        <nav id="menu" class="responsive">
            <?php echo menu() ?>
            <?php echo search() ?>
        </nav>
    </div>
    <div id="main-wrapper">
        <div id="main" class="responsive">
            <section id="content">
                <?php echo content() ?>
            </section>
            <aside id="sidebar">
                <div class="recent">
                    <h3>Recent Posts</h3>
                    <?php echo recent_posts() ?>
                </div>
                <?php if(config('views.counter') === 'true') :?>
                <div class="popular">
                    <h3>Popular Posts</h3>
                    <?php echo popular_posts() ?>
                </div>
                <?php endif;?>
                <div class="tagcloud">
                    <h3>Tags</h3>
                    <?php echo tag_cloud() ?>
                </div>
            </aside>
        </div>
    </div>
    <div id="copyright-wrapper">
        <footer id="copyright" class="responsive">
            <?php echo copyright() ?>
        </footer>
    </div>
</div>
<?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
<script>
//<![CDATA[
function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("script")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }
loadCSS("https://fonts.googleapis.com/css?family=Roboto:400,400italic,500););
//]]>
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6898355102728494",
    enable_page_level_ads: true
  });
</script>
</body>
</html>