<?php get_header();?>
<?php
$field = get_field_object('field_633ccfb82ee58');
?>


<div class="container">
    <h1><?php the_title();?></h1>
    <h2><?php echo $field['value'] ?></h2>
    <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
    <?php endwhile; endif;?>
    
</div>

<?php get_footer();?>