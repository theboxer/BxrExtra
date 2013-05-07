<?php
/**
 * Add snippets to build
 * 
 * @package bxrextra
 * @subpackage build
 */
$snippets = array();

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
    'id' => 0,
    'name' => 'BxrExtra',
    'description' => 'Displays Items.',
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.bxrextra.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.bxrextra.php';
$snippets[0]->setProperties($properties);
unset($properties);

return $snippets;