
# Transaction Credit

## Structure

`TransactionCredit`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionId` | `?string` | Optional | - | getTransactionId(): ?string | setTransactionId(?string transactionId): void |
| `transactionReference` | `?string` | Optional | The 12 digit reference ID associated to a given transaction webhook for an order.<br>**Constraints**: *Minimum Length*: `12`, *Maximum Length*: `12` | getTransactionReference(): ?string | setTransactionReference(?string transactionReference): void |
| `amount` | `int` | Required | - | getAmount(): int | setAmount(int amount): void |
| `currency` | `string` | Required | - | getCurrency(): string | setCurrency(string currency): void |
| `skipHookNotification` | `bool` | Required | Set to `true` to skip receiving a webhook notification from Bolt that is triggered by this update to the transaction. | getSkipHookNotification(): bool | setSkipHookNotification(bool skipHookNotification): void |

## Example (as JSON)

```json
{
  "amount": null,
  "currency": "USD",
  "skip_hook_notification": null
}
```

