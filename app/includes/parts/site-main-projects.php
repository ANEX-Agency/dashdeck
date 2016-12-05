<div class="uk-grid-width-1-1 uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 uk-grid-width-xlarge-1-6" data-uk-grid="{gutter: 0, controls: '#filter'}">

    <?php foreach( get_projects() as $project ) { ?>    
    <div data-uk-filter="<?php echo strtolower( $project->group ); ?>">
        <figure class="uk-overlay uk-overlay-hover">
            <div class="spinner"></div>
            <?php if( $project->preview ) { ?>
                <img data-src="<?php /*?><?php echo $project['preview']; ?><?php */?>http://api.screenshotlayer.com/api/capture?access_key=718ad8a7ac0775109081ffd224c61d90&url=<?php echo $project->preview; ?>&viewport=1920x1200&width=320&delay=3&placeholder=1" width="320" height="200" alt="">
            <?php } ?>
            <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-overlay-scale">
                <div>
                    <h3><?php echo $project->name; ?></h3>
                    
                    <div class="uk-grid uk-grid-width-1-2 uk-grid-width-small-1-2 uk-grid-small uk-text-center" data-uk-grid-margin="">
                        
                        <?php foreach( $project->links as $link ) { ?>
                            <div><a href="<?php echo $link->url; ?>" target="_blank" class="uk-button uk-button-primary uk-width-1-1"><?php echo $link->name; ?></a></div>
                        <?php } ?>
                        
                    </div>                    
                </div>
            </figcaption>
        </figure>          
    </div>
    <?php } ?>
    
</div>