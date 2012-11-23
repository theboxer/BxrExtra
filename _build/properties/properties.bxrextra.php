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
 * Properties for the BxrExtra snippet.
 *
 * @package bxrextra
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'tpl',
        'desc' => 'prop_bxrextra.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'Item',
        'lexicon' => 'bxrextra:properties',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'prop_bxrextra.sortby_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'name',
        'lexicon' => 'bxrextra:properties',
    ),
    array(
        'name' => 'sortDir',
        'desc' => 'prop_bxrextra.sortdir_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'ASC',
        'lexicon' => 'bxrextra:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'prop_bxrextra.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 5,
        'lexicon' => 'bxrextra:properties',
    ),
    array(
        'name' => 'outputSeparator',
        'desc' => 'prop_bxrextra.outputseparator_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'bxrextra:properties',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'prop_bxrextra.toplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => true,
        'lexicon' => 'bxrextra:properties',
    ),
/*
    array(
        'name' => '',
        'desc' => 'prop_bxrextra.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'bxrextra:properties',
    ),
    */
);

return $properties;