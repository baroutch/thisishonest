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

        //print_r($this->contentObj->data['uid']);

        $this->view->assign('uid', $this->contentObj->data['uid']);

        //print_r($tab);

        $this->view->assign('vignette', $tab['data']['config']['lDEF']['vignette']['vDEF']);
        $this->view->assign('video', $tab['data']['config']['lDEF']['video']['vDEF']);
        $this->view->assign('height_type', $tab['data']['config']['lDEF']['height_type']['vDEF']);
        $this->view->assign('video_height', $tab['data']['config']['lDEF']['video_height']['vDEF']);
        $this->view->assign('titre', $tab['data']['config']['lDEF']['titre']['vDEF']);
        $this->view->assign('sstitre', $tab['data']['config']['lDEF']['sstitre']['vDEF']);

        return;

    }

    public function blocImageAction(){

        // On récupère le flexform
        $this->contentObj = $this->configurationManager->getContentObject();
        $piFlexForm = $this->contentObj->data['pi_flexform'];
        $tab = \TYPO3\CMS\Core\Utility\GeneralUtility::xml2array($piFlexForm);

        $this->view->assign('titre', $tab['data']['config']['lDEF']['titre']['vDEF']);
        $this->view->assign('sstitre', $tab['data']['config']['lDEF']['sstitre']['vDEF']);
        $this->view->assign('image', $tab['data']['config']['lDEF']['image']['vDEF']);
        $this->view->assign('height_type', $tab['data']['config']['lDEF']['height_type']['vDEF']);
        $this->view->assign('video_height', $tab['data']['config']['lDEF']['video_height']['vDEF']);

        return;

    }

    public function blocTextAction(){

        // On récupère le flexform
        $this->contentObj = $this->configurationManager->getContentObject();
        $piFlexForm = $this->contentObj->data['pi_flexform'];
        $tab = \TYPO3\CMS\Core\Utility\GeneralUtility::xml2array($piFlexForm);

        $this->view->assign('rteName', $tab['data']['config']['lDEF']['rteName']['vDEF']);
        $this->view->assign('text_color', $tab['data']['config']['lDEF']['text_color']['vDEF']);
        $this->view->assign('bg_color', $tab['data']['config']['lDEF']['bg_color']['vDEF']);

        return;

    }

    public function blocCitationAction(){

        // On récupère le flexform
        $this->contentObj = $this->configurationManager->getContentObject();
        $piFlexForm = $this->contentObj->data['pi_flexform'];
        $tab = \TYPO3\CMS\Core\Utility\GeneralUtility::xml2array($piFlexForm);

        $this->view->assign('titre', $tab['data']['config']['lDEF']['titre']['vDEF']);
        $this->view->assign('sstitre', $tab['data']['config']['lDEF']['sstitre']['vDEF']);
        $this->view->assign('image', $tab['data']['config']['lDEF']['image']['vDEF']);
        $this->view->assign('height_type', $tab['data']['config']['lDEF']['height_type']['vDEF']);
        $this->view->assign('video_height', $tab['data']['config']['lDEF']['video_height']['vDEF']);

        return;

    }
}
