<div>
    <?php 
    $arrStr = '';
    
    foreach ($configObject->components as $value) {
        $arrStr = $arrStr . '•' . $value->name;
    } 
    
    if ( strpos( $arrStr, 'Nginx' ) !== false ) {
        echo '<img src="images/4logos.png" alt="Apache, Nginx, MySQL, PHP"/>';
    } else {
        echo '<img src="images/4logos_no_nginx.png" alt="Apache, MySQL, PHP"/>';
    }
    ?> 
</div>