<nav class="uk-navbar uk-navbar-attached">

    <ul class="uk-navbar-nav uk-hidden-small">
    
        <li<?php if($page=="home") { ?> class="uk-active"<?php } ?>><a href="index.php?language=<?php echo $language; ?>"><img src="app/content/images/icon.png"></a></li>
        <li<?php if($page=="projects") { ?> class="uk-active"<?php } ?>><a href="index.php?page=projects&amp;language=<?php echo $language; ?>"><?php echo tr( "Projects" ); ?></a></li>
        
        <li class="uk-parent" data-uk-dropdown>
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo tr("Tools") ?> <b class="caret"></b></a>

            <div class="uk-dropdown uk-dropdown-navbar">
                <ul class="uk-nav uk-nav-navbar">
                
                    <li<?php if($page=="phpinfo") { ?> class="uk-active"<?php } ?>><a href="index.php?language=<?php echo $language; ?>&amp;page=phpinfo">phpInfo</a></li>
                    
                    <?php /*?><?php if(extension_loaded('apc')): ?>
                        <li<?php if($page=="apc") { ?> class="active"<?php } ?>><a target="_blank" href="<?php echo "apc.php"; ?>">APC</a></li>
                    <?php endif ?>
                    <?php if(extension_loaded('eAccelerator')): ?>
                        <li<?php if($page=="eaccelerator") { ?> class="active"<?php } ?>><a target="_blank" href="<?php echo "eaccelerator.php"; ?>">eAccelerator</a></li>
                    <?php endif ?>
                    <?php if(extension_loaded('XCache')): ?>
                        <li<?php if($page=="xcache") { ?> class="active"<?php } ?>><a target="_blank" href="<?php echo "xcache-admin/"; ?>">XCache</a></li>
                    <?php endif ?>
                    <?php if(version_compare(PHP_VERSION, '5.3.0', '>=')) { ?>
                        <li<?php if($page=="phpmyadmin") { ?> class="active"<?php } ?>><a href="<?php echo "index.php?page=phpmyadmin&amp;language=" . $language; ?>">phpMyAdmin</a></li>
                    <?php } ?>
                    <?php if(version_compare(PHP_VERSION, '5.2.0', '>=') and version_compare(PHP_VERSION, '5.4.0', '<')) { ?>
                        <li<?php if($page=="sqlitemanager") { ?> class="active"<?php } ?>><a target="_blank" href="<?php echo "/SQLiteManager/"; ?>">SQLite Manager</a></li>
                    <?php } ?>
                    <li<?php if($page=="phpliteadmin") { ?> class="active"<?php } ?>><a target="_blank" href="<?php echo "/phpLiteAdmin/"; ?>">phpLiteAdmin</a></li><?php */?>
                
                </ul>
            </div>
            
        </li>

        <li class="uk-parent" data-uk-dropdown>
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo tr("Help") ?> <b class="caret"></b></a>

            <div class="uk-dropdown uk-dropdown-navbar">
                <ul class="uk-nav uk-nav-navbar">

                    <li<?php if($page=="faq") { ?> class="uk-active"<?php } ?>><a href="index.php?page=faq&amp;language=<?php echo $language; ?>"><?php echo tr("FAQ"); ?></a></li>
                    <li<?php if($page=="components") { ?> class="uk-active"<?php } ?>><a href="index.php?page=components&amp;language=<?php echo $language; ?>"><?php echo tr("Components"); ?></a></li>
                
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
            <?php
			
			foreach( get_projects_groups() as $group ) {
				echo '<li data-uk-filter="' . strtolower( $group ) . '"><a href="#">' . $group . '</a></li>';
			}
			?>
        </ul>

    </div>
    
    <?php } ?>
    
    <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
    <div class="uk-navbar-brand uk-navbar-center uk-visible-small">MAMP</div>
</nav>
