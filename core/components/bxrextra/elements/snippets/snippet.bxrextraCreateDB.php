<?php
$bxrextra = $modx->getService('bxrextra','BxrExtra',$modx->getOption('bxrextra.core_path',null,$modx->getOption('core_path').'components/bxrextra/').'model/bxrextra/',$scriptProperties);
if (!($bxrextra instanceof BxrExtra)) return '';


$m = $modx->getManager();
$m->createObjectContainer('BxrExtraItem');
return 'Table created.';