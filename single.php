<?php get_header(); ?>
        <div id="inhalt">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Der Verweis (Permalink) zu: <?php the_title(); ?>"><?php the_title(); ?></a></h1>
                <div class="beitrags-info">Von <?php the_author() ?> am <?php the_time('d. F Y'); ?> um <?php the_time('H:i'); ?><?php edit_post_link('****', '<span>&nbsp;', '&nbsp;</span>'); ?></div>
                <div>
                    <?php the_content('weiterlesen&hellip;'); ?>
                </div> <!-- Ende des jeweiligen Beitrags -->
                <div class="blog-feedback2">
                    <p><?php the_tags('Tags: ', ', ', ''); ?><?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) { ?> – <a href="./trackback/" rel="nofollow"> Trackback-Adresse</a><?php } ?></p>
                    <?=do_shortcode('[shariff]'); ?>
                </div><!-- /.blog-feedback -->

        <?php comments_template('', true);  /* Get wp-comments.php template */ ?>

        <?php endwhile; else: ?>
                        <p>Tut mir leid, es wurde kein passender Beitrag gefunden.</p>
        <?php endif; ?>
        </div><!-- Ende #inhalt -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>