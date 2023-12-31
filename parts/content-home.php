<article class="latest-news">
    <?php if(has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>">
            <?php 
                // Exibe a miniatura das imagens destacadas nos posts
                // Seleciona o tamanho do wordpress que é selecionado nas configurações > mídia
                // Ex: 'thumb', 'medium', 'large', 'full' ou personalizado com um array(275, 275)
                the_post_thumbnail('large'); 
            ?>
        </a>
    <?php endif; ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="meta-info">
        <p>
            <?php _e('Por', 'curso-wordpress-tema-customizado') ?> <span><?php the_author_posts_link(); ?></span>
            <?php if(has_category()): ?>
                <?php _e('Categorias', 'curso-wordpress-tema-customizado') ?>: <span><?php the_category(' '); ?></span>
            <?php endif ?>
            <?php if(has_tag()): ?>
                <?php _e('Tags', 'curso-wordpress-tema-customizado') ?>: <?php the_tags('', ', '); ?>
            <?php endif ?>
        </p>
        <p><span><?php echo get_the_date(); ?></span></p>
    </div>
    <?php the_excerpt(); ?>
</article>