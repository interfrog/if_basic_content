<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'ifPage Basic - Content',
	'description' => 'TYPO3 extension with content for IfPage Basic',
	'category' => 'distribution',
	'author' => 'Alexander Büchner, Christian Händel',
	'author_email' => 'info@interfrog.de',
	'author_company' => 'Interfrog Produktion GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '2.0.1',
	'constraints' => array(
		'depends' => array(
			'fluid_styled_content' => '8.7.0.-8.99.99',
			'rte_ckeditor' => '8.7.0.-8.99.99',
			'if_themeconfiguration' => '2.0.0-2.99.99',
			'if_basic' => '2.0.0-2.99.99',
			'news' => '5.3.0-5.99.99',
			'gridelements' => '8.0.0-8.99.99',
			'powermail' => '3.8.0-3.21.99',
			'realurl' => '2.0.0-2.99.99',
			'blog' => '8.7.0-8.7.99'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);