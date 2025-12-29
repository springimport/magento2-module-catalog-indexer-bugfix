# Catalog Indexer Bugfix for Magento 2

Bugfix for catalog indexer issue in Magento 2.0.x and 2.1.x.

> **⚠️ DEPRECATED - This module is only for Magento 2.0.x and 2.1.x**
>
> Bugfix for catalog indexer. This bug was fixed in Magento 2.2.0 and later versions.
> **DO NOT use this module with Magento 2.2+ or 2.4+**
>
> **References:** [GitHub issue #8018](https://github.com/magento/magento2/issues/8018), [Stack Overflow](https://magento.stackexchange.com/questions/157797/magento-2-how-to-override-abstract-class-for-product-category-indexing-issue)

## Version Compatibility

| Magento Version | PHP Version | Status |
|-----------------|-------------|--------|
| 2.2.x - 2.4.x | 7.0+ | ❌ **Incompatible** |
| **2.0.x - 2.1.x** | **5.6 - 7.1** | **✅ Compatible** |

## Installation

```bash
composer require springimport/magento2-module-catalog-indexer-bugfix
php bin/magento module:enable SpringImport_CatalogIndexerBugfix
php bin/magento setup:upgrade
```
