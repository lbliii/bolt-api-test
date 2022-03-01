# Merchant

```php
$merchantController = $client->getMerchantController();
```

## Class Name

`MerchantController`

## Methods

* [Add Merchant Metrics](../../doc/controllers/merchant.md#add-merchant-metrics)
* [Create Payment Methods](../../doc/controllers/merchant.md#create-payment-methods)
* [Sign Merchant User ID](../../doc/controllers/merchant.md#sign-merchant-user-id)
* [Statements](../../doc/controllers/merchant.md#statements)
* [Verify Signature](../../doc/controllers/merchant.md#verify-signature)
* [Get Statement CSV](../../doc/controllers/merchant.md#get-statement-csv)


# Add Merchant Metrics

This endpoint listens for when a merchant uploads metrics.

```php
function addMerchantMetrics(?MerchantMetrics $body = null): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?MerchantMetrics`](../../doc/models/merchant-metrics.md) | Body, Optional | - |

## Response Type

`void`

## Example Usage

```php
$merchantController->addMerchantMetrics();
```


# Create Payment Methods

This endpoint ...

```php
function createPaymentMethods(?PaymentMethod $body = null): PaymentMethodSessionView
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?PaymentMethod`](../../doc/models/payment-method.md) | Body, Optional | TBD |

## Response Type

[`PaymentMethodSessionView`](../../doc/models/payment-method-session-view.md)

## Example Usage

```php
$result = $merchantController->createPaymentMethods();
```


# Sign Merchant User ID

This endpoint...

```php
function signMerchantUserID(?V1MerchantSignRequest $body = null): MerchantUserView
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?V1MerchantSignRequest`](../../doc/models/v1-merchant-sign-request.md) | Body, Optional | - |

## Response Type

[`MerchantUserView`](../../doc/models/merchant-user-view.md)

## Example Usage

```php
$result = $merchantController->signMerchantUserID();
```


# Statements

Get a pre-signed URL for the requested statement file.

```php
function statements(string $xNonce, ?V1MerchantStatementRequest $body = null): V1MerchantStatementResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xNonce` | `string` | Header, Required | Unique 12-16 digit for every request |
| `body` | [`?V1MerchantStatementRequest`](../../doc/models/v1-merchant-statement-request.md) | Body, Optional | View Statements |

## Response Type

[`V1MerchantStatementResponse`](../../doc/models/v1-merchant-statement-response.md)

## Example Usage

```php
$xNonce = '00000534-0000-0000-0000-000000000000';
$body_type = Models\Type9Enum::DAILY_TRANSACTION;
$body_date = 1586480400000;
$body = new Models\V1MerchantStatementRequest(
    $body_type,
    $body_date
);

$result = $merchantController->statements($xNonce, $body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 403 | Generic Error Schema | [`TBDErrorException`](../../doc/models/tbd-error-exception.md) |
| 404 | Generic Error Schema | [`TBDErrorException`](../../doc/models/tbd-error-exception.md) |
| 422 | Generic Error Schema | [`TBDErrorException`](../../doc/models/tbd-error-exception.md) |


# Verify Signature

This endpoint ...

```php
function verifySignature(?TBD $body = null): TBD
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?TBD`](../../doc/models/tbd.md) | Body, Optional | TBD |

## Response Type

[`TBD`](../../doc/models/tbd.md)

## Example Usage

```php
$result = $merchantController->verifySignature();
```


# Get Statement CSV

TBD

```php
function getStatementCSV(): TBD
```

## Response Type

[`TBD`](../../doc/models/tbd.md)

## Example Usage

```php
$result = $merchantController->getStatementCSV();
```

