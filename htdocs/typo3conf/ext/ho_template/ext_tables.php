<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ho_template', 'Configuration/TypoScript', 'Plugin du template du site');

    }
);
