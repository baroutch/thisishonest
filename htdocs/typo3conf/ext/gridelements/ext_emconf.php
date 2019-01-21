<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "gridelements".
 *
 * Auto generated 14-01-2019 23:00
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Grid Elements',
  'description' => 'This extension integrates the grid layout concept also to regular content elements - the grid elements.
It offers a lot of new features like advanced drag & drop or real references, that improve the usability of the page and list module to speed up the daily work with the backend.',
  'category' => 'be',
  'version' => '9.0.0',
  'state' => 'beta',
  'uploadfolder' => true,
  'createDirs' => '',
  'clearcacheonload' => true,
  'author' => 'Grid Elements Team',
  'author_email' => 'info@cybercraft.de',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '9.5.0-9.5.99',
      'backend' => '9.5.0-9.5.99',
      'recordlist' => '9.5.0-9.5.99',
      'frontend' => '9.5.0-9.5.99',
    ),
    'conflicts' => 
    array (
      'templavoila' => '',
      'jfmulticontent' => '',
    ),
    'suggests' => 
    array (
    ),
  ),
);

