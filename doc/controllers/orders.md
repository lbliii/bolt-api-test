# Orders

```php
$ordersController = $client->getOrdersController();
```

## Class Name

`OrdersController`

## Methods

* [Create Order Token](../../doc/controllers/orders.md#create-order-token)
* [Track Shipment](../../doc/controllers/orders.md#track-shipment)
* [Merchant Order Update](../../doc/controllers/orders.md#merchant-order-update)
* [Create Non Bolt Order](../../doc/controllers/orders.md#create-non-bolt-order)
* [Shipping and Tax](../../doc/controllers/orders.md#shipping-and-tax)
* [Create Remote Order](../../doc/controllers/orders.md#create-remote-order)


# Create Order Token

Make a request to this endpoint to create a Bolt order, generate a Bolt order token, and initiate the checkout process. A Bolt order token is required for Bolt orders; see Non-Bolt orders for alternative use cases.

```php
function createOrderToken(?OrderCreate $body = null): OrderView
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?OrderCreate`](../../doc/models/order-create.md) | Body, Optional | Generate Order Token |

## Response Type

[`OrderView`](../../doc/models/order-view.md)

## Example Usage

```php
$body_cart_totalAmount = 900;
$body_cart_items = [];

$body_cart_items_0_reference = 'item_100';
$body_cart_items_0_name = 'Bolt Swag Bag';
$body_cart_items_0_totalAmount = 1000;
$body_cart_items_0_unitPrice = 1000;
$body_cart_items_0_quantity = 1;
$body_cart_items_0_properties = [];

$body_cart_items_0_properties[0] = new Models\CartItemProperty;

$body_cart_items_0_properties[1] = new Models\CartItemProperty;

$body_cart_items_0_collections = ['collections2', 'collections1', 'collections0'];
$body_cart_items_0_customizations = [];

$body_cart_items_0_customizations[0] = new Models\CartItemCustomization;

$body_cart_items[0] = new Models\CartItem(
    $body_cart_items_0_reference,
    $body_cart_items_0_name,
    $body_cart_items_0_totalAmount,
    $body_cart_items_0_unitPrice,
    $body_cart_items_0_quantity,
    $body_cart_items_0_properties,
    $body_cart_items_0_collections,
    $body_cart_items_0_customizations
);

$body_cart_items_1_reference = 'item_100';
$body_cart_items_1_name = 'Bolt Swag Bag';
$body_cart_items_1_totalAmount = 1000;
$body_cart_items_1_unitPrice = 1000;
$body_cart_items_1_quantity = 1;
$body_cart_items_1_properties = [];

$body_cart_items_1_properties[0] = new Models\CartItemProperty;

$body_cart_items_1_properties[1] = new Models\CartItemProperty;

$body_cart_items_1_properties[2] = new Models\CartItemProperty;

$body_cart_items_1_collections = ['collections3', 'collections2'];
$body_cart_items_1_customizations = [];

$body_cart_items_1_customizations[0] = new Models\CartItemCustomization;

$body_cart_items_1_customizations[1] = new Models\CartItemCustomization;

$body_cart_items[1] = new Models\CartItem(
    $body_cart_items_1_reference,
    $body_cart_items_1_name,
    $body_cart_items_1_totalAmount,
    $body_cart_items_1_unitPrice,
    $body_cart_items_1_quantity,
    $body_cart_items_1_properties,
    $body_cart_items_1_collections,
    $body_cart_items_1_customizations
);

$body_cart_shipments = [];

$body_cart_shipments[0] = new Models\CartShipment;

$body_cart_inStoreCartShipments = [];

$body_cart_inStoreCartShipments[0] = new Models\InStoreCartShipment;

$body_cart_inStoreCartShipments[1] = new Models\InStoreCartShipment;

$body_cart_discounts = [];

$body_cart_discounts[0] = new Models\CartDiscount;

$body_cart_discounts[1] = new Models\CartDiscount;

$body_cart_discounts[2] = new Models\CartDiscount;

$body_cart_discountCode = 'SUMMER2024';
$body_cart_currency = 'USD';
$body_cart_isShopifyHostedCheckout = false;
$body_cart_metadata = ['key1' => 'value1', 'key2' => 'value2'];
$body_cart = new Models\CartCreate(
    $body_cart_totalAmount,
    $body_cart_items,
    $body_cart_shipments,
    $body_cart_inStoreCartShipments,
    $body_cart_discounts,
    $body_cart_discountCode,
    $body_cart_currency,
    $body_cart_isShopifyHostedCheckout,
    $body_cart_metadata
);
$body_userNote = 'Happy Birthday to my best friend in the whole world. Enjoy!';
$body_channel = Models\ChannelEnum::BROWSER;
$body = new Models\OrderCreate(
    $body_cart,
    $body_userNote,
    $body_channel
);
$body->setCreateCartOnMerchantBackend(false);

$result = $ordersController->createOrderToken($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Generic Error Schema | [`IErrorResponseException`](../../doc/models/i-error-response-exception.md) |
| 403 | Generic Error Schema | [`TBDErrorException`](../../doc/models/tbd-error-exception.md) |
| 422 | Generic Error Schema | [`TBDErrorException`](../../doc/models/tbd-error-exception.md) |


# Track Shipment

This endpoint creates an Easypost tracker to get shipment status updates.

```php
function trackShipment(?TrackingInput $body = null): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?TrackingInput`](../../doc/models/tracking-input.md) | Body, Optional | - |

## Response Type

`void`

## Example Usage

```php
$body_transactionReference = 'transaction_reference4';
$body_items = [];

$body_items_0_reference = 'reference1';
$body_items_0_options = [];

$body_items_0_options_0_name = 'hold_for_pickup';
$body_items_0_options_0_value = 'true';
$body_items_0_options[0] = new Models\TrackingInputItemOption(
    $body_items_0_options_0_name,
    $body_items_0_options_0_value
);

$body_items[0] = new Models\TrackingInputItem(
    $body_items_0_reference,
    $body_items_0_options
);

$body_items_1_reference = 'reference0';
$body_items_1_options = [];

$body_items_1_options_0_name = 'hold_for_pickup';
$body_items_1_options_0_value = 'true';
$body_items_1_options[0] = new Models\TrackingInputItemOption(
    $body_items_1_options_0_name,
    $body_items_1_options_0_value
);

$body_items_1_options_1_name = 'hold_for_pickup';
$body_items_1_options_1_value = 'true';
$body_items_1_options[1] = new Models\TrackingInputItemOption(
    $body_items_1_options_1_name,
    $body_items_1_options_1_value
);

$body_items[1] = new Models\TrackingInputItem(
    $body_items_1_reference,
    $body_items_1_options
);

$body_items_2_reference = 'reference9';
$body_items_2_options = [];

$body_items_2_options_0_name = 'hold_for_pickup';
$body_items_2_options_0_value = 'true';
$body_items_2_options[0] = new Models\TrackingInputItemOption(
    $body_items_2_options_0_name,
    $body_items_2_options_0_value
);

$body_items_2_options_1_name = 'hold_for_pickup';
$body_items_2_options_1_value = 'true';
$body_items_2_options[1] = new Models\TrackingInputItemOption(
    $body_items_2_options_1_name,
    $body_items_2_options_1_value
);

$body_items_2_options_2_name = 'hold_for_pickup';
$body_items_2_options_2_value = 'true';
$body_items_2_options[2] = new Models\TrackingInputItemOption(
    $body_items_2_options_2_name,
    $body_items_2_options_2_value
);

$body_items[2] = new Models\TrackingInputItem(
    $body_items_2_reference,
    $body_items_2_options
);

$body_trackingNumber = 'EZ2000000002';
$body_carrier = 'USPS';
$body_isNonBoltOrder = false;
$body = new Models\TrackingInput(
    $body_transactionReference,
    $body_items,
    $body_trackingNumber,
    $body_carrier,
    $body_isNonBoltOrder
);

$ordersController->trackShipment($body);
```


# Merchant Order Update

This endpoint updates an order that has already been placed.

```php
function merchantOrderUpdate(?MerchantOrderUpdate $body = null): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?MerchantOrderUpdate`](../../doc/models/merchant-order-update.md) | Body, Optional | - |

## Response Type

`void`

## Example Usage

```php
$ordersController->merchantOrderUpdate();
```


# Create Non Bolt Order

This endpoint creates an order that does not use a Bolt order token.

```php
function createNonBoltOrder(?NonBoltOrder $body = null): TransactionReferenceView
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?NonBoltOrder`](../../doc/models/non-bolt-order.md) | Body, Optional | TBD |

## Response Type

[`TransactionReferenceView`](../../doc/models/transaction-reference-view.md)

## Example Usage

```php
$body_cart_totalAmount = 900;
$body_cart_items = [];

$body_cart_items_0_reference = 'item_100';
$body_cart_items_0_name = 'Bolt Swag Bag';
$body_cart_items_0_totalAmount = 1000;
$body_cart_items_0_unitPrice = 1000;
$body_cart_items_0_quantity = 1;
$body_cart_items_0_properties = [];

$body_cart_items_0_properties[0] = new Models\CartItemProperty;

$body_cart_items_0_properties[1] = new Models\CartItemProperty;

$body_cart_items_0_collections = ['collections2', 'collections1', 'collections0'];
$body_cart_items_0_customizations = [];

$body_cart_items_0_customizations[0] = new Models\CartItemCustomization;

$body_cart_items[0] = new Models\CartItem(
    $body_cart_items_0_reference,
    $body_cart_items_0_name,
    $body_cart_items_0_totalAmount,
    $body_cart_items_0_unitPrice,
    $body_cart_items_0_quantity,
    $body_cart_items_0_properties,
    $body_cart_items_0_collections,
    $body_cart_items_0_customizations
);

$body_cart_items_1_reference = 'item_100';
$body_cart_items_1_name = 'Bolt Swag Bag';
$body_cart_items_1_totalAmount = 1000;
$body_cart_items_1_unitPrice = 1000;
$body_cart_items_1_quantity = 1;
$body_cart_items_1_properties = [];

$body_cart_items_1_properties[0] = new Models\CartItemProperty;

$body_cart_items_1_properties[1] = new Models\CartItemProperty;

$body_cart_items_1_properties[2] = new Models\CartItemProperty;

$body_cart_items_1_collections = ['collections3', 'collections2'];
$body_cart_items_1_customizations = [];

$body_cart_items_1_customizations[0] = new Models\CartItemCustomization;

$body_cart_items_1_customizations[1] = new Models\CartItemCustomization;

$body_cart_items[1] = new Models\CartItem(
    $body_cart_items_1_reference,
    $body_cart_items_1_name,
    $body_cart_items_1_totalAmount,
    $body_cart_items_1_unitPrice,
    $body_cart_items_1_quantity,
    $body_cart_items_1_properties,
    $body_cart_items_1_collections,
    $body_cart_items_1_customizations
);

$body_cart_shipments = [];

$body_cart_shipments[0] = new Models\CartShipment;

$body_cart_inStoreCartShipments = [];

$body_cart_inStoreCartShipments[0] = new Models\InStoreCartShipment;

$body_cart_inStoreCartShipments[1] = new Models\InStoreCartShipment;

$body_cart_discounts = [];

$body_cart_discounts[0] = new Models\CartDiscount;

$body_cart_discounts[1] = new Models\CartDiscount;

$body_cart_discounts[2] = new Models\CartDiscount;

$body_cart_discountCode = 'SUMMER2024';
$body_cart = new Models\NonBoltCart(
    $body_cart_totalAmount,
    $body_cart_items,
    $body_cart_shipments,
    $body_cart_inStoreCartShipments,
    $body_cart_discounts,
    $body_cart_discountCode
);
$body_userNote = 'Happy Birthday to my best friend in the whole world. Enjoy!';
$body_paymentMethod = 'payment_method4';
$body = new Models\NonBoltOrder(
    $body_cart,
    $body_userNote,
    $body_paymentMethod
);

$result = $ordersController->createNonBoltOrder($body);
```


# Shipping and Tax

TBD

```php
function shippingAndTax(?ShippingAndTax $body = null): IShippingAndTaxView
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?ShippingAndTax`](../../doc/models/shipping-and-tax.md) | Body, Optional | - |

## Response Type

[`IShippingAndTaxView`](../../doc/models/i-shipping-and-tax-view.md)

## Example Usage

```php
$body_orderToken = 'a1B2c3D4e5F6G7H8i9J0k1L2m3N4o5P6Q7r8S9t0';
$body_shippingAddress_streetAddress1 = '888 main street';
$body_shippingAddress_locality = 'New York';
$body_shippingAddress_region = 'NY';
$body_shippingAddress_postalCode = '10044';
$body_shippingAddress = new Models\Address(
    $body_shippingAddress_streetAddress1,
    $body_shippingAddress_locality,
    $body_shippingAddress_region,
    $body_shippingAddress_postalCode
);
$body_cart_totalAmount = 900;
$body_cart_items = [];

$body_cart_items_0_reference = 'item_100';
$body_cart_items_0_name = 'Bolt Swag Bag';
$body_cart_items_0_totalAmount = 1000;
$body_cart_items_0_unitPrice = 1000;
$body_cart_items_0_quantity = 1;
$body_cart_items_0_properties = [];

$body_cart_items_0_properties[0] = new Models\CartItemProperty;

$body_cart_items_0_properties[1] = new Models\CartItemProperty;

$body_cart_items_0_collections = ['collections2', 'collections1', 'collections0'];
$body_cart_items_0_customizations = [];

$body_cart_items_0_customizations[0] = new Models\CartItemCustomization;

$body_cart_items[0] = new Models\CartItem(
    $body_cart_items_0_reference,
    $body_cart_items_0_name,
    $body_cart_items_0_totalAmount,
    $body_cart_items_0_unitPrice,
    $body_cart_items_0_quantity,
    $body_cart_items_0_properties,
    $body_cart_items_0_collections,
    $body_cart_items_0_customizations
);

$body_cart_items_1_reference = 'item_100';
$body_cart_items_1_name = 'Bolt Swag Bag';
$body_cart_items_1_totalAmount = 1000;
$body_cart_items_1_unitPrice = 1000;
$body_cart_items_1_quantity = 1;
$body_cart_items_1_properties = [];

$body_cart_items_1_properties[0] = new Models\CartItemProperty;

$body_cart_items_1_properties[1] = new Models\CartItemProperty;

$body_cart_items_1_properties[2] = new Models\CartItemProperty;

$body_cart_items_1_collections = ['collections3', 'collections2'];
$body_cart_items_1_customizations = [];

$body_cart_items_1_customizations[0] = new Models\CartItemCustomization;

$body_cart_items_1_customizations[1] = new Models\CartItemCustomization;

$body_cart_items[1] = new Models\CartItem(
    $body_cart_items_1_reference,
    $body_cart_items_1_name,
    $body_cart_items_1_totalAmount,
    $body_cart_items_1_unitPrice,
    $body_cart_items_1_quantity,
    $body_cart_items_1_properties,
    $body_cart_items_1_collections,
    $body_cart_items_1_customizations
);

$body_cart_shipments = [];

$body_cart_shipments[0] = new Models\CartShipment;

$body_cart_inStoreCartShipments = [];

$body_cart_inStoreCartShipments[0] = new Models\InStoreCartShipment;

$body_cart_inStoreCartShipments[1] = new Models\InStoreCartShipment;

$body_cart_discounts = [];

$body_cart_discounts[0] = new Models\CartDiscount;

$body_cart_discounts[1] = new Models\CartDiscount;

$body_cart_discounts[2] = new Models\CartDiscount;

$body_cart_discountCode = 'SUMMER2024';
$body_cart_currency = 'USD';
$body_cart_isShopifyHostedCheckout = false;
$body_cart_metadata = ['key1' => 'value1', 'key2' => 'value2'];
$body_cart = new Models\CartCreate(
    $body_cart_totalAmount,
    $body_cart_items,
    $body_cart_shipments,
    $body_cart_inStoreCartShipments,
    $body_cart_discounts,
    $body_cart_discountCode,
    $body_cart_currency,
    $body_cart_isShopifyHostedCheckout,
    $body_cart_metadata
);
$body_estimatedDeliveryExperiment = false;
$body = new Models\ShippingAndTax(
    $body_orderToken,
    $body_shippingAddress,
    $body_cart,
    $body_estimatedDeliveryExperiment
);

$result = $ordersController->shippingAndTax($body);
```


# Create Remote Order

This is used for publisher implementation use cases. After the publisher has called Bolt to check product inventory for availability, an order can created through the `/remote_checkout/order` endpoint.

```php
function createRemoteOrder(
    string $xNonce,
    string $xPublisherKey,
    string $xAuthorizationSignature,
    ?IRemoteOrderCreate $body = null
): IRemoteOrderResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xNonce` | `string` | Header, Required | Unique 12-16 digit for every request |
| `xPublisherKey` | `string` | Header, Required | Unique identifier for the publisher. |
| `xAuthorizationSignature` | `string` | Header, Required | Generated signature after using the signing secret and nonce by the publisher. |
| `body` | [`?IRemoteOrderCreate`](../../doc/models/i-remote-order-create.md) | Body, Optional | - |

## Response Type

[`IRemoteOrderResult`](../../doc/models/i-remote-order-result.md)

## Example Usage

```php
$xNonce = '00000534-0000-0000-0000-000000000000';
$xPublisherKey = 'X-Publisher-Key8';
$xAuthorizationSignature = 'X-Authorization-Signature6';

$result = $ordersController->createRemoteOrder($xNonce, $xPublisherKey, $xAuthorizationSignature);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Order Creation Failed | [`V1RemoteCheckoutOrder422ErrorException`](../../doc/models/v1-remote-checkout-order-422-error-exception.md) |

