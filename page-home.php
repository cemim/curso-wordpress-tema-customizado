<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="side-main">
                    <section class="hero">
                        hero
                    </section>
                    <section class="services">
                        services
                    </section>
                    <section class="home-blog">
                        <div class="container">
                            <div class="blog-itens">
                                <?php
                                    if(have_posts()):
                                        while(have_posts()) : the_post();
                                ?>
                                <article>
                                    <h2><?php the_title(); ?></h2>
                                    <div class="meta-info">
                                        <p>Postado em <?php echo get_the_date(); ?> Por <?php the_author_posts_link(); ?></p>
                                        <p>Categoria: <?php the_category(' '); ?></p>
                                        <p>Tags: <?php the_tags('', ', '); ?></p>
                                    </div>
                                    <?php the_content(); ?>
                                </article>
                                <?php
                                        endwhile;
                                    else:
                                ?>
                                <p>Nada para mostrar</p>
                                <?php endif ?>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
<?php get_footer(); ?>