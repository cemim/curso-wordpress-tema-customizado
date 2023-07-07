<?php get_header(); ?>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="side-main">
                <section class="hero">
                    hero
                </section>
                <section class="services">
                    <h2>Services</h2>
                    <div class="container">
                        <div class="services-item">
                            <?php
                                 if(is_active_sidebar('services-1')){
                                    dynamic_sidebar('services-1');
                                 }
                             ?>
                        </div>
                        <div class="services-item">
                            <?php
                                if(is_active_sidebar('services-2')){
                                    dynamic_sidebar('services-2');
                                }
                             ?>
                        </div>
                        <div class="services-item">
                            <?php
                                if(is_active_sidebar('services-3')){
                                    dynamic_sidebar('services-3');
                                }
                             ?>
                        </div>
                    </div>
                </section>
                <section class="home-blog">
                    <h2>Latest News</h2>
                    <div class="container">
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'category__in' => array(11,10,13),
                                'category__not_in' => array(1)
                            );

                            $postlist = new WP_Query($args);

                            if($postlist->have_posts()):
                                while($postlist->have_posts()) : $postlist->the_post();
                        ?>
                        <article class="latest-news">
                            <a href="<?php the_permalink(); ?>">
                                <?php 
                                    // Exibe a miniatura das imagens destacadas nos posts
                                    // Seleciona o tamanho do wordpress que é selecionado nas configurações > mídia
                                    // Ex: 'thumb', 'medium', 'large', 'full' ou personalizado com um array(275, 275)
                                    the_post_thumbnail('large'); 
                                ?>
                            </a>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="meta-info">
                                <p>
                                    Por <span><?php the_author_posts_link(); ?></span>
                                    Categorias: <span><?php the_category(' '); ?></span>
                                    Tags: <?php the_tags('', ', '); ?>
                                </p>
                                <p><span><?php echo get_the_date(); ?></span></p>
                            </div>
                            <?php the_excerpt(); ?>
                        </article>
                        <?php
                                endwhile;

                                // Encerra o loop para caso precise usar a WP_Query novamente na mesma página
                                wp_reset_postdata();
                            else:
                        ?>
                        <p>Nada para mostrar</p>
                        <?php endif ?>
                    </div>
                </section>
            </main>
        </div>
    </div>
<?php get_footer(); ?>