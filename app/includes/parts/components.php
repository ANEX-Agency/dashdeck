<h1><?php echo tr( 'Components' ); ?></h1>

<div class="uk-grid uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 uk-grid-width-xlarge-1-5 uk-grid-small uk-text-center" data-uk-grid-margin="">

    <?php
    foreach ( get_config()->components as $component )
        echo '<div><div class="uk-panel uk-panel-box">' . htmlspecialchars( $component->name ) . '<br><small>' . htmlspecialchars( $component->version ) . '</small></div></div>';
    ?>
    
</div>