
# Merchant Credit Card Review

## Structure

`MerchantCreditCardReview`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionId` | `?string` | Optional | - | getTransactionId(): ?string | setTransactionId(?string transactionId): void |
| `transactionReference` | `?string` | Optional | The 12 digit reference ID associated to a given transaction webhook for an order.<br>**Constraints**: *Minimum Length*: `12`, *Maximum Length*: `12` | getTransactionReference(): ?string | setTransactionReference(?string transactionReference): void |
| `decision` | [`string (DecisionEnum)`](../../doc/models/decision-enum.md) | Required | - | getDecision(): string | setDecision(string decision): void |

## Example (as JSON)

```json
{
  "transaction_id": null,
  "transaction_reference": null,
  "decision": "approve"
}
```

