<div class="widget">

    <h2><?php echo tr( 'Info' ); ?></h2>
    <div class="uk-accordion" data-uk-accordion>
        
        <h4 class="uk-accordion-title">PHP</h4>
        <div class="uk-accordion-content">
    
            <p><?php printf( tr( '%sphpinfo%s shows the current configuration of PHP.' ), a( 'phpinfo' ), '</a>' ); ?></p>
    
        </div>
        
        <h4 class="uk-accordion-title">MySQL</h4>
        <div class="uk-accordion-content">
    
            <p><?php printf(tr('MySQL can be administered with %sphpMyAdmin%s.'),a('phpmyadmin'),'</a>'); ?></p>
            <p><?php echo tr("To connect to the MySQL Server from your own scripts use the following connection parameters:"); ?></p>
            
            <table class="mysql">
                <tr>
                    <th><?php echo tr("Host"); ?></th>
                    <td><?php echo $cfg['Servers'][1]['host']; ?></td>
                </tr>
                <tr>
                    <th><?php echo tr("Port"); ?></th>
                    <td><?php echo $cfg['Servers'][1]['port'] ? $cfg['Servers'][1]['port'] : "3306"; ?></td>
                </tr>
                <tr>
                    <th><?php echo tr("User"); ?></th>
                    <td><?php echo $cfg['Servers'][1]['user']; ?></td>
                </tr>
                <tr>
                    <th><?php echo tr("Password"); ?></th>
                    <td><?php echo $cfg['Servers'][1]['password']; ?></td>
                </tr>
            </table>
            
            <h3><?php echo tr("Example:"); ?></h3>
            
            <pre>$link = mysql_connect('localhost', '<?php echo $cfg['Servers'][1]['user']; ?>', '<?php echo $cfg['Servers'][1]['password']; ?>');</pre>
            
            <?php if(strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN') { ?>
            
                <p><?php echo tr("or you can connect using an UNIX Socket:"); ?></p>
                <table class="mysql">
                    <tr>
                        <th><?php echo tr("Socket"); ?></th>
                        <td>/Applications/MAMP/tmp/mysql/mysql.sock</td>
                    </tr>
                    <tr>
                        <th><?php echo tr("User"); ?></th>
                        <td><?php echo $cfg['Servers'][1]['user']; ?></td>
                    </tr>
                    <tr>
                        <th><?php echo tr("Password"); ?></th>
                        <td><?php echo $cfg['Servers'][1]['password']; ?></td>
                    </tr>
                </table>
                
                <h3><?php echo tr("Example:"); ?></h3>
                
                <pre>
                $link = mysql_connect(
                ':/Applications/MAMP/tmp/mysql/mysql.sock',
                '<?php echo $cfg['Servers'][1]['user']; ?>',
                '<?php echo $cfg['Servers'][1]['password']; ?>'
                );
                </pre>
            
            <?php } ?>
    
        </div>
        
        <h4 class="uk-accordion-title"><?php printf(tr('%s Version'),appName()); ?></h4>
        <div class="uk-accordion-content">
    
            <?php if (version_compare($configObject->version, $currVersion, '<')) { ?>
            <h4><?php echo $configObject->version . '&nbsp;&rarr;&nbsp;'; ?><a href="http://www.mamp.info/en/downloads/#mac"><?php printf(tr('Update (%s) available!'), $feed->currentVersion); ?></a></h4>
            <?php } else { ?> 
            <h4><?php echo $configObject->version; ?>&nbsp;&rarr;&nbsp;<?php echo tr('Your version is up-to-date.'); ?></h4>
            <?php } ?>  
    
        </div>
        
    </div>

</div>