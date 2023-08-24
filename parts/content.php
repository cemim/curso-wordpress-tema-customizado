<article>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if(has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>">
            <?php 
                // Exibe a miniatura das imagens destacadas nos posts
                // Seleciona o tamanho do wordpress que é selecionado nas configurações > mídia
                // Ex: 'thumb', 'medium', 'large', 'full' ou personalizado com um array(275, 275)
                the_post_thumbnail(array(275, 275)); 
            ?>
        </a>
    <?php endif; ?>
    <div class="meta-info">
        <p>Postado em <?php echo get_the_date(); ?> Por <?php the_author_posts_link(); ?></p>
        <?php if(has_category()): ?>
        <p>Categoria: <?php the_category(' '); ?></p>
        <?php endif ?>
        <?php if(has_tag()): ?>
        <p>Tags: <?php the_tags('', ', '); ?></p>
        <?php endif; ?>
    </div>
    <?php 
        // Content exibe conteúdo completo
        // excerpt exibe resumo
        //the_content();
        the_excerpt();
    ?>
</article>