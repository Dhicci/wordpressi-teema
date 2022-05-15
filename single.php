<?php
    # head tag'i sees asuv, scriptid jms.
    wp_head();
?>
<body>
    <?php get_header();?>
    <div class="contentContainer">
        <h1> <?php the_title();?></h1>
        <?php getTheFirstImage();?>
        <p class="content"> <?php echo wp_strip_all_tags(get_the_content());?></p>
        <p>Eseme suurus: <?php echo get_post_meta(get_the_ID(), $key = 'size', $single = true); ?></p>
        <?php
            previous_post_link();
            next_post_link();
        ?>
    </div>
    <?php get_footer();?>
</body>