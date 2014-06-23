<article class="<?php post_class('col-sm-3'); ?>">
    <img class="img-responsive" src="<?php the_post_thumbnail(); ?>" alt="">
    <h3><?php thetitle(); ?></h3>
    <p><?php the_excerpt(); ?></p>
    <button href="<?php the_permalink(); ?>" type="button">More</button>
</article>