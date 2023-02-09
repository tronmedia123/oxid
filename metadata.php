<?php
/**
 * @TODO LICENCE HERE
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'oxid',
    'title'       => array(
        'de' => 'OXID6 example module',
        'en' => 'OXID6 example module',
    ),
    'description' => array(
        'de' => '<h2>OXID6 example module</h2>',
        'en' => '<h2>OXID6 example module</h2>',
    ),
    'thumbnail'   => 'out/pictures/linslin-org-logo.png',
    'version'     => '1.0.0',
    'author'      => 'linslin.org UG | Codes and freedom',
    'url'         => 'https://www.linslin.org',
    'email'       => 'info@linslin.org',
    'extend'      => array(
    ),
    'controllers'       => array(
        'linslinexamplemodulemain' => \linslin\oxid\Controller\Admin\MainController::class,
    ),
    'templates'   => array(
        'main.tpl' => 'tronmedia/oxid/views/admin/main.tpl'
    ),
    'blocks'      => array(),
    'settings'    => array(),
    'events'      => array(),
);
