<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Netnnet.' . $_EXTKEY,
	'Gallery',
	array(
		'Image' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Image' => '',
		
	)
);
