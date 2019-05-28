<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$_EXTKEY = 'ho_social_media';

// Get extension configuration
if( isset( $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY])) {
    $extConf = \TYPO3\CMS\Core\Utility\GeneralUtility::removeDotsFromTS(unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]));
} else {
    $extConf = array();
}

$tempColumns = array(
    'tx_hosocialmedia_ogtitle' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xml:pages.tx_hosocialmedia_ogtitle',
        'config' => array(
            'type' => 'input',
            'size' => '160',
        )
    ),
    'tx_hosocialmedia_ogtype' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xml:pages.tx_hosocialmedia_ogtype',
        'config' => array(
            'type' => 'input',
            'size' => '30',
        )
    ),
    'tx_hosocialmedia_ogimage' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xml:pages.tx_hosocialmedia_ogimage',
        'config' => array(
            'type' => 'group',
            'internal_type' => 'file',
            'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
            'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],
            'uploadfolder' => 'uploads/tx_hosocialmedia',
            'show_thumbs' => 1,
            'size' => 4,
            'minitems' => 0,
            'maxitems' => 6,
        )
    ),
    'tx_hosocialmedia_ogfalimages' => array(
        'exclude' => 1,
        'label'    => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xml:pages.tx_hosocialmedia_ogimage',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'tx_hosocialmedia_ogfalimages',
            array(
                'appearance' => array(
                    'showPossibleLocalizationRecords' => true,
                    'showRemovedLocalizationRecords' => true,
                    'showSynchronizationLink' => true,
                    'showAllLocalizationLink' => true,

                    'enableControls' => array(
                        'sort' => true,
                    ),
                ),
                'behaviour' => array(
                    'localizationMode' => 'select',
                    'localizeChildrenAtParentLocalization' => TRUE,
                ),
                'foreign_types' => array(
                    '0' => array(
                        'showitem' => '
						--palette--;;opengraphprotocolPalette,
						--palette--;;filePalette'
                    ),
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
                        'showitem' => '
						--palette--;;opengraphprotocolPalette,
						--palette--;;filePalette'
                    ),
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION  => array(
                        'showitem' => '
						--palette--;;opengraphprotocolPalette,
						--palette--;;filePalette'
                    ),
                ),
            ),
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        )
    ),
    'tx_hosocialmedia_ogdescription' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xml:pages.tx_hosocialmedia_ogdescription',
        'config' => array(
            'type' => 'text',
            'size' => '30',
            'rows' => '3',
            'max' => '300',
        )
    ),
);

foreach ($tempColumns as $tempColumnKey => $tempColumnValue)
{
    $tempColumns[$tempColumnKey]['l10n_cat'] = 'text';
    // Set l10n_mode for pages_language_overlay
    if (isset($extConf['languageOverlay'][$tempColumnKey]['mergeIfNotBlank']) && $extConf['languageOverlay'][$tempColumnKey]['mergeIfNotBlank'])
        $tempColumns[$tempColumnKey]['l10n_mode'] = 'mergeIfNotBlank';

    // Don't display language diff, it's really ugly
    if ($tempColumnKey === 'tx_hosocialmedia_ogfalimages')
        $tempColumns[$tempColumnKey]['l10n_display'] = 'hideDiff';

    // Change label for tx_jhopengraphprotocol_ogfalimages if l10n_mode is 'mergeIfNotBlank' to add mode information
    if ($tempColumnKey === 'tx_hosocialmedia_ogfalimages' && $tempColumns[$tempColumnKey]['l10n_mode'] === 'mergeIfNotBlank')
        $tempColumns[$tempColumnKey]['label'] = 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xml:pages.tx_hosocialmedia_ogimage.mergeIfNotBlank';
}

// Add columns to TCA of pages_language_overlay
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages_language_overlay', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages_language_overlay', '--div--;LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xml:pages.tab_title,tx_hosocialmedia_ogtitle;;;;1-1-1, tx_hosocialmedia_ogtype, tx_hosocialmedia_ogfalimages, tx_hosocialmedia_ogdescription');