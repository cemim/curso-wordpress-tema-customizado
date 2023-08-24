<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <header>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if('post' == get_post_type()): ?>
        <div class="meta-info">
            <p>Postado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
            <?php if(has_category()): ?>
            <p>Categorias: <?php the_category(' '); ?></p>
            <?php endif; ?>
            <?php if(has_tag()): ?>
            <p>Tags <?php the_tags('',', '); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </header>
    <div class="content">
        <?php the_excerpt(); ?>
    </div>
</article>