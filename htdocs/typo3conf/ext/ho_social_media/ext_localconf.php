<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$TYPO3_CONF_VARS['FE']['pageOverlayFields'] .= ',tx_hosocialmedia_ogtitle,tx_hosocialmedia_ogtype,tx_hosocialmedia_ogfalimages,tx_hosocialmedia_ogdescription';