<?php
/*
Template Name: Ohne Kommentare
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
            <!-- Ende des Bereiches um den jeweiligen Beiträge -->

        <?php endwhile; else: ?>
                        <p>Tut mir leid, es wurde kein passender Beitrag gefunden.</p>
        <?php endif; ?>
        </div><!-- Ende #inhalt -->
<?php get_sidebar(); ?> 
<?php get_footer(); ?>