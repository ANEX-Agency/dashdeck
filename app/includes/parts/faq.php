<h1><?php echo tr("FAQ"); ?></h1>
            
<div class="uk-alert uk-alert-warning">
    <?php echo tr("Please Note: All examples assume you have installed MAMP into the C:\MAMP\ directory. If you have installed MAMP in a different location, please check your installation directory and change paths accordingly."); ?>
</div>

<div class="uk-accordion" data-uk-accordion>
    
    <h4 class="uk-accordion-title"><?php echo tr("My PHP scripts need more resources to run. Changing the PHP.ini file did not seem to work, what can I do?"); ?></h4>
    <div class="uk-accordion-content">
        <div class="uk-grid" data-uk-grid-margin="">
            <div class="uk-width-medium-1-2 uk-row-first">
                <p><?php echo tr("You must always use the template functions of MAMP PRO to edit the configuration files of the MAMP subsystem."); ?></p>
                <p><?php echo tr("If can change them bypassing MAMP PRO your changes will most likely be ignored or overwritten the next time the servers start."); ?></p>
                <p><?php echo tr("Use the submenu of the File->Edit Template->PHP menu to select the PHP.ini file you want to change."); ?></p>
                <p><?php echo tr("All this holds also true for other parts of MAMP. Use the corresponding submenu to modify the Apache or MySQL config files."); ?></p>
                <p><?php echo tr("In the template editing window do not modify or delete the placeholders starting with and ending in &quot;MAMP&quot;. This could break some or all functions of MAMP PRO."); ?></p>
            </div>
        
            <div class="uk-width-medium-1-2">
                <img src="app/assets/images/<?php print $language; ?>/template_pro.png" alt="Templates" />
            </div>
        </div>
    </div>

    <h4 class="uk-accordion-title"><?php echo tr("How can I change the MySQL password?"); ?></h4>
    <div class="uk-accordion-content">
        <p><?php echo tr("Switch to the MySQL tab and click &quot;Change password&quot;."); ?></p>
        <p><?php echo tr("Type the new password twice. Click &quot;Change&quot; to save it. This will also automatically save the password to phpMyAdmin."); ?></p>
        <p><?php echo tr("You still need to change the MySQL password in your own scripts though."); ?> </p>           
    </div>

    <h4 class="uk-accordion-title"><?php echo tr("Where can I change the ports for Apache and MySQL?"); ?></h4>
    <div class="uk-accordion-content">
    
        <div class="uk-grid" data-uk-grid-margin="">
            <div class="uk-width-medium-1-2 uk-row-first">
                <p><?php echo tr("You change the ports in the General tab of the MAMP PRO program:"); ?></p>
            </div>
        
            <div class="uk-width-medium-1-2">
                <img src="app/assets/images/<?php print $language; ?>/ports_pro.png" alt="Ports" />            
            </div>
        </div>
        
    </div>
    
    <h4 class="uk-accordion-title"><?php echo tr("Where should I save my HTML and PHP pages?"); ?></h4>
    <div class="uk-accordion-content">
    
        <div class="uk-grid" data-uk-grid-margin="">
            <div class="uk-width-medium-1-2 uk-row-first">
                <p><?php echo tr("By default, PHP and HTML Pages should be copied to the htdocs folder which is located in C:\MAMP\htdocs\."); ?></p>
                <p><?php echo tr("This folder is called &quot;Document Root&quot;."); ?></p>
                <p><?php echo tr("You can change the path for the Document Root folder in the hosts section of MAMP PRO:"); ?></p>
            </div>
        
            <div class="uk-width-medium-1-2">
                <img src="app/assets/images/<?php print $language; ?>/documentRoot_pro.png" alt="Document Root" />
            </div>
        </div>
                
    </div>
    
    <h4 class="uk-accordion-title"><?php echo tr("XYZ does not appear in the Extras list. Why is it not available?"); ?></h4>
    <div class="uk-accordion-content">

        <div class="uk-grid" data-uk-grid-margin="">
            <div class="uk-width-medium-1-2 uk-row-first">
                <p><?php echo tr("Please make sure that your host settings meet the minimum requirements of XYZ (PHP version, disk space, etc.) and that your computer is connected to the Internet."); ?></p>
                <p><?php echo tr("If XYZ still does not show up in the Extras list it might (still) not be available as an Extra. We are making more and more Extras available over time."); ?></p>
                <p><?php echo tr("You can always make a feature request so we know which Extras we should tackle next."); ?></p>
            </div>
        
            <div class="uk-width-medium-1-2">
                <img src="app/assets/images/<?php print $language; ?>/extras_pro.png" alt="Extras" />
            </div>
        </div>

    </div>
        
</div>