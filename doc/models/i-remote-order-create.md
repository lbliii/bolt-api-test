
# I Remote Order Create

## Structure

`IRemoteOrderCreate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `merchantDivisionId` | `?string` | Optional | The unique ID associated to the merchant's Bolt Account division; Merchants can have different divisions to suit multiple use cases (storefronts, pay-by-link, phone order processing). You can view and switch between these divisions from the Bolt Merchant Dashboard. | getMerchantDivisionId(): ?string | setMerchantDivisionId(?string merchantDivisionId): void |
| `cart` | [`?Cart3`](../../doc/models/cart-3.md) | Optional | - | getCart(): ?Cart3 | setCart(?Cart3 cart): void |

## Example (as JSON)

```json
{
  "merchant_division_id": null,
  "cart": null
}
```

