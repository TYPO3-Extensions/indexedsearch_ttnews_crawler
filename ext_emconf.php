<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "indexedsearch_ttnews_crawler".
 *
 * Auto generated 29-05-2013 07:26
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
	'version' => '1.1.4',
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
			'typo3' => '4.5.0-6.1.99',
			'indexed_search' => '',
			'crawler' => '',
			'tt_news' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:8:{s:12:"ext_icon.gif";s:4:"c96c";s:17:"ext_localconf.php";s:4:"0c9b";s:14:"ext_tables.php";s:4:"995c";s:14:"ext_tables.sql";s:4:"1219";s:17:"locallang_tca.xml";s:4:"0713";s:14:"doc/manual.pdf";s:4:"4122";s:14:"doc/manual.sxw";s:4:"a420";s:47:"hooks/class.tx_indexedsearch_ttnews_crawler.php";s:4:"115f";}',
	'suggests' => array(
	),
);

?>