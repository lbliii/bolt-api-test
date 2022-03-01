# Transactions

```php
$transactionsController = $client->getTransactionsController();
```

## Class Name

`TransactionsController`

## Methods

* [Async Credit](../../doc/controllers/transactions.md#async-credit)
* [Capture Transaction](../../doc/controllers/transactions.md#capture-transaction)
* [Refund](../../doc/controllers/transactions.md#refund)
* [Void](../../doc/controllers/transactions.md#void)
* [Merchant Authorize](../../doc/controllers/transactions.md#merchant-authorize)
* [Review Transaction](../../doc/controllers/transactions.md#review-transaction)
* [Get Transaction Details](../../doc/controllers/transactions.md#get-transaction-details)


# Async Credit

This endpoint ...

```php
function asyncCredit(?TransactionCredit $body = null): TBD
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?TransactionCredit`](../../doc/models/transaction-credit.md) | Body, Optional | TBD |

## Response Type

[`TBD`](../../doc/models/tbd.md)

## Example Usage

```php
$body_amount = 218;
$body_currency = 'USD';
$body_skipHookNotification = false;
$body = new Models\TransactionCredit(
    $body_amount,
    $body_currency,
    $body_skipHookNotification
);

$result = $transactionsController->asyncCredit($body);
```


# Capture Transaction

This captures funds for the designated transaction. A capture can be done for any partial amount or for the total authorized amount. *Note that the actual JSON response will return all transaction details, but the fields documented below are the only fields relevant to this request.*

```php
function captureTransaction(string $xNonce, ?CaptureTransaction $body = null): TransactionView
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xNonce` | `string` | Header, Required | Unique 12-16 digit for every request |
| `body` | [`?CaptureTransaction`](../../doc/models/capture-transaction.md) | Body, Optional | Capture a Transaction |

## Response Type

[`TransactionView`](../../doc/models/transaction-view.md)

## Example Usage

```php
$xNonce = '00000534-0000-0000-0000-000000000000';
$body_transactionId = 'TA8hLkJh4db4J';
$body_amount = 31934;
$body_currency = 'USD';
$body = new Models\CaptureTransaction(
    $body_transactionId,
    $body_amount,
    $body_currency
);

$result = $transactionsController->captureTransaction($xNonce, $body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 403 | Forbidden | [`V1MerchantTransactionsCapture403ErrorException`](../../doc/models/v1-merchant-transactions-capture-403-error-exception.md) |
| 404 | Generic Error Schema | [`TBDErrorException`](../../doc/models/tbd-error-exception.md) |
| 422 | Unprocessable Entity | [`V1MerchantTransactionsCapture422ErrorException`](../../doc/models/v1-merchant-transactions-capture-422-error-exception.md) |


# Refund

This refunds a captured transaction. Refunds can be done for any partial amount or for the total authorized amount. The `CreditCardRefund` response contains only the most relevant fields and is not a full response; see the `TransactionDetails` response for a full example.

```php
function refund(string $xNonce, ?TransactionCredit $body = null)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xNonce` | `string` | Header, Required | Unique 12-16 digit for every request |
| `body` | [`?TransactionCredit`](../../doc/models/transaction-credit.md) | Body, Optional | Refund a Transaction |

## Response Type

`TransactionView|CreditCardRefund`

## Example Usage

```php
$xNonce = '00000534-0000-0000-0000-000000000000';
$body_amount = 218;
$body_currency = 'USD';
$body_skipHookNotification = false;
$body = new Models\TransactionCredit(
    $body_amount,
    $body_currency,
    $body_skipHookNotification
);

$result = $transactionsController->refund($xNonce, $body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 403 | Generic Error Schema | [`TBDErrorException`](../../doc/models/tbd-error-exception.md) |
| 404 | Generic Error Schema | [`TBDErrorException`](../../doc/models/tbd-error-exception.md) |
| 422 | Generic Error Schema | [`TBDErrorException`](../../doc/models/tbd-error-exception.md) |


# Void

This voids the authorization for a given transaction. Voids must be completed before the authorization is captured. Although the response returns all transaction details, only `id` and `status` are needed.

```php
function void(string $xNonce, ?CreditCardVoid $body = null)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xNonce` | `string` | Header, Required | Unique 12-16 digit for every request |
| `body` | [`?CreditCardVoid`](../../doc/models/credit-card-void.md) | Body, Optional | Void a Transaction |

## Response Type

`CreditCardVoidView|TransactionView`

## Example Usage

```php
$xNonce = '00000534-0000-0000-0000-000000000000';
$body_transactionId = 'TA8hLkJh4db4J';
$body = new Models\CreditCardVoid(
    $body_transactionId
);

$result = $transactionsController->void($xNonce, $body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 403 | Generic Error Schema | [`TBDErrorException`](../../doc/models/tbd-error-exception.md) |
| 404 | Generic Error Schema | [`V1MerchantTransactionsVoid404ErrorException`](../../doc/models/v1-merchant-transactions-void-404-error-exception.md) |


# Merchant Authorize

This endpoint authorizes payments using both saved payment methods and unsaved payment methods. For guest-checkout flows and one-time payments, use the `MerchantCreditCardAuthorization` request example; for logged-in checkout flows using saved payment methods (either as a one-time purchase or as a reoccuring subscription), use the `MerchantCreditCardAuthorizationRecharge` request example.

```php
function merchantAuthorize(
    string $xNonce,
    ?string $xPublishableKey = null,
    ?MerchantCreditCardAuthorizationRecharge $body = null
): IAuthorizeResultView
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xNonce` | `string` | Header, Required | Unique 12-16 digit for every request |
| `xPublishableKey` | `?string` | Header, Optional | The public API key used to identify the merchant. This key is found in the Developer > API section of the Bolt Merchant Dashboard. |
| `body` | [`?MerchantCreditCardAuthorization\|?MerchantCreditCardAuthorizationRecharge`](../../$m/) | Body, Optional | Authorize a Transaction |

## Response Type

[`IAuthorizeResultView`](../../doc/models/i-authorize-result-view.md)

## Example Usage

```php
$xNonce = '00000534-0000-0000-0000-000000000000';
$body = BoltAPILib\ApiHelper::deserialize('{"$$__case":0,"$$__case_of":"oneOf","value":{"auto_capture":null,"cart":{"total_amount":117,"items":[{"reference":"reference8","name":"name2","description":null,"options":null,"total_amount":176,"unit_price":246,"tax_amount":null,"quantity":132,"uom":null,"upc":null,"sku":null,"isbn":null,"brand":null,"manufacturer":null,"category":null,"tags":null,"properties":[{"name":null,"name_id":null,"value":null,"value_id":null},{"name":null,"name_id":null,"value":null,"value_id":null}],"color":null,"size":null,"weight":null,"weight_unit":null,"image_url":null,"details_url":null,"external_inputs":null,"taxable":null,"tax_code":null,"type":null,"collections":["collections1","collections0"],"subscription":null,"source":null,"item_group":null,"shipment_type":null,"customizations":[{"title":null,"price":null,"attributes":null}],"msrp":null},{"reference":"reference9","name":"name3","description":null,"options":null,"total_amount":177,"unit_price":247,"tax_amount":null,"quantity":133,"uom":null,"upc":null,"sku":null,"isbn":null,"brand":null,"manufacturer":null,"category":null,"tags":null,"properties":[{"name":null,"name_id":null,"value":null,"value_id":null},{"name":null,"name_id":null,"value":null,"value_id":null},{"name":null,"name_id":null,"value":null,"value_id":null}],"color":null,"size":null,"weight":null,"weight_unit":null,"image_url":null,"details_url":null,"external_inputs":null,"taxable":null,"tax_code":null,"type":null,"collections":["collections0","collections9","collections8"],"subscription":null,"source":null,"item_group":null,"shipment_type":null,"customizations":[{"title":null,"price":null,"attributes":null},{"title":null,"price":null,"attributes":null}],"msrp":null}],"tax_amount":null,"billing_address_id":null,"billing_address":null,"shipments":[{"shipping_address_id":null,"shipping_address":null,"total_weight":null,"total_weight_unit":null,"shipping_method":null,"carrier":null,"reference":null,"signature":null,"service":null,"expedited":null,"cost":null,"tax_amount":null,"package_type":null,"package_width":null,"package_height":null,"package_depth":null,"package_dimension_unit":null,"package_weight":null,"package_weight_unit":null,"tax_code":null,"estimated_delivery_date":null,"type":null,"discounted_by_membership":null}],"in_store_cart_shipments":[{"cart_shipment":null,"in_store_pickup_address":null,"distance":null,"distance_unit":null,"store_name":null,"pickup_window_open":null,"pickup_window_close":null},{"cart_shipment":null,"in_store_pickup_address":null,"distance":null,"distance_unit":null,"store_name":null,"pickup_window_open":null,"pickup_window_close":null},{"cart_shipment":null,"in_store_pickup_address":null,"distance":null,"distance_unit":null,"store_name":null,"pickup_window_open":null,"pickup_window_close":null}],"discounts":[{"amount":null,"code":null,"reference":null,"description":null,"details_url":null,"discount_category":null,"type":null},{"amount":null,"code":null,"reference":null,"description":null,"details_url":null,"discount_category":null,"type":null},{"amount":null,"code":null,"reference":null,"description":null,"details_url":null,"discount_category":null,"type":null}],"discount_code":"discount_code9","discount_source":null,"currency":"currency5","order_description":null,"order_reference":null,"transaction_reference":null,"cart_url":null,"display_id":null,"is_shopify_hosted_checkout":true,"metadata":{"key0":"metadata2","key1":"metadata1","key2":"metadata0"}},"consumer_id":null,"credit_card":{"token":"token7","last4":"last49","bin":"bin3","number":"number1","expiration":"expiration7","postal_code":"postal_code5","billing_address_id":null,"billing_address":null,"save":null,"token_type":null,"network":null,"cryptogram":null,"eci":null},"division_id":"division_id7","previous_transaction_id":null,"processing_initiator":null,"shipping_address":null,"source":"virtual_terminal","user_identifier":{"email":null,"phone":null,"email_id":null,"phone_id":null,"artifact":null},"user_identity":{"first_name":null,"last_name":null},"create_bolt_account":true}}');

$result = $transactionsController->merchantAuthorize($xNonce, null, $body);
```


# Review Transaction

TBD

```php
function reviewTransaction(string $xNonce, ?MerchantCreditCardReview $body = null): TransactionDetailsView
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xNonce` | `string` | Header, Required | Unique 12-16 digit for every request |
| `body` | [`?MerchantCreditCardReview`](../../doc/models/merchant-credit-card-review.md) | Body, Optional | Review a Transaction |

## Response Type

[`TransactionDetailsView`](../../doc/models/transaction-details-view.md)

## Example Usage

```php
$xNonce = '00000534-0000-0000-0000-000000000000';

$result = $transactionsController->reviewTransaction($xNonce);
```


# Get Transaction Details

TBD

```php
function getTransactionDetails(string $rEFERENCE, string $xNonce): TransactionDetailsView
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `rEFERENCE` | `string` | Template, Required | This is the Bolt transaction reference. (ex. N7Y3-NFKC-VFRF) |
| `xNonce` | `string` | Header, Required | Unique 12-16 digit for every request |

## Response Type

[`TransactionDetailsView`](../../doc/models/transaction-details-view.md)

## Example Usage

```php
$rEFERENCE = 'REFERENCE0';
$xNonce = '00000534-0000-0000-0000-000000000000';

$result = $transactionsController->getTransactionDetails($rEFERENCE, $xNonce);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 403 | Generic Error Schema | [`TBDErrorException`](../../doc/models/tbd-error-exception.md) |
| 422 | Generic Error Schema | [`TBDErrorException`](../../doc/models/tbd-error-exception.md) |

