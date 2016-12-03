<?php

function config() {
	
	$config = array(
	
		'menus'		=> array(

			array (
				'name' 				=> 'Access',
				'id' 				=> 'access',
				'logo'				=> 'images/cover-access.png',
				'url'				=> '//access.anex.at',
			),
			
			array (
				'name' 				=> 'Salesking',
				'id' 				=> 'salesking',
				'logo'				=> 'images/cover-salesking.png',
				'url'				=> '//salesking.anex.at',
			),
			
			array (
				'name' 				=> 'Helpscout',
				'id' 				=> 'helpscout',
				'logo'				=> 'images/cover-helpscout.png',
				'url'				=> '//secure.helpscout.net/',
			),
			
			array (
				'name' 				=> 'InternetX',
				'id' 				=> 'internetx',
				'logo'				=> 'images/cover-internetx.png',
				'url'				=> '//login.autodns.com/',
			),
			
			array (
				'name' 				=> 'InternetX',
				'id' 				=> 'internetx',
				'logo'				=> 'images/cover-internetx.png',
				'url'				=> '//login.sslmanager.de/',
			),
			
			array (
				'name' 				=> 'Raiffeisen',
				'id' 				=> 'raiffeisen',
				'logo'				=> 'images/cover-raiffeisen.png',
				'url'				=> '//banking.raiffeisen.at/logincenter/',
			),
			
			array (
				'name' 				=> 'Holvi',
				'id' 				=> 'holvi',
				'logo'				=> 'images/cover-holvi.png',
				'url'				=> '//holvi.com/login/',
			),
			
			array (
				'name' 				=> 'Paypal',
				'id' 				=> 'paypal',
				'logo'				=> 'images/cover-paypal.png',
				'url'				=> '//paypal.com/',
			)
		
		),
		
		'links'		=> array(
		
			array (
				'name' 				=> 'Access',
				'id' 				=> 'access',
				'logo'				=> 'images/cover-access.png',
				'url'				=> '//access.anex.at',
			),
			
			array (
				'name' 				=> 'Salesking',
				'id' 				=> 'salesking',
				'logo'				=> 'images/cover-salesking.png',
				'url'				=> '//salesking.anex.at',
			),
			
			array (
				'name' 				=> 'Helpscout',
				'id' 				=> 'helpscout',
				'logo'				=> 'images/cover-helpscout.png',
				'url'				=> '//secure.helpscout.net/',
			),
			
			array (
				'name' 				=> 'InternetX',
				'id' 				=> 'internetx',
				'logo'				=> 'images/cover-internetx.png',
				'url'				=> '//login.autodns.com/',
			),
			
			array (
				'name' 				=> 'InternetX',
				'id' 				=> 'internetx',
				'logo'				=> 'images/cover-internetx.png',
				'url'				=> '//login.sslmanager.de/',
			),
			
			array (
				'name' 				=> 'Raiffeisen',
				'id' 				=> 'raiffeisen',
				'logo'				=> 'images/cover-raiffeisen.png',
				'url'				=> '//banking.raiffeisen.at/logincenter/',
			),
			
			array (
				'name' 				=> 'Holvi',
				'id' 				=> 'holvi',
				'logo'				=> 'images/cover-holvi.png',
				'url'				=> '//holvi.com/login/',
			),
			
			array (
				'name' 				=> 'Paypal',
				'id' 				=> 'paypal',
				'logo'				=> 'images/cover-paypal.png',
				'url'				=> '//paypal.com/',
			)
		
		),
		
		'projects'	=> array(
		
			array (
				'name' 				=> 'Joe Hana',
				'id' 				=> 'joehana',
				'preview'			=> 'http://joehana.com',
				'group'				=> array( 'Websites' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//joehana.com/',
						'label'		=> 'SITE'
					),
					array(
						'link'		=> '//joehana.com/wp-admin',
						'label'		=> 'ADMIN'
					)
				)
			),
		
			array (
				'name' 				=> 'Codex',
				'id' 				=> 'codex',
				'preview'			=> 'http://wpsight.anex.at/live/concept',
				'group'				=> array( 'Themes' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//wpsight.anex.at/live/concept',
						'label'		=> 'SITE'
					),
					array(
						'link'		=> '//wpsight.anex.at/live/concept/wp-admin',
						'label'		=> 'ADMIN'
					)
				)
			),
		
			array (
				'name' 				=> 'Kolarik',
				'id' 				=> 'kolarik',
				'preview'			=> 'https://kolarik.at',
				'group'				=> array( 'Websites' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//projects.anex.at/kolarik/dev/site/',
						'label'		=> 'DEV'
					),
					array(
						'link'		=> '//projects.anex.at/kolarik/dev/site/wp-admin',
						'label'		=> 'ADMIN'
					),
					array(
						'link'		=> '//kolarik.at',
						'label'		=> 'LIVE'
					),
					array(
						'link'		=> '//kolarik.at/wp-admin',
						'label'		=> 'ADMIN'
					)
				)
			),
		
			array (
				'name' 				=> 'Koki',
				'id' 				=> 'koki',
				'preview'			=> 'http://kids.kolarik.at',
				'group'				=> array( 'Websites' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//kids.kolarik.at/',
						'label'		=> 'SITE'
					),
					array(
						'link'		=> '//kids.kolarik.at/wp-admin',
						'label'		=> 'ADMIN'
					)
				)
			),
			
			array (
				'name' 				=> 'Sensation Ocean',
				'id' 				=> 'sensation-ocean',
				'preview'			=> 'http://sensation-ocean.at',
				'group'				=> array( 'Websites' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//projects.anex.at/sensation/dev/site/',
						'label'		=> 'DEV'
					),
					array(
						'link'		=> '//projects.anex.at/sensation/dev/site/wp-admin',
						'label'		=> 'ADMIN'
					),
					array(
						'link'		=> '//sensation-ocean.at/',
						'label'		=> 'SITE'
					),
					array(
						'link'		=> '//sensation-ocean.at/wp-admin',
						'label'		=> 'ADMIN'
					)
				)
			),
			
			array (
				'name' 				=> 'WPCasa',
				'id' 				=> 'wpcasa',
				'preview'			=> 'http://wpsight.anex.at/dev/wpcasa/',
				'group'				=> array( 'Themes' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//wpsight.anex.at/dev/wpcasa/',
						'label'		=> 'Playground'
					),
					array(
						'link'		=> '//wpsight.anex.at/dev/wpcasa/wp-admin',
						'label'		=> 'Admin'
					)
				)
			),
			
			array (
				'name' 				=> 'WPCasa Madrid',
				'id' 				=> 'wpcasa-madrid',
				'preview'			=> 'http://play.anex.at/wpcasa/madrid',
				'group'				=> array( 'Themes' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//play.anex.at/wpcasa/madrid',
						'label'		=> 'Playground'
					),
					array(
						'link'		=> '//play.anex.at/wpcasa/madrid/wp-admin',
						'label'		=> 'Admin'
					)
				)
			),
			
			array (
				'name' 				=> 'WPCasa London',
				'id' 				=> 'wpcasa-london',
				'preview'			=> 'http://play.anex.at/wpcasa/london',
				'group'				=> array( 'Themes' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//play.anex.at/wpcasa/london',
						'label'		=> 'Playground'
					),
					array(
						'link'		=> '//play.anex.at/wpcasa/london/wp-admin',
						'label'		=> 'Admin'
					)
				)
			),
			
			array (
				'name' 				=> 'WPCasa Oslo',
				'id' 				=> 'wpcasa-oslo',
				'preview'			=> 'http://play.anex.at/wpcasa/oslo',
				'group'				=> array( 'Themes' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//play.anex.at/wpcasa/oslo',
						'label'		=> 'Playground'
					),
					array(
						'link'		=> '//play.anex.at/wpcasa/oslo/wp-admin',
						'label'		=> 'Admin'
					)
				)
			),
			
			array (
				'name' 				=> 'WPCasa Bahia',
				'id' 				=> 'wpcasa-Bahia',
				'preview'			=> 'http://play.anex.at/wpcasa/bahia',
				'group'				=> array( 'Themes' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//play.anex.at/wpcasa/bahia',
						'label'		=> 'Playground'
					),
					array(
						'link'		=> '//play.anex.at/wpcasa/bahia/wp-admin',
						'label'		=> 'Admin'
					)
				)
			),
			
			array (
				'name' 				=> 'WPCasa Elviria',
				'id' 				=> 'wpcasa-elviria',
				'preview'			=> 'http://play.anex.at/wpcasa/elviria',
				'group'				=> array( 'Themes' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//play.anex.at/wpcasa/elviria',
						'label'		=> 'Playground'
					),
					array(
						'link'		=> '//play.anex.at/wpcasa/elviria/wp-admin',
						'label'		=> 'Admin'
					)
				)
			),
			
			array (
				'name' 				=> 'WPCasa Sylt',
				'id' 				=> 'wpcasa-sylt',
				'preview'			=> 'http://play.anex.at/wpcasa/sylt',
				'group'				=> array( 'Themes' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//play.anex.at/wpcasa/sylt',
						'label'		=> 'Playground'
					),
					array(
						'link'		=> '//play.anex.at/wpcasa/sylt/wp-admin',
						'label'		=> 'Admin'
					)
				)
			),
			
			array (
				'name' 				=> 'WPCasa Stage',
				'id' 				=> 'wpcasa-stage',
				'preview'			=> 'http://play.anex.at/wpcasa/stage',
				'group'				=> array( 'Themes' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//play.anex.at/wpcasa/stage',
						'label'		=> 'Playground'
					),
					array(
						'link'		=> '//play.anex.at/wpcasa/stage/wp-admin',
						'label'		=> 'Admin'
					)
				)
			),
			
			array (
				'name' 				=> 'WPCasa Uptown',
				'id' 				=> 'wpcasa-uptown',
				'preview'			=> 'http://play.anex.at/wpcasa/uptown',
				'group'				=> array( 'Themes' ),
				'platform'			=> 'wp',
				'links'				=> array(
					array(
						'link'		=> '//play.anex.at/wpcasa/uptown',
						'label'		=> 'Playground'
					),
					array(
						'link'		=> '//play.anex.at/wpcasa/uptown/wp-admin',
						'label'		=> 'Admin'
					)
				)
			)
		
		),
			
	);
	
	return $config;

}