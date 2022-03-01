
# Credit Card Refund

## Structure

`CreditCardRefund`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `date` | `?int` | Optional | - | getDate(): ?int | setDate(?int date): void |
| `reference` | `?string` | Optional | - | getReference(): ?string | setReference(?string reference): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `toCreditCard` | [`?CreditCardView`](../../doc/models/credit-card-view.md) | Optional | The CreditCard object is used to to pay for guest-checkout transactions and save payment method details to an account. Once saved, you can reference the associated `credit_card_id` for future transactions. | getToCreditCard(): ?CreditCardView | setToCreditCard(?CreditCardView toCreditCard): void |
| `amount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getAmount(): ?AmountView | setAmount(?AmountView amount): void |
| `credit` | [`?CreditCardCreditView`](../../doc/models/credit-card-credit-view.md) | Optional | - | getCredit(): ?CreditCardCreditView | setCredit(?CreditCardCreditView credit): void |
| `splits` | [`?(TransactionSplitsView[])`](../../doc/models/transaction-splits-view.md) | Optional | - | getSplits(): ?array | setSplits(?array splits): void |

## Example (as JSON)

```json
{
  "id": null,
  "type": null,
  "date": null,
  "reference": null,
  "status": null,
  "to_credit_card": null,
  "amount": null,
  "credit": null,
  "splits": null
}
```

