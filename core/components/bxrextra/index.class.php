<?php
require_once dirname(__FILE__) . '/model/bxrextra/bxrextra.class.php';
/**
 * @package bxrextra
 */
class IndexManagerController extends BxrExtraBaseManagerController {
    public static function getDefaultController() { return 'home'; }
}

abstract class BxrExtraBaseManagerController extends modExtraManagerController {
    /** @var BxrExtra $bxrextra */
    public $bxrextra;
    public function initialize() {
        $this->bxrextra = new BxrExtra($this->modx);

        $this->addCss($this->bxrextra->config['cssUrl'].'mgr.css');
        $this->addJavascript($this->bxrextra->config['jsUrl'].'mgr/bxrextra.js');
        $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
            BxrExtra.config = '.$this->modx->toJSON($this->bxrextra->config).';
            BxrExtra.config.connector_url = "'.$this->bxrextra->config['connectorUrl'].'";
        });
        </script>');
        return parent::initialize();
    }
    public function getLanguageTopics() {
        return array('bxrextra:default');
    }
    public function checkPermissions() { return true;}
}