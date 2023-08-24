<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p>Postado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
            <?php if(has_category()): ?>
            <p>Categorias: <?php the_category(' '); ?></p>
            <?php endif ?>
            <?php if(has_tag()): ?>
            <p>Tags <?php the_tags('',', '); ?></p>
            <?php endif; ?>
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>
        <!-- wp_link_pages Cria uma navegação quando o post tiver com o bloco quebra de página -->
        <?php wp_link_pages(); ?>
    </div>
</article>