
# Merchant Order Update

## Structure

`MerchantOrderUpdate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cart` | [`?BaseCart`](../../doc/models/base-cart.md) | Optional | The BaseCart object contains the core details typically found in most cart objects, including items, discounts, amount totals, shipments, and in-store pickups. | getCart(): ?BaseCart | setCart(?BaseCart cart): void |
| `orderReference` | `?string` | Optional | The Bolt reference ID for a given order. This ID can be associated with many transaction references. | getOrderReference(): ?string | setOrderReference(?string orderReference): void |

## Example (as JSON)

```json
{
  "cart": null,
  "order_reference": null
}
```

