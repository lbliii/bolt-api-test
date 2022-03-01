
# Order Create

## Structure

`OrderCreate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `externalInputs` | [`?OrderCreateExternalInputs`](../../doc/models/order-create-external-inputs.md) | Optional | - | getExternalInputs(): ?OrderCreateExternalInputs | setExternalInputs(?OrderCreateExternalInputs externalInputs): void |
| `cart` | [`CartCreate`](../../doc/models/cart-create.md) | Required | - | getCart(): CartCreate | setCart(CartCreate cart): void |
| `userNote` | `string` | Required | Used by shoppers to make extra requests or provide details for gift messages.<br>**Constraints**: *Maximum Length*: `1024` | getUserNote(): string | setUserNote(string userNote): void |
| `createCartOnMerchantBackend` | `?bool` | Required | Used to determine whether the order is created on your backend platform. This should almost always be `false`. | getCreateCartOnMerchantBackend(): ?bool | setCreateCartOnMerchantBackend(?bool createCartOnMerchantBackend): void |
| `metadata` | [`?IOrderMetadata`](../../doc/models/i-order-metadata.md) | Optional | - | getMetadata(): ?IOrderMetadata | setMetadata(?IOrderMetadata metadata): void |
| `channel` | [`string (ChannelEnum)`](../../doc/models/channel-enum.md) | Required | Used to determine the channel from which the order was created. | getChannel(): string | setChannel(string channel): void |

## Example (as JSON)

```json
{
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
  "user_note": "Happy Birthday to my best friend in the whole world. Enjoy!",
  "create_cart_on_merchant_backend": false,
  "channel": null
}
```

