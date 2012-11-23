<?php
/**
 * Remove an Item.
 * 
 * @package bxrextra
 * @subpackage processors
 */
class BxrExtraRemoveProcessor extends modObjectRemoveProcessor {
    public $classKey = 'BxrExtraItem';
    public $languageTopics = array('bxrextra:default');
    public $objectType = 'bxrextra.items';
}
return 'BxrExtraRemoveProcessor';