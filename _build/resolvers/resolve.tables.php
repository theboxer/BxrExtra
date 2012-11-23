<?php
/**
 * BxrExtra
 *
 * Copyright 2010 by Shaun McCormick <shaun+bxrextra@modx.com>
 *
 * BxrExtra is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * BxrExtra is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * BxrExtra; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package bxrextra
 */
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