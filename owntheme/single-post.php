<?php get_header() ?> <!--ctrl shift p + intelliphense = reorganize the code--->

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
        <?php the_post_thumbnail()?> <!-- diplsya title, content, img-->
<?php endwhile;
endif; ?>
<?php get_footer() ?>