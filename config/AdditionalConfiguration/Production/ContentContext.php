<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['content_sync']['sourceNode'] = [
    'basePath' => '/home/demo-content/content.demo.typo3.org/shared',
    'bin' => '/home/demo-content/content.demo.typo3.org/current/bin/typo3',
    'connection' => '',
    'local' => '1',
];
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['content_sync']['targetNode'] = [
    'basePath' => '/home/demo-prod/demo.typo3.org/shared',
    'bin' => '/home/demo-prod/demo.typo3.org/current/bin/typo3',
    'connection' => 'demo-prod@demo01.typo3server.ch',
    'local' => '0',
];
