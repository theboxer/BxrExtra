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

    public function beforeSave() {
        $name = $this->getProperty('name');
        $id = $this->getProperty('id');

        /** @var BxrExtraItem $currentItem */
        $currentItem = $this->modx->getObject($this->classKey, $id);

        if (empty($name)) {
            $this->addFieldError('name',$this->modx->lexicon('bxrextra.item_err_ns_name'));

        } else if ($this->modx->getCount($this->classKey, array('name' => $name)) && $currentItem->get('name') != $name) {
            $this->addFieldError('name',$this->modx->lexicon('bxrextra.item_err_ae'));
        }

        return parent::beforeSave();
    }

}
return 'BxrExtraUpdateProcessor';