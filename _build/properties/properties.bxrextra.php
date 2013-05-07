<?php
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