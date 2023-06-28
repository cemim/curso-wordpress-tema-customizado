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
                        ?>
                        <article>
                            <h2><?php the_title(); ?></h2>
                            <?php 
                                // Exibe a miniatura das imagens destacadas nos posts
                                // Seleciona o tamanho do wordpress que é selecionado nas configurações > mídia
                                // Ex: 'thumb', 'medium', 'large', 'full' ou personalizado com um array(275, 275)
                                the_post_thumbnail(array(275, 275)); 
                            ?>
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
            </main>
        </div>
    </div>
    
<?php get_footer(); ?>