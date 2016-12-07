<?php

/**
 * get_config()
 * gets the configuration file (JSON) and returns the whole object
 *
 * @since 1.0.0
 */
function get_config() {
	
	// read config file and create config object
	$config = @file_get_contents( dirname( dirname( __FILE__ ) ). '/config.json' );
	$configObject = $config ? json_decode( $config ) : null;

    return $configObject;
	
}

function get_menus() {
	
    $config = get_config();
	return $config->menus;
	
}

function get_links() {
	
    $config = get_config();
	return $config->links;
	
}

function get_projects() {
	
    $config = get_config();
	return $config->content->projects;
	
}

function get_projects_groups() {
	
    $projects = get_projects();
	$groups = array();
		
	foreach( $projects as $project ) {
			$groups[] = $project->group;
	}
	
	$groups = array_map("unserialize", array_unique(array_map("serialize", $groups)));

	return $groups;
	
}
