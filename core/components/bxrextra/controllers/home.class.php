<?php
/**
 * Loads the home page.
 *
 * @package bxrextra
 * @subpackage controllers
 */
class BxrExtraHomeManagerController extends BxrExtraBaseManagerController {
    public function process(array $scriptProperties = array()) {

    }
    public function getPageTitle() { return $this->modx->lexicon('bxrextra'); }
    public function loadCustomCssJs() {
        $this->addJavascript($this->bxrextra->config['jsUrl'].'mgr/widgets/items.grid.js');
        $this->addJavascript($this->bxrextra->config['jsUrl'].'mgr/widgets/home.panel.js');
        $this->addLastJavascript($this->bxrextra->config['jsUrl'].'mgr/sections/home.js');
    }
    public function getTemplateFile() { return $this->bxrextra->config['templatesPath'].'home.tpl'; }
}