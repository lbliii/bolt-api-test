
# I Tax View

## Structure

`ITaxView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `rate` | `?int` | Optional | - | getRate(): ?int | setRate(?int rate): void |
| `amount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getAmount(): ?AmountView | setAmount(?AmountView amount): void |
| `items` | [`?(ITaxItemView[])`](../../doc/models/i-tax-item-view.md) | Optional | - | getItems(): ?array | setItems(?array items): void |

## Example (as JSON)

```json
{
  "rate": null,
  "amount": null,
  "items": null
}
```

