
# Chargeback Details View

## Structure

`ChargebackDetailsView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reason` | `?string` | Optional | - | getReason(): ?string | setReason(?string reason): void |
| `reasonCode` | `?string` | Optional | - | getReasonCode(): ?string | setReasonCode(?string reasonCode): void |
| `chargebackAmt` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getChargebackAmt(): ?AmountView | setChargebackAmt(?AmountView chargebackAmt): void |
| `chargebackFee` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getChargebackFee(): ?AmountView | setChargebackFee(?AmountView chargebackFee): void |
| `netAmt` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getNetAmt(): ?AmountView | setNetAmt(?AmountView netAmt): void |
| `amtWon` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getAmtWon(): ?AmountView | setAmtWon(?AmountView amtWon): void |
| `representmentResult` | [`?string (RepresentmentResultEnum)`](../../doc/models/representment-result-enum.md) | Optional | - | getRepresentmentResult(): ?string | setRepresentmentResult(?string representmentResult): void |
| `representmentReplyByDate` | `?int` | Optional | The reply-by date of the dispute in UnixMillis format. | getRepresentmentReplyByDate(): ?int | setRepresentmentReplyByDate(?int representmentReplyByDate): void |
| `chargebackId` | `?string` | Optional | - | getChargebackId(): ?string | setChargebackId(?string chargebackId): void |
| `eventViews` | [`?(ChargebackEventView[])`](../../doc/models/chargeback-event-view.md) | Optional | - | getEventViews(): ?array | setEventViews(?array eventViews): void |

## Example (as JSON)

```json
{
  "reason": null,
  "reason_code": null,
  "chargeback_amt": null,
  "chargeback_fee": null,
  "net_amt": null,
  "amt_won": null,
  "representment_result": null,
  "representment_reply_by_date": null,
  "chargeback_id": null,
  "event_views": null
}
```

