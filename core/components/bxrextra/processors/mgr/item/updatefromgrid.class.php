<?php
/**
 * Update From Grid an Item
 *
 * @package bxrextra
 * @subpackage processors
 */
require_once (dirname(__FILE__).'/update.class.php');

class BxrExtraUpdateFromGridProcessor extends BxrExtraUpdateProcessor {
    public function initialize() {
        $data = $this->getProperty('data');
        if (empty($data)) return $this->modx->lexicon('invalid_data');
        $data = $this->modx->fromJSON($data);
        if (empty($data)) return $this->modx->lexicon('invalid_data');
        $this->setProperties($data);
        $this->unsetProperty('data');

        return parent::initialize();
    }

    public function beforeSave() {
        $name = $this->getProperty('name');

        if (empty($name)) {
            $this->addFieldError('name',$this->modx->lexicon('bxrextra.item_err_ns_name'));

        } else if ($this->modx->getCount($this->classKey, array('name' => $name))) {
            $this->addFieldError('name',$this->modx->lexicon('bxrextra.item_err_ae'));
        }
        return parent::beforeSave();
    }
}
return 'BxrExtraUpdateFromGridProcessor';