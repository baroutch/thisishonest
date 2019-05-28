<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "phpmyadmin".
 *
 * Auto generated 21-01-2019 23:31
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'phpMyAdmin',
  'description' => 'Third party \'phpMyAdmin\' administration module. Access to admin-users only.',
  'category' => 'module',
  'version' => '5.2.4',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => 'uploads/tx_phpmyadmin',
  'clearcacheonload' => false,
  'author' => 'Andreas Beutel - mehrwert',
  'author_email' => 'typo3@mehrwert.de',
  'author_company' => 'mehrwert intermediale kommunikation GmbH',
  'doNotLoadInFE' => 1,
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '7.0.0-7.1.99',
      'typo3' => '8.7.0-8.7.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

