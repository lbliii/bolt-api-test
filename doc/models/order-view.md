
# Order View

## Structure

`OrderView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | - | getToken(): ?string | setToken(?string token): void |
| `cart` | [`?CartView`](../../doc/models/cart-view.md) | Optional | This is the cart object returned in a successful response. | getCart(): ?CartView | setCart(?CartView cart): void |
| `externalData` | [`?OrderExternalDataView`](../../doc/models/order-external-data-view.md) | Optional | - | getExternalData(): ?OrderExternalDataView | setExternalData(?OrderExternalDataView externalData): void |
| `userNote` | `?string` | Optional | Used by shoppers to make extra requests or provide details for gift messages. | getUserNote(): ?string | setUserNote(?string userNote): void |
| `dynamicContent` | [`?IOrderDynamicContent`](../../doc/models/i-order-dynamic-content.md) | Optional | - | getDynamicContent(): ?IOrderDynamicContent | setDynamicContent(?IOrderDynamicContent dynamicContent): void |

## Example (as JSON)

```json
{
  "token": null,
  "cart": null,
  "external_data": null,
  "user_note": null,
  "dynamic_content": null
}
```

