<div class="container">
    
    <div class="uk-grid uk-margin-large-bottom" data-uk-grid-margin="">
    
        <div class="uk-width-medium-5-5 uk-row-first">

            <div class="widget">
            
                <h2><?php echo tr( 'Quicklinks' ); ?></h2>
                
                <div class="uk-margin" data-uk-slideset="{default: 2, small: 2, medium: 3, large: 4, xlarge: 6, animation: 'scale', duration: 200}">
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
            
        </div>
        <!--<div class="uk-width-medium-2-5"></div>-->
        
    </div>
    
</div>