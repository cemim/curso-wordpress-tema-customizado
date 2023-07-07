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
                </div>
            </article>
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