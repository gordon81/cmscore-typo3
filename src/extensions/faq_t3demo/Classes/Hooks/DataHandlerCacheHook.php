<?php

declare(strict_types=1);

namespace B13\FaqT3demo\Hooks;

/*
 * This file is part of TYPO3 CMS-based extension "faq_t3demo" by b13.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

use TYPO3\CMS\Core\Cache\Frontend\FrontendInterface;
use TYPO3\CMS\Core\DataHandling\DataHandler;

class DataHandlerCacheHook
{
    protected FrontendInterface $pageCache;

    public function __construct(FrontendInterface $cachePages)
    {
        $this->pageCache = $cachePages;
    }

    public function processDatamap_afterDatabaseOperations($status, $tableName, $recordId, array $databaseData, DataHandler $dataHandler): void
    {
        if ($tableName === 'tx_faqt3demo_faq') {
            $this->pageCache->flushByTag('tx-faq_t3demo');
        }
    }
}
