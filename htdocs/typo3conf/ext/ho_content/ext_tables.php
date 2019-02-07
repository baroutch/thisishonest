<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Honest.HoContent',
            'Pi1',
            'Bloc Vidéo'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Honest.HoContent',
            'Pi2',
            'Bloc Image'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ho_content', 'Configuration/TypoScript', 'Plugin Content');

    }
);

/**
 * Register icons
 */
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'extension-honest-content-blocvideo',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:ho_content/Resources/Public/Icons/video.svg']
);

/**
 * Register icons
 */
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'extension-honest-content-blocimage',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:ho_content/Resources/Public/Icons/image.svg']
);

// Pi1 Flexform
$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_pi1';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/flexform_pi1.xml');

// Pi2 Flexform
$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_pi2';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/flexform_pi2.xml');

// ON CREE LE DOSSIER Correspondant AUX IMAGES
if(!is_dir(__DIR__."/../../../uploads/tx_hocontent")){	@mkdir(__DIR__."/../../../uploads/tx_hocontent", 0775); }

