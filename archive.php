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
                        ?>
                        <article>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php 
                                    // Exibe a miniatura das imagens destacadas nos posts
                                    // Seleciona o tamanho do wordpress que é selecionado nas configurações > mídia
                                    // Ex: 'thumb', 'medium', 'large', 'full' ou personalizado com um array(275, 275)
                                    the_post_thumbnail(array(275, 275)); 
                                ?>
                            </a>
                            <div class="meta-info">
                                <p>Postado em <?php echo get_the_date(); ?> Por <?php the_author_posts_link(); ?></p>
                                <p>Categoria: <?php the_category(' '); ?></p>
                                <p>Tags: <?php the_tags('', ', '); ?></p>
                            </div>
                            <?php 
                                // Content exibe conteúdo completo
                                // excerpt exibe resumo
                                //the_content();
                                the_excerpt();
                            ?>
                        </article>
                        <?php
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