<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Joekolade.Burkaprojects',
            'Projectlist',
            [
                'Project' => 'list, show, breadcrumb',
                'Breadcrumb' => 'breadcrumb'
            ],
            // non-cacheable actions
            [
                'Project' => '',
                'Breadcrumb' => 'breadcrumb'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Joekolade.Burkaprojects',
            'Breadcrumblist',
            [
                'Breadcrumb' => 'breadcrumb'
            ],
            // non-cacheable actions
            [
                'Breadcrumb' => 'breadcrumb'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					projectlist {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_projectlist.svg
						title = LLL:EXT:burkaprojects/Resources/Private/Language/locallang_db.xlf:tx_burkaprojects_domain_model_projectlist
						description = LLL:EXT:burkaprojects/Resources/Private/Language/locallang_db.xlf:tx_burkaprojects_domain_model_projectlist.description
						tt_content_defValues {
							CType = list
							list_type = burkaprojects_projectlist
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

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:burkaprojects/Configuration/PageTS/page.ts">'
);
