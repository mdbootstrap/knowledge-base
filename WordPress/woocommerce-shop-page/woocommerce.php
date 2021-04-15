<?php get_header(); ?>

<div class="container">
    <?php

    if (!is_shop()) {
        woocommerce_content();
    } else { ?>

        <div class="container my-3">

            <div class="row">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 3,
                    'paged'          => $paged
                );

                $counter = 1;
                $loop = new WP_Query($args);

                if ($loop->have_posts()) {
                    while ($loop->have_posts()) : $loop->the_post();

                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail');
                        $regular_price = get_post_meta(get_the_ID(), '_regular_price', true);
                        $sale_price = get_post_meta(get_the_ID(), '_sale_price', true);
                        $terms = get_the_terms($post->ID, 'product_cat');
                        foreach ($terms as $term) {
                            $product_cat_name = $term->name;
                            $product_cat_id = $term->term_id;
                            break;
                        }

                ?>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="<?php echo $image[0] ?>" class="img-fluid" />
                                    <a href="<?php echo get_permalink() ?>">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                    </a>
                                </div>
                                <div class="card-body d-flex justify-content-between">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <div>
                                        <a href="<?php echo esc_url(get_term_link($product_cat_id, 'product_cat')); ?>" class="btn btn-primary btn-sm"><?php echo $product_cat_name ?></a>
                                        <a href="<?php echo get_permalink(wc_get_page_id('cart'))  . "?add-to-cart=" .  get_the_ID(); ?> " class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Add to cart">
                                            £<?php echo $regular_price ?>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                <?php


                        $counter++;

                    endwhile;
                } else {
                    echo __('No products found');
                } ?>




            </div>
        </div>

    <?php }    ?>
</div>

<?php get_footer(); ?>