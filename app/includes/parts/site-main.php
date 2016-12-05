<main class="site-main">

    <?php if( $page ) { ?>
    
		<?php include 'site-main-' . $page . '.php'; ?> 
                        
    <?php } else { ?>
    
		<?php include 'site-main-home.php'; ?> 
    
    <?php } ?>
    
</main>