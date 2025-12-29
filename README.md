# Catalog Indexer Bugfix for Magento 2

> **⚠️ DEPRECATED - This module is only for Magento 2.0.x and 2.1.x**
>
> Bugfix for catalog indexer. This bug was fixed in Magento 2.2.0 and later versions.
> **DO NOT use this module with Magento 2.2+ or 2.4+**
>
> **References:** [GitHub issue #8018](https://github.com/magento/magento2/issues/8018), [Stack Overflow](https://magento.stackexchange.com/questions/157797/magento-2-how-to-override-abstract-class-for-product-category-indexing-issue)

## Installation

Enable module:
```bash
php -f bin/magento module:enable SpringImport_CatalogIndexerBugfix
```

Disable module:
```bash
php -f bin/magento module:disable SpringImport_CatalogIndexerBugfix
```

Update system:
```bash
php -f bin/magento setup:upgrade
```
