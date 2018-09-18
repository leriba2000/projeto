<?php get_header();?>
    <?php
        if(have_posts()){
            the_post();
            
            
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="jumnotron">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php the_content(); ?>
        </div>
    </div>
    
    <?php
    
            }
        
    ?>
<?php get_footer();?>