<?php get_header() ?>
<!-- Hey hey hey : < ?php wp_title(); ?> -->

<?php if (have_posts()) : ?>
    <div class="row">


        <?php while (have_posts()) : the_post() ?>
            <!-- the post = declare article , need for stop loop-->
            <div class="col-sm-4">
                <div class="card">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' =>'serpent', 'style' => 'height: 420px;'])?> <!-- display img : generate balise img that contain the link-->
                <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                        <p class="card-text"><?php the_content() ?></p>
                        <!--the_excerpt('En voir plus')or the_content()-->
                        <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
                    </div>
                </div>


                <!-- < ? php 
        global $post;
        global $wp_query;
        var_dump($post);
        var_dump($wp_query);
        die();
        ?> if u need-->
                <!--   <li>
                <a href="< ?php the_permalink() ?>">
                    < ?php the_title() ?> 
            </a>
            -->
            </div>
            <!--< ?php the_author() ?></li> display the title of article and display name of author -->
        <?php endwhile ?>
        <!-- </ul> -->
    </div>

<?php else : ?>
    <h1>Pas d'articles</h1>

<?php endif; ?>
<?php get_footer() ?>