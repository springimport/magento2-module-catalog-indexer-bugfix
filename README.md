# Catalog Indexer Bugfix
Bugfix for catalog indexer. Necessary for Magento `<= 2.1.8`.

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
