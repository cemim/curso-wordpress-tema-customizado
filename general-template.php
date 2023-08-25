<?php
/*
Template Name: General Template
*/
?>
<?php get_header(); ?>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="side-main">
                <div class="container">
                    <div class="general-template">
                        <?php
                            if(have_posts()):
                                while(have_posts()) : the_post();
                        ?>
                        <article>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </article>
                        <?php
                                endwhile;
                            else:
                        ?>
                        <p><?php _e('Nada para mostrar', 'curso-wordpress-tema-customizado') ?></p>
                        <?php endif ?>
                    </div>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?>