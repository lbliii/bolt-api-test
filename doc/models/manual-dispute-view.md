
# Manual Dispute View

## Structure

`ManualDisputeView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?int` | Optional | - | getAmount(): ?int | setAmount(?int amount): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `reason` | `?string` | Optional | - | getReason(): ?string | setReason(?string reason): void |
| `disputeEvidence` | `?string` | Optional | - | getDisputeEvidence(): ?string | setDisputeEvidence(?string disputeEvidence): void |
| `disputeLink` | `?string` | Optional | - | getDisputeLink(): ?string | setDisputeLink(?string disputeLink): void |
| `deliveryEvidence` | `?string` | Optional | - | getDeliveryEvidence(): ?string | setDeliveryEvidence(?string deliveryEvidence): void |
| `deliveryLink` | `?string` | Optional | - | getDeliveryLink(): ?string | setDeliveryLink(?string deliveryLink): void |
| `otherEvidence` | `?(string[])` | Optional | - | getOtherEvidence(): ?array | setOtherEvidence(?array otherEvidence): void |
| `otherLink` | `?(string[])` | Optional | - | getOtherLink(): ?array | setOtherLink(?array otherLink): void |
| `status` | [`?string (Status3Enum)`](../../doc/models/status-3-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "amount": null,
  "currency": null,
  "reason": null,
  "dispute_evidence": null,
  "dispute_link": null,
  "delivery_evidence": null,
  "delivery_link": null,
  "other_evidence": null,
  "other_link": null,
  "status": null
}
```

