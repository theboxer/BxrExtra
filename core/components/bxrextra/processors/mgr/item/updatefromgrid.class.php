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

}
return 'BxrExtraUpdateFromGridProcessor';