
# Transaction Timeline View

## Structure

`TransactionTimelineView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `date` | `?float` | Optional | - | getDate(): ?float | setDate(?float date): void |
| `type` | [`?string (Type8Enum)`](../../doc/models/type-8-enum.md) | Optional | - | getType(): ?string | setType(?string type): void |
| `note` | `?string` | Optional | - | getNote(): ?string | setNote(?string note): void |
| `amount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getAmount(): ?AmountView | setAmount(?AmountView amount): void |
| `transaction` | [`?TransactionView`](../../doc/models/transaction-view.md) | Optional | - | getTransaction(): ?TransactionView | setTransaction(?TransactionView transaction): void |
| `consumer` | [`?ConsumerSummaryView`](../../doc/models/consumer-summary-view.md) | Optional | - | getConsumer(): ?ConsumerSummaryView | setConsumer(?ConsumerSummaryView consumer): void |
| `review` | [`?TransactionReviewView`](../../doc/models/transaction-review-view.md) | Optional | - | getReview(): ?TransactionReviewView | setReview(?TransactionReviewView review): void |
| `addressChange` | [`?AddressChangeView`](../../doc/models/address-change-view.md) | Optional | - | getAddressChange(): ?AddressChangeView | setAddressChange(?AddressChangeView addressChange): void |
| `visibility` | `?string` | Optional | - | getVisibility(): ?string | setVisibility(?string visibility): void |

## Example (as JSON)

```json
{
  "date": null,
  "type": null,
  "note": null,
  "amount": null,
  "transaction": null,
  "consumer": null,
  "review": null,
  "address_change": null,
  "visibility": null
}
```

