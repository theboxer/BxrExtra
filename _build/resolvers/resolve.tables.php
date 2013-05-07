<?php
/**
 * Resolve creating db tables
 *
 * @package bxrextra
 * @subpackage build
 */
if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
            $modx =& $object->xpdo;
            $modelPath = $modx->getOption('bxrextra.core_path',null,$modx->getOption('core_path').'components/bxrextra/').'model/';
            $modx->addPackage('bxrextra',$modelPath);

            $manager = $modx->getManager();

            $manager->createObjectContainer('BxrExtraItem');

            break;
        case xPDOTransport::ACTION_UPGRADE:
            break;
    }
}
return true;