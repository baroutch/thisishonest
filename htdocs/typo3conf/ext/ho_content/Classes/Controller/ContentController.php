<?php
namespace HONEST\HoContent\Controller;

class ContentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    public function __construct()
    {
        parent::__construct();
    }

    public function blocVideoAction(){

        // On récupère le flexform
        $this->contentObj = $this->configurationManager->getContentObject();
        $piFlexForm = $this->contentObj->data['pi_flexform'];
        $tab = \TYPO3\CMS\Core\Utility\GeneralUtility::xml2array($piFlexForm);

        //print_r($tab);

        $resourceFactory = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Resource\\ResourceFactory');
        $fileReference = $resourceFactory->getFileReferenceObject($tab['data']['config']['lDEF']['vignette']['vDEF']);

        $this->view->assign('vignette', $fileReference->getProperties());

        $this->view->assign('height_type', $tab['data']['config']['lDEF']['height_type']['vDEF']);
        $this->view->assign('video_height', $tab['data']['config']['lDEF']['video_height']['vDEF']);
        $this->view->assign('titre', $tab['data']['config']['lDEF']['titre']['vDEF']);

        return;

    }
}
