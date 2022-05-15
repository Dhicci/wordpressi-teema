<?php
    # head tag'i sees asuv, scriptid jms.
    wp_head();
?>
<body>
    <?php
        get_header();
    ?>
    <div id="table">
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                    <div class="item" onclick="location.href='<?php echo the_permalink();?>;'">
                        <p class="itemName"><?php the_title(); ?></p>
                        <?php getTheFirstImage();?>
                        <p class="description"><?php the_excerpt();?></p>
                    </div><?php
                }
            }
        ?>
    </div>
    <?php get_footer();?>
</body>