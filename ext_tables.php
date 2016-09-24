<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Netnnet.' . $_EXTKEY,
	'Gallery',
	'Gallery'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Galerie');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerie_domain_model_image', 'EXT:galerie/Resources/Private/Language/locallang_csh_tx_galerie_domain_model_image.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerie_domain_model_image');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerie_domain_model_category', 'EXT:galerie/Resources/Private/Language/locallang_csh_tx_galerie_domain_model_category.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerie_domain_model_category');
