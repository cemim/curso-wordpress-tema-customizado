<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

            <h1>Search results for: <?php echo get_search_query(); ?></h1>
            <?php
                get_search_form();

                while(have_posts()):
                    the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                <header>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php if('post' == get_post_type()): ?>
                    <div class="meta-info">
                        <p>Postado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
                        <p>Categorias: <?php the_category(' '); ?></p>
                        <p>Tags <?php the_tags('',', '); ?></p>
                    </div>
                    <?php endif; ?>
                </header>
                <div class="content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
            <?php
            endwhile;
            the_posts_pagination(array(
                'prev_text' => 'Anterior',
                'next_text' => 'Próximo',
            ));
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>