<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Honest.HoContent',
            'Pi1',
            array(
                'Content' => 'blocVideo',

            ),
            // non-cacheable actions
            array(
                'Content' => 'blocVideo',

            )
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Honest.HoContent',
            'Pi2',
            array(
                'Content' => 'blocImage',

            ),
            // non-cacheable actions
            array(
                'Content' => 'blocImage',

            )
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Honest.HoContent',
            'Pi3',
            array(
                'Content' => 'blocText',

            ),
            // non-cacheable actions
            array(
                'Content' => 'blocText',

            )
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Honest.HoContent',
            'Pi4',
            array(
                'Content' => 'blocCitation',

            ),
            // non-cacheable actions
            array(
                'Content' => 'blocCitation',

            )
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        pi1 {
                            iconIdentifier = extension-honest-content-blocvideo
                            title = LLL:EXT:ho_content/Resources/Private/Language/locallang_db.xlf:tx_ho_content_domain_model_pi1
                            description = LLL:EXT:ho_content/Resources/Private/Language/locallang_db.xlf:tx_ho_content_domain_model_pi1.description
                            tt_content_defValues {
                                CType = list
                                list_type = hocontent_pi1
                            }
                        }
                    }
                    show = *
                }
           }'
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        pi2 {
                            iconIdentifier = extension-honest-content-blocimage
                            title = LLL:EXT:ho_content/Resources/Private/Language/locallang_db.xlf:tx_ho_content_domain_model_pi2
                            description = LLL:EXT:ho_content/Resources/Private/Language/locallang_db.xlf:tx_ho_content_domain_model_pi2.description
                            tt_content_defValues {
                                CType = list
                                list_type = hocontent_pi2
                            }
                        }
                    }
                    show = *
                }
           }'
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        pi3 {
                            iconIdentifier = extension-honest-content-bloctext
                            title = LLL:EXT:ho_content/Resources/Private/Language/locallang_db.xlf:tx_ho_content_domain_model_pi3
                            description = LLL:EXT:ho_content/Resources/Private/Language/locallang_db.xlf:tx_ho_content_domain_model_pi3.description
                            tt_content_defValues {
                                CType = list
                                list_type = hocontent_pi3
                            }
                        }
                    }
                    show = *
                }
           }'
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        pi4 {
                            iconIdentifier = extension-honest-content-bloccitation
                            title = LLL:EXT:ho_content/Resources/Private/Language/locallang_db.xlf:tx_ho_content_domain_model_pi4
                            description = LLL:EXT:ho_content/Resources/Private/Language/locallang_db.xlf:tx_ho_content_domain_model_pi4.description
                            tt_content_defValues {
                                CType = list
                                list_type = hocontent_pi4
                            }
                        }
                    }
                    show = *
                }
           }'
        );
    }
);
