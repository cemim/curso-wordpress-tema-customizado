<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <?php
                while(have_posts()):
                    the_post();
            ?>
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
            <div class="wpdevs-pagination">
                <div class="pages next">
                    <?php next_post_link('&laquo; %link'); ?>
                </div>
                <div class="pages previous">
                    <?php previous_post_link('%link &raquo;'); ?>
                </div>
            </div>
            <?php
                if(comments_open() || get_comments_number()){
                    comments_template();
                }

                endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>