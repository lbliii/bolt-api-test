
# Shipping and Tax

## Structure

`ShippingAndTax`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `orderToken` | `string` | Required | The Bolt token associated to the order. | getOrderToken(): string | setOrderToken(string orderToken): void |
| `shippingAddress` | [`Address`](../../doc/models/address.md) | Required | The Address object is used for billing, shipping, and physical store address use cases. | getShippingAddress(): Address | setShippingAddress(Address shippingAddress): void |
| `cart` | [`CartCreate`](../../doc/models/cart-create.md) | Required | - | getCart(): CartCreate | setCart(CartCreate cart): void |
| `shippingOptions` | [`?(CartShipment[])`](../../doc/models/cart-shipment.md) | Optional | - | getShippingOptions(): ?array | setShippingOptions(?array shippingOptions): void |
| `requestSource` | [`?string (RequestSourceEnum)`](../../doc/models/request-source-enum.md) | Optional | - | getRequestSource(): ?string | setRequestSource(?string requestSource): void |
| `estimatedDeliveryExperiment` | `bool` | Required | - | getEstimatedDeliveryExperiment(): bool | setEstimatedDeliveryExperiment(bool estimatedDeliveryExperiment): void |

## Example (as JSON)

```json
{
  "order_token": "a1B2c3D4e5F6G7H8i9J0k1L2m3N4o5P6Q7r8S9t0",
  "shipping_address": {
    "street_address1": "888 main street",
    "locality": "New York",
    "region": "NY",
    "postal_code": "10044"
  },
  "cart": {
    "total_amount": 900,
    "items": {
      "reference": "item_100",
      "name": "Bolt Swag Bag",
      "total_amount": 1000,
      "unit_price": 1000,
      "quantity": 1,
      "properties": null,
      "collections": null,
      "customizations": null
    },
    "shipments": null,
    "in_store_cart_shipments": null,
    "discounts": null,
    "discount_code": "SUMMER2024",
    "currency": "USD",
    "is_shopify_hosted_checkout": false,
    "metadata": {
      "key1": "value1",
      "key2": "value2"
    }
  },
  "estimated_delivery_experiment": null
}
```

