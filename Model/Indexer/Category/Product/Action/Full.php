<?php

namespace SpringImport\CatalogIndexerBugfix\Model\Indexer\Category\Product\Action;

/**
 * @see https://github.com/magento/magento2/issues/8018
 * @see https://magento.stackexchange.com/a/158286/40609
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Full extends \Magento\Catalog\Model\Indexer\Category\Product\Action\Full
{
    /**
     * Check whether select ranging is needed
     *
     * @return bool
     */
    public function isRangingNeeded()
    {
        return false; // By default true, due to indexing issue making it false
    }
}
