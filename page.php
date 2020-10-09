<?php get_header();?>
<section id="container">
<aside>
    <?php get_sidebar();?>
</aside>

<!-- The Loop -->
<?php if(have_posts()):
    while(have_posts()):
        the_post()?>
    
<article>
        <h2><?php the_title();?></h2>
        <div><?php the_content();?></div>
</article>
    <?php endwhile; else:?>
    <p>Pas d'articles</p>
    <?php endif?>
</section>
<?php get_footer();?>
