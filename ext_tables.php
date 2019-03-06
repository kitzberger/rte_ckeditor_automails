<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
	'rte_ckeditor_automails',
	'Configuration/TsConfig/Page/automails.ts',
	'RTE: auto-link mail addresses'
);
