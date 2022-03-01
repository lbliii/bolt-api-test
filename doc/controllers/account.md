# Account

```php
$accountController = $client->getAccountController();
```

## Class Name

`AccountController`

## Methods

* [Add Address](../../doc/controllers/account.md#add-address)
* [Get Account Details](../../doc/controllers/account.md#get-account-details)
* [Detect Account](../../doc/controllers/account.md#detect-account)
* [Add Payment Method](../../doc/controllers/account.md#add-payment-method)


# Add Address

Add an address to a shopper's account address book.

```php
function addAddress(?Address $body = null): V1AccountAddressesResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?Address`](../../doc/models/address.md) | Body, Optional | - |

## Response Type

[`V1AccountAddressesResponse`](../../doc/models/v1-account-addresses-response.md)

## Example Usage

```php
$body_streetAddress1 = '888 main street';
$body_locality = 'New York';
$body_region = 'NY';
$body_postalCode = '10044';
$body = new Models\Address(
    $body_streetAddress1,
    $body_locality,
    $body_region,
    $body_postalCode
);

$result = $accountController->addAddress($body);
```


# Get Account Details

Fetch a shopper's account details to pre-fill checkout fields. This request must come from your backend. For PCI compliance, only limited information is returned for each credit card available in the shopper’s wallet.

```php
function getAccountDetails(): AccountDetails
```

## Response Type

[`AccountDetails`](../../doc/models/account-details.md)

## Example Usage

```php
$result = $accountController->getAccountDetails();
```


# Detect Account

Check whether an account exists using `email` as the unique identifier. `Phone` is an optional parameter.

```php
function detectAccount(string $email, ?string $phone = null): V1AccountsView
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `email` | `string` | Query, Required | The bolt user's email address. |
| `phone` | `?string` | Query, Optional | The Bolt user's phone number. Includes country code (e.g. +1); does not include dashes or spaces. |

## Response Type

[`V1AccountsView`](../../doc/models/v1-accounts-view.md)

## Example Usage

```php
$email = 'email6';

$result = $accountController->detectAccount($email);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Missing Email Query Parameter | [`V1AccountExists422ErrorException`](../../doc/models/v1-account-exists-422-error-exception.md) |


# Add Payment Method

Add a payment method to a shopper's Bolt account Wallet; this request must come from your backend. You can also tokenize this payment information using our javascript library function.

```php
function addPaymentMethod(?EmbeddedCreditCardInput $body = null): PaymentMethodView
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?EmbeddedCreditCardInput`](../../doc/models/embedded-credit-card-input.md) | Body, Optional | - |

## Response Type

[`PaymentMethodView`](../../doc/models/payment-method-view.md)

## Example Usage

```php
$body_token = 'a1B2c3D4e5F6G7H8i9J0k1L2m3N4o5P6Q7r8S9t0';
$body_last4 = '1234';
$body_bin = 'bin6';
$body_number = 'number6';
$body_expiration = '12/12/2024';
$body_postalCode = '10044';
$body = new Models\EmbeddedCreditCardInput(
    $body_token,
    $body_last4,
    $body_bin,
    $body_number,
    $body_expiration,
    $body_postalCode
);

$result = $accountController->addPaymentMethod($body);
```

