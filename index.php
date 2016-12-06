<?php include_once 'app/includes/functions.php'; ?>
<?php include_once 'app/includes/legacy.php'; ?>

<!DOCTYPE html>
<html>

    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="mobile-web-app-capable" content="yes">
        
        <title><?php echo get_config()->name; ?></title>
        
		<link rel="shortcut icon" href="app/content/images/icon-128x128.png" type="image/x-icon">
		<link rel="shortcut icon" href="app/content/images/icon-128x128.png" type="image/png">
		
        <link rel="apple-touch-icon" href="app/content/images/icon-128x128.png" />
        <link rel="apple-touch-icon-precomposed" href="app/content/images/icon-128x128.png">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="app/content/images/icon-144x144.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="app/content/images/icon-114x114.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="app/content/images/icon-72x72.png">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="app/content/images/icon-57x57.png">
        
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">
        
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/uikit/2.27.2/css/uikit.min.css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/uikit/2.27.2/css/components/accordion.min.css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/uikit/2.27.2/css/components/dotnav.min.css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/uikit/2.27.2/css/components/tooltip.min.css" />
		
		<link rel="stylesheet" href="app/assets/css/style.css" />
        
		<?php if( $page == 'phpinfo' ) { ?>
            <link rel="stylesheet" href="app/assets/css/phpinfo.css" />
        <?php } ?>
    
    </head>

    <body>
        
		<?php include 'app/includes/parts/site-head.php'; ?>
		<?php include 'app/includes/parts/site-main.php'; ?>
		<?php include 'app/includes/parts/site-foot.php'; ?>
    
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/uikit/2.27.2/js/uikit.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/uikit/2.27.2/js/components/accordion.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/uikit/2.27.2/js/components/slideset.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/uikit/2.27.2/js/components/tooltip.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/uikit/2.27.2/js/components/grid.min.js"></script>
		
		<script src="app/assets/js/init.js"></script>
        
    </body>
    
</html>