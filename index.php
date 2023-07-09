<?php get_header(); ?>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="side-main">
                <h1>Blog</h1>
                <div class="container">
                    <div class="blog-itens">
                        <?php
                            if(have_posts()):
                                while(have_posts()) : the_post();

                                get_template_part('parts/content');

                                endwhile;
                        ?>

                        <div class="wpdevs-pagination">
                            <div class="pages new">
                                <?php previous_posts_link( "<< Newer posts" ); ?>
                            </div>
                            <div class="pages old">
                                <?php next_posts_link( "Older posts >>" ); ?>
                            </div>
                        </div>

                        <?php
                            else:
                        ?>
                        <p>Nada para mostrar</p>
                        <?php endif ?>
                    </div>
                    <!-- Por padrão chama o arquivo sidebar.php -->
                    <!-- Para criar um arquivo com outro nome deve-se criar um arquivo sidebar-slug e passar o slug como parâmetro -->
                    <?php get_sidebar(); ?>
                </div>
            </main>
        </div>
    </div>
    
<?php get_footer(); ?>