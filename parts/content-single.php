<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p><?php _e('Postado em', 'curso-wordpress-tema-customizado') ?> <?php echo get_the_date(); ?> <?php _e('por', 'curso-wordpress-tema-customizado') ?> <?php the_author_posts_link(); ?></p>
            <?php if(has_category()): ?>
            <p><?php _e('Categorias', 'curso-wordpress-tema-customizado') ?>: <?php the_category(' '); ?></p>
            <?php endif; ?>
            <?php if(has_tag()): ?>
            <p><?php _e('Tags', 'curso-wordpress-tema-customizado') ?>: <?php the_tags('',', '); ?></p>
            <?php endif; ?>
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>
        <!-- wp_link_pages Cria uma navegação quando o post tiver com o bloco quebra de página -->
        <?php wp_link_pages(); ?>
    </div>
</article>