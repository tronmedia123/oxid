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
    'thumbnail'   => 'out/pictures/ltronmedia-logo.png',
    'version'     => '1.0.0',
    'author'      => 'tronmedia.de UG | Codes and freedom',
    'url'         => 'https://www.tronmedia.de',
    'email'       => 'l.peters@tronmedia.de',
    'extend'      => array(
    ),
    'controllers'       => array(
        'tronmediaxamplemodulemain' => \tronmedia\oxid\Controller\Admin\MainController::class,
    ),
    'templates'   => array(
        'main.tpl' => 'tronmedia/oxid/views/admin/main.tpl'
    ),
    'blocks'      => array(),
    'settings'    => array(),
    'events'      => array(),
);
