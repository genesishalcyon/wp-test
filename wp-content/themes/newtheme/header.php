<!DOCTYPE html>
<html>
	
		<head>
		    
		    <?php wp_head();?>
		    
		</head>

		
<body <?php body_class();?>>
    

<header class="sticky-top d-flex flex-row">
    <div class="container">
        <?php 
        
        // wp_nav_menu(
        //     array(
        //         'theme_location' => 'top-menu',
        //          'menu_class' => 'nav navbar-nav list-inline '
        //         )
        // );
        $consult_menu = wp_nav_menu(array(
                    'theme_location' => 'top-menu',
                    'menu_id' => 'menu',
                    'menu_class' => 'nav navbar-nav list-inline flex-row',
                    'echo' => false
                )
            );
            $consult_menu = str_replace('menu-item', 'list-inline-item', $consult_menu);
            echo $consult_menu;
        
        ?>
    </div>
    
</header>
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}?>