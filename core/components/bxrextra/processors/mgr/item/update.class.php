<?php
/**
 * Update an Item
 * 
 * @package bxrextra
 * @subpackage processors
 */

class BxrExtraUpdateProcessor extends modObjectUpdateProcessor {
    public $classKey = 'BxrExtraItem';
    public $languageTopics = array('bxrextra:default');
    public $objectType = 'bxrextra.items';
}
return 'BxrExtraUpdateProcessor';