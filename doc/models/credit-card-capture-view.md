
# Credit Card Capture View

## Structure

`CreditCardCaptureView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `amount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getAmount(): ?AmountView | setAmount(?AmountView amount): void |
| `splits` | [`?TransactionSplitsView`](../../doc/models/transaction-splits-view.md) | Optional | - | getSplits(): ?TransactionSplitsView | setSplits(?TransactionSplitsView splits): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |

## Example (as JSON)

```json
{
  "id": null,
  "status": null,
  "amount": null,
  "splits": null,
  "metadata": null
}
```

