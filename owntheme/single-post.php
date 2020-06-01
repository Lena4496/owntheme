<?php get_header() ?>
<!--ctrl shift p + intelliphense = reorganize the code--->

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <h2><?php the_title() ?></h2>
        <!-- <p>
                <img src="< ?php the_post_thumbnail_url() ?>">
            </p> -->
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top' ,  'alt' =>'serpent', 'style' => 'height: 25rem; width : 20rem;']) ?>
        <!--display title, content, img--->
        <?php the_content() ?>
<?php endwhile;
endif; ?>
<?php get_footer() ?>