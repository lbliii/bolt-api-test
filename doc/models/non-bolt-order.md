
# Non Bolt Order

An order that is not created using a Bolt token.

## Structure

`NonBoltOrder`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cart` | [`NonBoltCart`](../../doc/models/non-bolt-cart.md) | Required | - | getCart(): NonBoltCart | setCart(NonBoltCart cart): void |
| `userNote` | `string` | Required | Used by shoppers to make extra requests or provide details for gift messages.<br>**Constraints**: *Maximum Length*: `1024` | getUserNote(): string | setUserNote(string userNote): void |
| `userIdentifier` | `?string` | Optional | - | getUserIdentifier(): ?string | setUserIdentifier(?string userIdentifier): void |
| `userIdentity` | `?string` | Optional | - | getUserIdentity(): ?string | setUserIdentity(?string userIdentity): void |
| `paymentMethod` | `string` | Required | - | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |

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
    "discount_code": "SUMMER2024"
  },
  "user_note": "Happy Birthday to my best friend in the whole world. Enjoy!",
  "payment_method": null
}
```

