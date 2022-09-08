<?php

/*
Template Name: Inner-page
*/

get_header();
?>
<br>
</div>
<div class="inner_page_body">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6">
                <div class="left_content">
                    <div class="header">
                        <?php if (get_field('page_header')) : ?>
                            <h2><?php the_field('page_header'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="content">
                        <?php if (get_field('left_side_content')) : ?>
                            <p><?php the_field('left_side_content'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="right_content">
                    <div class="right_img">
                        <?php if (get_field('right_side_image')) : ?>
                            <img class="img-fluid" src="<?php the_field('right_side_image'); ?>" alt="">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();
