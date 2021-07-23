<h3 class="titles-section">
        <?php if( is_home() ) :  ?>
        <?= $args['title']; ?>
                <?php elseif(is_archive ()) : ?>
                        <?php
                                the_archive_title( '<h1>', '</h1>' );
                                the_archive_description( '<div >', '</div>' );
			?>
                <?php else : ?>
                        <?php the_title(); ?>
        <?php endif; ?>
</h3>