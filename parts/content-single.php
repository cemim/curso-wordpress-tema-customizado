<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p>Postado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
            <p>Categorias: <?php the_category(' '); ?></p>
            <p>Tags <?php the_tags('',', '); ?></p>
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>
        <!-- wp_link_pages Cria uma navegação quando o post tiver com o bloco quebra de página -->
        <?php wp_link_pages(); ?>
    </div>
</article>