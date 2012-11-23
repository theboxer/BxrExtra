<?php
/**
 * BxrExtra Connector
 *
 * @package bxrextra
 */
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

$corePath = $modx->getOption('bxrextra.core_path',null,$modx->getOption('core_path').'components/bxrextra/');
require_once $corePath.'model/bxrextra/bxrextra.class.php';
$modx->bxrextra = new BxrExtra($modx);

$modx->lexicon->load('bxrextra:default');

/* handle request */
$path = $modx->getOption('processorsPath',$modx->bxrextra->config,$corePath.'processors/');
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));