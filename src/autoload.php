<?php
/**
 * Seaf Auto Load
 */
Seaf\Core\Loader\AutoLoader::init()->addNamespace(
    'Seaf\\Component\\Mail',
    null,
    dirname(__FILE__).'/Mail'
);
