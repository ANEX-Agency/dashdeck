<h2><?php echo tr( 'News' ); ?></h2>
<ul class="uk-list">
    <?php foreach($newsItems as $newsItem) { ?>
        <li><div class="headline"><a href="<?php print $newsItem->link; ?>" target="_blank"><?php print $newsItem->headline; ?></a></div><?php print $newsItem->text; ?></li>
    <?php } ?>
    <?php if (count($newsItems) == 0) { ?>
        <li><div class="headline"><?php echo tr('No News available at the moment!'); ?></div></li>
    <?php } ?>                                                    
</ul>