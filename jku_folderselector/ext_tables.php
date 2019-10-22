<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'BackendFormSelectAFolder');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_jkufolderselector_domain_model_mymodel', 'EXT:jku_folderselector/Resources/Private/Language/locallang_csh_tx_jkufolderselector_domain_model_mymodel.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jkufolderselector_domain_model_mymodel');

    },
    $_EXTKEY
);
