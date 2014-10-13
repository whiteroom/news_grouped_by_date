<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'NewsGroupedByDate.' . $_EXTKEY,
	'News',
	array(
		
	),
	// non-cacheable actions
	array(
		
	)
);
