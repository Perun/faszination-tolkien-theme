<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head profile="http://gmpg.org/xfn/11">
<?php if (is_home()) { ?>
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
<?php } else { ?>
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
<?php } ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php if (is_search() or is_archive()) {echo "<meta name=\"robots\" content=\"noindex, follow\" />\n";} ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="author" href="https://plus.google.com/u/0/116022878971855077582" />

    <?php wp_head(); ?>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-17442974-6']);
        _gaq.push(['_gat._anonymizeIp']);
        _gaq.push(['_trackPageview']);
        _gaq.push(['_trackPageLoadTime']);
        setTimeout('_gaq.push([\'_trackEvent\', \'NoBounce\', \'Over 10 seconds\'])',10000);
        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>

<body <?php body_class(); ?>>
<div id="container">
    <div id="kopfbereich">
        <div class="logo"><a href="/" title="Zurück zur Startseite">Faszination <span>Tolkien</span></a></div>
        <div class="unterzeile">Herr der Ringe, Hobbit &amp; Co.</div>
    </div><!-- Ende #kopfbereich -->

	<?php if(function_exists('bcn_display')) { ?><div class="brotkruemel"><?php bcn_display(); ?></div> <?php } ?>

    <div id="mitte">
<!-- Ende header.php -->