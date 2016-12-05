<nav class="uk-navbar uk-navbar-attached">

    <ul class="uk-navbar-nav uk-hidden-small">
    
        <li<?php if($page=="home") { ?> class="uk-active"<?php } ?>><a href="index.php?language=<?php echo $language; ?>"><img src="app/content/images/icon.png"></a></li>
        <li<?php if($page=="projects") { ?> class="uk-active"<?php } ?>><a href="index.php?page=projects&amp;language=<?php echo $language; ?>"><?php echo tr( "Projects" ); ?></a></li>
        
        <li class="uk-parent" data-uk-dropdown>
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo tr( "Tools" ); ?> <b class="caret"></b></a>

            <div class="uk-dropdown uk-dropdown-navbar">
                <ul class="uk-nav uk-nav-navbar">
                
                    <li<?php if($page=="phpinfo") { ?> class="uk-active"<?php } ?>><a href="index.php?language=<?php echo $language; ?>&amp;page=phpinfo">phpInfo</a></li>
                    
                </ul>
            </div>
            
        </li>

    </ul>

    <div class="uk-navbar-flip">
    
        <ul class="uk-navbar-nav uk-hidden-small">
        
            <?php /*?><?php if (1 != is_bought()){ ?>
                <li><a href="<?php echo buyLink(); ?>" target="_blank" class="uk-button uk-button-primary"><?php echo tr("Get MAMP PRO"); ?></a></li>
            <?php } ?><?php */?>
                                
        </ul>
    </div>
    
    <?php if ( $page == 'projects' ) { ?>
        
    <div class="uk-navbar-flip">
    
        <ul id="filter" class="uk-subnav uk-subnav-pill">
            <li class="uk-active" data-uk-filter=""><a href="#"><?php echo tr( 'All' ); ?></a></li>
            <?php foreach( get_projects_groups() as $group ) {
				echo '<li data-uk-filter="' . strtolower( $group ) . '"><a href="#">' . $group . '</a></li>';
			} ?>
        </ul>

    </div>
    
    <?php } ?>
    
    <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
    <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><?php echo get_config()->name; ?></div>
</nav>
