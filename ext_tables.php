<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Joekolade.Burkaprojects',
            'Projektlist',
            'Projekt Liste'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Burka Projects');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_burkaprojects_domain_model_project', 'EXT:burkaprojects/Resources/Private/Language/locallang_csh_tx_burkaprojects_domain_model_project.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_burkaprojects_domain_model_project');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
            $extKey,
            'tx_burkaprojects_domain_model_project'
        );

    },
    $_EXTKEY
);
