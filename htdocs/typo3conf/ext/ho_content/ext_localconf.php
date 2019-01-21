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
    }
);
