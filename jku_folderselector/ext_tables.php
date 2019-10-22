<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Jku.JkuFolderselector',
                'tools', // Make module a submodule of 'tools'
                'folderselectormodule', // Submodule key
                '', // Position
                [
                    'MyModel' => 'list, show',
                ],
                [
                    'access' => 'user,group',
					'icon'   => 'EXT:' . $extKey . '/Resources/Public/Icons/user_mod_folderselectormodule.svg',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_folderselectormodule.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'BackendFormSelectAFolder');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_jkufolderselector_domain_model_mymodel', 'EXT:jku_folderselector/Resources/Private/Language/locallang_csh_tx_jkufolderselector_domain_model_mymodel.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jkufolderselector_domain_model_mymodel');

    },
    $_EXTKEY
);
