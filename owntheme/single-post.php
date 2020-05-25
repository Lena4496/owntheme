<?php get_header() ?> <!--ctrl shift p + intelliphense = reorganize the code--->

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <h1><?php the_title() ?></h1>
            <p>
                <img src="<?php the_post_thumbnail_url() ?>" alt="qq">
            </p>
        <!-- < ?php the_post_thumbnail()?> diplsay title, content, img -->
        <?php the_content() ?>
<?php endwhile;
endif; ?>
<?php get_footer() ?>