<?php
/*
Template Name: Startseite neu
*/
?>
<?php get_header(); ?>
        <div id="inhalt">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $alternativ_titel = get_post_meta($post->ID, 'alternativ_titel', true);
            if ($alternativ_titel) { ?>
            <h1 class="storytitle"><?php echo $alternativ_titel; ?></h1>
            <?php } else { ?>
            <h1 class="storytitle"><?php the_title(); ?></h1>
            <?php } ?>
            <div class="der-beitrag">
                <?php the_content('weiterlesen&hellip;'); ?>
            </div> <!-- Ende des jeweiligen Beitrags -->
            <?php edit_post_link('****', '<span>&nbsp;', '&nbsp;</span>'); ?>

            <p>Die neuesten Einträge im <a href="/blog/">Blog</a>:</p>

            <ul>
                <?php wp_get_archives('type=postbypost&limit=5'); ?>
            </ul>

                <div class="blog-feedback2">
                    <div class="twitter"><iframe src="http://platform.twitter.com/widgets/tweet_button.html?url=<?php echo rawurlencode(get_permalink()) ?>&amp;text=<?php echo rawurlencode(strip_tags(get_the_title())) ?>" style="width:105px; height:20px;" allowtransparency="true" frameborder="0" scrolling="no"></iframe></div>
                    <div class="fb-likeit" title="Auf Facebook empfehlen"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo rawurlencode(get_permalink()); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=122&amp;action=recommend&amp;font=verdana&amp;colorscheme=light&amp;height=20" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:122px; height:20px;"></iframe></div>
                    <div class="g-plusone" data-size="medium"></div>
                    <div class="clearer"></div>
                </div><!-- /.blog-feedback -->

        <?php endwhile; else: ?>
                        <p>Tut mir leid, es wurde kein passender Beitrag gefunden.</p>
        <?php endif; ?>
        </div><!-- Ende #inhalt -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>