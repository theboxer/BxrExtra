<?php
/**
 * Create an Item
 * 
 * @package bxrextra
 * @subpackage processors
 */
class BxrExtraCreateProcessor extends modObjectCreateProcessor {
    public $classKey = 'BxrExtraItem';
    public $languageTopics = array('bxrextra:default');
    public $objectType = 'bxrextra.items';

    public function beforeSave() {
        $name = $this->getProperty('name');

        if (empty($name)) {
            $this->addFieldError('name',$this->modx->lexicon('bxrextra.item_err_ns_name'));
        } else if ($this->doesAlreadyExist(array('name' => $name))) {
            $this->addFieldError('name',$this->modx->lexicon('bxrextra.item_err_ae'));
        }
        return parent::beforeSave();
    }
}
return 'BxrExtraCreateProcessor';
