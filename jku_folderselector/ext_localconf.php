<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Jku.JkuFolderselector',
            'Folderselectoplugin',
            [
                'MyModel' => 'list, show'
            ],
            // non-cacheable actions
            [
                'MyModel' => ''
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					folderselectoplugin {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_folderselectoplugin.svg
						title = LLL:EXT:jku_folderselector/Resources/Private/Language/locallang_db.xlf:tx_jku_folderselector_domain_model_folderselectoplugin
						description = LLL:EXT:jku_folderselector/Resources/Private/Language/locallang_db.xlf:tx_jku_folderselector_domain_model_folderselectoplugin.description
						tt_content_defValues {
							CType = list
							list_type = jkufolderselector_folderselectoplugin
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
