<!-- Sidebar -->
        <div id="sidebar">
            <div class="sidebar-innen">
                <div class="sidebar-rest">
                    <h3>Die Seite</h3>
                    <ul>
                        <li class="m1"><a href="/">Startseite</a></li>
    					<li class="m4"><a href="/tolkien-kalender/" title="Termine und Einträge rund um Tolkien, seine Werke und allem was damit zu tun hat">Tolkien-Kalender</a></li>
                        <li class="m2"><a href="/blog/">Blog</a></li>
                    </ul>

                    <?php 	/* Widgetized sidebar, if you have the plugin installed. */
                    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
                        <!-- Keine Widgets! -->
                    <?php endif; ?>

                    <ul>
                        <li class="m3"><a href="/links/">Links</a></li>
                    </ul>
                </div>

                <?php if (function_exists('adrotate_group')) {
                    echo "<div class=\"sidebar-empfehlungen\">";
                    echo "<h3>Empfehlungen</h3>";
                    echo adrotate_group(1);
                    echo "</div>";
                    } ?>

                <?php wp_meta(); ?>

            </div>
            <div class="sunten"></div>
        </div><!-- Ende #sidebar -->