<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Joekolade.Burkaprojects',
            'Projektlist',
            [
                'Project' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Project' => ''
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					projektlist {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_projektlist.svg
						title = LLL:EXT:burkaprojects/Resources/Private/Language/locallang_db.xlf:tx_burkaprojects_domain_model_projektlist
						description = LLL:EXT:burkaprojects/Resources/Private/Language/locallang_db.xlf:tx_burkaprojects_domain_model_projektlist.description
						tt_content_defValues {
							CType = list
							list_type = burkaprojects_projektlist
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
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder