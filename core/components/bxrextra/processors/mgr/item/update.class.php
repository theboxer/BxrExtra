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

    public function beforeSet() {
        $name = $this->getProperty('name');

        if (empty($name)) {
            $this->addFieldError('name',$this->modx->lexicon('bxrextra.item_err_ns_name'));

        } else if ($this->modx->getCount($this->classKey, array('name' => $name)) && ($this->object->name != $name)) {
            $this->addFieldError('name',$this->modx->lexicon('bxrextra.item_err_ae'));
        }
        return parent::beforeSave();
    }

}
return 'BxrExtraUpdateProcessor';