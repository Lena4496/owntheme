<?php get_header() ?>
    <!-- Hey hey hey : < ?php wp_title(); ?> -->

    <?php if(have_posts()): ?>
        <ul>
        <?php while(have_posts()): the_post() ?> <!-- the post = declare article-->
            <li>
                <a href="<?php the_permalink() ?>">
                    <?php the_title() ?> 
            </a>
                - 
                
                <?php the_author() ?></li> <!--display the title of article and display name of author-->
            <?php endwhile ?>
        </ul>
    <?php else: ?>
        <h1>Pas d'articles</h1>

    <?php endif; ?>
<?php get_footer() ?> 

