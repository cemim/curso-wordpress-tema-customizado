<?php get_header(); ?>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="side-main">
                <?php the_archive_title('<h1 class="archive-title">','</h1>'); ?>
                <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
                <div class="container">
                    <div class="archive-itens">
                        <?php
                            if(have_posts()):
                                while(have_posts()) : the_post();
                                // Segundo parâmetro indica um arquivo especializado
                                // Nesse exemplo o Wordpress tentará chamar o arquivo content-archive
                                // Caso o mesmo não exista ele tenta abrir o arquivo content
                                get_template_part('parts/content');
                                endwhile;
                        ?>

                        <div class="wpdevs-pagination">
                            <div class="pages new">
                                <?php previous_posts_link( __("<< Newer posts", 'curso-wordpress-tema-customizado') ); ?>
                            </div>
                            <div class="pages old">
                                <?php next_posts_link( __("Older posts >>", 'curso-wordpress-tema-customizado') ); ?>
                            </div>
                        </div>

                        <?php
                            else:
                        ?>
                        <p><?php _e('Nothing yet to be displayed!', 'curso-wordpress-tema-customizado') ?></p>
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