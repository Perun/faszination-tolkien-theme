<?php
/*
Template Name: Kalender
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
				<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;showTz=0&amp;height=530&amp;wkst=2&amp;bgcolor=%23faf9f5&amp;src=ttob1lfftabk92ku7rvrlp9fjs%40group.calendar.google.com&amp;color=%230F4B38&amp;ctz=Europe%2FBerlin" style="border-width:0;" width="100%" height="530" frameborder="0" scrolling="no"></iframe>
            </div> <!-- Ende des jeweiligen Beitrags -->
            <?php edit_post_link('****', '<span>&nbsp;', '&nbsp;</span>'); ?>
            <div class="blog-feedback2">

                    <?=do_shortcode('[shariff]'); ?>
                </div><!-- /.blog-feedback -->
            <!-- Ende des Bereiches um den jeweiligen Beiträge -->

        <?php comments_template('', true);  /* Get wp-comments.php template */ ?>

        <?php endwhile; else: ?>
                        <p>Tut mir leid, es wurde kein passender Beitrag gefunden.</p>
        <?php endif; ?>
        </div><!-- Ende #inhalt -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>