
# Capture Transaction

## Structure

`CaptureTransaction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionId` | `string` | Required | - | getTransactionId(): string | setTransactionId(string transactionId): void |
| `transactionReference` | `?string` | Optional | The 12 digit reference ID associated to a given transaction webhook for an order.<br>**Constraints**: *Minimum Length*: `12`, *Maximum Length*: `12` | getTransactionReference(): ?string | setTransactionReference(?string transactionReference): void |
| `amount` | `int` | Required | - | getAmount(): int | setAmount(int amount): void |
| `currency` | `string` | Required | - | getCurrency(): string | setCurrency(string currency): void |
| `skipHookNotification` | `?bool` | Optional | Set to `true` to skip receiving a webhook notification from Bolt that is triggered by this update to the transaction. | getSkipHookNotification(): ?bool | setSkipHookNotification(?bool skipHookNotification): void |

## Example (as JSON)

```json
{
  "transaction_id": "TA8hLkJh4db4J",
  "amount": 31934,
  "currency": "USD"
}
```

