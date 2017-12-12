<?php get_header(); ?>
        <div id="inhalt">
			<h1>News zu Herr der Ringe, Hobbit &amp; Co.</h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h2 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Der Verweis (Permalink) zu: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <div class="beitrags-info">Von <?php the_author() ?> am <?php the_time('d. F Y'); ?> um <?php the_time('H:i'); ?><?php edit_post_link('****', '<span>&nbsp;', '&nbsp;</span>'); ?></div>
                <div class="der-beitrag">
					<?php if (has_post_thumbnail()) { ?>
						    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
						<?php } else { ?>
                            <a href="<?php the_permalink() ?>"><img src="/wp-content/uploads/2010/09/artikel.jpg" width="120" height="120" alt="" class="attachment-thumbnail" /></a><?php } ?>
                    <div class="ausschnitt"><?php the_excerpt(); ?></div>
					<div class="clearer"></div>
				</div> <!-- Ende des jeweiligen Beitrags -->
                <div class="blog-feedback" style="margin-bottom: 32px;">
                    <?php wp_link_pages(); ?>
                    <?php the_tags('Tags: ', ', ', ''); ?> – <?php comments_popup_link('Kommentare (0)', 'Kommentare (1)', 'Kommentare (%)'); ?>
                </div>
            <!-- Ende des Bereiches um den jeweiligen Beiträge -->

        <?php comments_template('', true);  /* Get wp-comments.php template */ ?>

        <?php endwhile; else: ?>
                        <p>Tut mir leid, es wurde kein passender Beitrag gefunden.</p>
        <?php endif; ?>

			<div class="zentriert"><?php posts_nav_link('&nbsp;&ndash;&nbsp;', '&laquo; neuere Nachrichten', 'ältere Nachrichten &raquo;'); ?></div>
        </div><!-- Ende #inhalt -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>