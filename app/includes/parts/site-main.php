<main class="site-main">

    <?php if( $page == 'phpinfo' ) { ?>
    
        <div class="uk-container uk-container-center uk-margin-large-top">
            <?php include 'app/includes/parts/phpinfo.php'; ?> 
        </div>
                        
    <?php } else if ( $page == 'projects' ) { ?>
    
        <!--<div class="uk-container uk-container-center uk-margin-large-top">-->
            <?php include 'app/includes/parts/projects.php'; ?>
        <!--</div>-->
                        
    <?php } else if ( $page == 'faq' ) { ?>
    
        <div class="uk-container uk-container-center uk-margin-large-top">
            <?php include 'app/includes/parts/faq.php'; ?> 
        </div>
    
    <?php } else if ( $page == 'components' ) { ?>
    
        <div class="uk-container uk-container-center uk-margin-large-top">
            <?php include 'app/includes/parts/components.php'; ?> 
        </div>
                    
    <?php } else { ?>
    
        <!--<div class="uk-container uk-container-center uk-margin-large-top">-->
        <div class="container">
            
            <?php //include 'app/includes/parts/header.php'; ?>
            
            <hr class="uk-divider" />

            <div class="uk-grid uk-margin-large-bottom" data-uk-grid-margin="">
            
                <div class="uk-width-medium-3-5 uk-row-first">

                    <div class="widget">
                    
                        <h2><?php echo tr( 'Quicklinks' ); ?></h2>
                        
                        <div class="uk-margin" data-uk-slideset="{default: 4, small: 2, medium: 3, large: 4, animation: 'scale', duration: 200}">
                            <div class="uk-slidenav-position uk-margin">
                                <ul class="uk-slideset uk-grid uk-flex-center">
                                    <?php foreach( get_links() as $link ) { ?>
                                        <li><a href="<?php echo $link->url; ?>" target="_blank"><img src="app/<?php echo $link->preview; ?>" width="300" height="200" alt=""></a></li>
                                    <?php } ?>
                                </ul>
                                <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                                <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
                            </div>
                            <ul class="uk-slideset-nav uk-dotnav uk-flex-center"></ul>
                        </div>
                        
                    </div>
                    
                    <?php //include 'app/includes/parts/news.php'; ?>
                </div>
                <div class="uk-width-medium-2-5">
                    <?php include 'includes/parts/info.php'; ?>
                    <?php //include 'app/includes/parts/footer.php'; ?>
                </div>
                
            </div>
            
            <!--<hr class="uk-divider" />-->
            
        </div>
    
    <?php } ?>
    
</main>