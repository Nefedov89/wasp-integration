Laravel API endpoints wrapper for WASP inventory system

See more here: https://dri.waspinventorycloud.com/Help/Api

## Instalation

1. composer require nefedov89/wasp-integration
2. par vendor:publish --provider="Nefedov89\WaspIntegration\ServiceProvider"

Then you can use WaspIntegrationService as service from Laravel's service container

## Available methods of WaspIntegrationService
##### You have to pass array $request parameter to each method. To see each $request data check doc page of every request. Use links below.  

### ApiAttachments
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-attachments-uplodAttachmentsForForms">attachmentsUplodAttachmentsForForms</a>

### ApiCustomer
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-customers-createNew">customersCreateNew</a> 
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-customers-updateExisting">customersUpdateExisting</a> 
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-customers-save">customersSave</a> 

### ApiItemPickPackShipOrder
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-pickpackshiporder-create">pickPackShipOrderCreate</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-pickpackshiporder-update">pickPackShipOrderUpdate</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-pickpackshiporder-advancedinfosearch">pickPackShipOrderAdvancedInfoSearch</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-pickpackshiporder-getordersbynumber">pickPackShipOrderGetOrdersByNumber</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-pickpackshiporder-deleteordersbynumber">pickPackShipOrderDeleteOrdersByNumber</a>

### ApiItemPurchaseOrder
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-purchaseorder-create">purchaseOrderCreate</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-purchaseorder-update">purchaseOrderUpdate</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-purchaseorder-advancedinfosearch">purchaseOrderAdvancedInfoSearch</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-purchaseorder-purchaseordersearch">purchaseOrderPurchaseOrderSearch</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-purchaseorder-getordersbynumber">purchaseOrderGetOrdersByNumber</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-purchaseorder-deleteordersbynumber">purchaseOrderDeleteOrdersByNumber</a>

### ApiItems
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-createInventoryItems">itemCreateInventoryItems</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-updateInventoryItems">itemUpdateInventoryItems</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-createNonInventoryItems">itemCreateNonInventoryItems</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-updateNonInventoryItems">itemUpdateNonInventoryItems</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-createServiceItems">itemCreateServiceItems</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-updateServiceItems">itemUpdateServiceItems</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-getitemsbynumber">itemGetItemsByNumber</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-infosearch">itemInfoSearch</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-advancedinfosearch">itemAdvancedInfoSearch</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-getinventoryitem-itemNumber">itemGetInventoryItem</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-getnoninventoryitem-itemNumber">itemGetNonInventoryItem</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-getserviceitem-itemNumber">itemGetServiceItem</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-getassemblyitem-itemNumber">itemGetAssemblyItem</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-getkititem-itemNumber">itemGetKitItem</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-inventorysearch">itemInventorySearch</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-item-advancedinventorysearch">itemAdvancedInventorySearch</a>

### ApiLocations
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-locations-create">locationsCreate</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-locations-update">locationsUpdate</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-locations-search-exact">locationsSearchExact</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-locations-advancedinfosearch">locationsAdvancedInfoSearch</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-locations-getlocationsbycode">locationsGetLocationsByCode</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-locations-infosearch">locationsInfoSearch</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-locations-deletelocationsbycode">locationsDeleteLocationsByCode</a>

### ApiSalesTaxCode
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-salestaxcode-SaveSalesTaxCode">salesTaxCodeSaveSalesTaxCode</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-salestaxcode-RetrieveSalesTaxCodesByNames">salesTaxCodeRetrieveSalesTaxCodesByNames</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-salestaxcode-DeleteSalesTaxCodesByNames">salesTaxCodeDeleteSalesTaxCodesByNames</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=GET-public-api-ic-salestaxcode-TaxCodeSearchGetAll">salesTaxCodeTaxCodeSearchGetAll</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-ic-salestaxcode-TaxCodeSearch">salesTaxCodeTaxCodeSearch</a>

### ApiSites
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-sites-create">sitesCreate</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-sites-update">sitesUpdate</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-sites-search-exact">sitesSearchExact</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-sites-getsitesbyname">sitesGetSitesByName</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-sites-infosearch">sitesInfoSearch</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-sites-advancedinfosearch">sitesAdvancedInfoSearch</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-sites-deletesitesbynumber">sitesDeleteSitesByNumber</a>

### ApiTransactions
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-transactions-grid-query-transaction-history">transactionsGridQueryTransactionHistory</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-transactions-item-add">transactionsItemAdd</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-transactions-item-remove">transactionsItemRemove</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-transactions-item-adjust">transactionsItemAdjust</a>
#### <a target="_blank" href="https://dri.waspinventorycloud.com/Help/Details?apiId=POST-public-api-transactions-item-move">transactionsItemMove</a>
