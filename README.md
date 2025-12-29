# Catalog Indexer Bugfix

> **⚠️ DEPRECATED - This module is only for Magento 2.0.x and 2.1.x**
>
> Bugfix for catalog indexer. This bug was fixed in Magento 2.2.0 and later versions.
> **DO NOT use this module with Magento 2.2+ or 2.4+**

[Github issue](https://github.com/magento/magento2/issues/8018), [StackOoerflow](https://magento.stackexchange.com/questions/157797/magento-2-how-to-override-abstract-class-for-product-category-indexing-issue).

Enable module:
```
php -f bin/magento module:enable SpringImport_CatalogIndexerBugfix
```

Disable module:
```
php -f bin/magento module:disable SpringImport_CatalogIndexerBugfix
```

Update system:
```
php -f bin/magento setup:upgrade
```
