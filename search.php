<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

            <h1><?php _e('Search results for', 'curso-wordpress-tema-customizado') ?>: <?php echo get_search_query(); ?></h1>
            <?php
                get_search_form();

                while(have_posts()):
                    the_post();

                    get_template_part('parts/content', 'search');
                    
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