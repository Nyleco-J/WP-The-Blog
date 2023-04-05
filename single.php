<?php get_header(); ?>

<div class="theContent">
    <div class="container">
        <div class="wrapper">
                <div class="balloon">
                <h1><?php the_title(); ?></h1>
                    <?php echo get_the_post_thumbnail();?>
                    <p> <small><?php echo get_the_date('M-d-Y'); ?> </small></p>
                    
                    <?php the_content();?>
                    <h4><?php echo get_the_excerpt() ?></h4>
                    <a href="<?php echo the_permalink(); ?>">Read More...</a>
                    <p class ="tags"><?php 
                                    $post_tags = get_the_tags();

                                    if($post_tags){
                                        foreach ($post_tags as $tag){
                                ?>
                                    <small><?php echo $tag ->name ?></small>

                                <?php
                                        }
                                    }
                                ?>
                                </p>
                </div>

                
                <div class="left">
                    <div class="left__img">
                        <?php echo get_the_post_thumbnail();?>
                    </div>
                    <div class="left__text">
                        <?php echo get_the_date('M-d-Y'); ?>
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>