<?php

if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

t3lib_div::loadTCA('index_config');

// add a value to the dropdown-field
$TCA['index_config']['columns']['type']['config']['items'][] =  array('News', 'indexedsearch_ttnews_crawler');

// add some special columns
$tempColumns = array(
	'news_categoryselection' => array(
		'label' => 'LLL:EXT:tt_news/locallang_tca.xml:tt_news.pi_flexform.category_selection',
		'config' => Array(
			'type' => 'select',
			'form_type' => 'user',
			'userFunc' => 'tx_ttnews_TCAform_selectTree->renderCategoryFields',
			'treeView' => 1,
			'foreign_table' => 'tt_news_cat',
			'foreign_table_where' => 'ORDER BY tt_news_cat.sorting',
			'size' => 5,
			'autoSizeMax' => 10,
			'minitems' => 1,
			'maxitems' => 99,
		)
	),
	'news_usesubcategories' => array (
		'label' => 'LLL:EXT:tt_news/locallang_tca.xml:tt_news.pi_flexform.useSubCategories',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:tt_news/locallang_tca.xml:tt_news.pi_flexform.no', '0'),
                array('LLL:EXT:tt_news/locallang_tca.xml:tt_news.pi_flexform.yes', '1'),
            ),
            'size' => 1,
        )
	)
);
t3lib_extMgm::addTCAcolumns('index_config',$tempColumns,1);

$temp = $TCA['index_config']['types']['1'];
$temp['showitem'] = 'title;;1;;2-2-2, description, timer_next_indexing, timer_offset, timer_frequency, set_id,type;;;;3-3-3, alternative_source_pid, news_categoryselection, news_usesubcategories, fieldlist, chashcalc, recordsbatch, records_indexonchange';
$TCA['index_config']['types']['indexedsearch_ttnews_crawler'] = $temp;
