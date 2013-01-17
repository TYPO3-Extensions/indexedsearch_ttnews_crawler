<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "indexedsearch_ttnews_crawler".
 *
 * Auto generated 15-01-2013 14:47
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'IndexedSearch Crawler for tt_news',
	'description' => 'Adds a crawler for tt_news entries into the indexed_search configuration',
	'category' => 'misc',
	'shy' => 0,
	'version' => '1.0.1',
	'dependencies' => 'indexed_search,crawler,tt_news',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Simon Schick',
	'author_email' => 'simonsimcity@gmail.com',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'indexed_search' => '',
			'crawler' => '',
			'tt_news' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:9:"ChangeLog";s:4:"ec2d";s:17:"ext_localconf.php";s:4:"0c9b";s:14:"ext_tables.php";s:4:"0421";s:14:"ext_tables.sql";s:4:"3146";s:12:"doc/TODO.txt";s:4:"953a";s:47:"hooks/class.tx_indexedsearch_ttnews_crawler.php";s:4:"ba54";}',
	'suggests' => array(
	),
);

?>