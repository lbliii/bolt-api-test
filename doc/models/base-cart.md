
# Base Cart

The BaseCart object contains the core details typically found in most cart objects, including items, discounts, amount totals, shipments, and in-store pickups.

## Structure

`BaseCart`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `totalAmount` | `int` | Required | The total amount, in cents, of the cart including its items and taxes if applicable. This total must match the sum of all other amounts. | getTotalAmount(): int | setTotalAmount(int totalAmount): void |
| `items` | [`CartItem[]`](../../doc/models/cart-item.md) | Required | The list of items associated with the cart. | getItems(): array | setItems(array items): void |
| `taxAmount` | `?int` | Optional | The total tax amount for all of the items associated with the cart. | getTaxAmount(): ?int | setTaxAmount(?int taxAmount): void |
| `billingAddressId` | `?string` | Optional | The unique Bolt ID associated with the billing address. Must be `null` if this address has never been saved to a Bolt account. | getBillingAddressId(): ?string | setBillingAddressId(?string billingAddressId): void |
| `billingAddress` | [`?Address`](../../doc/models/address.md) | Optional | The Address object is used for billing, shipping, and physical store address use cases. | getBillingAddress(): ?Address | setBillingAddress(?Address billingAddress): void |
| `shipments` | [`CartShipment[]`](../../doc/models/cart-shipment.md) | Required | - | getShipments(): array | setShipments(array shipments): void |
| `inStoreCartShipments` | [`InStoreCartShipment[]`](../../doc/models/in-store-cart-shipment.md) | Required | - | getInStoreCartShipments(): array | setInStoreCartShipments(array inStoreCartShipments): void |
| `discounts` | [`CartDiscount[]`](../../doc/models/cart-discount.md) | Required | - | getDiscounts(): array | setDiscounts(array discounts): void |
| `discountCode` | `string` | Required | The discount code provided. | getDiscountCode(): string | setDiscountCode(string discountCode): void |
| `discountSource` | [`?string (DiscountSourceEnum)`](../../doc/models/discount-source-enum.md) | Optional | Used to define the source of the discount applied. | getDiscountSource(): ?string | setDiscountSource(?string discountSource): void |

## Example (as JSON)

```json
{
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
}
```

