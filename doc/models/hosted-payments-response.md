
# Hosted Payments Response

## Structure

`HostedPaymentsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `xAccountId` | `string` | Required | - | getXAccountId(): string | setXAccountId(string xAccountId): void |
| `xAmount` | `string` | Required | - | getXAmount(): string | setXAmount(string xAmount): void |
| `xCurrency` | `string` | Required | - | getXCurrency(): string | setXCurrency(string xCurrency): void |
| `xGatewayReference` | `string` | Required | - | getXGatewayReference(): string | setXGatewayReference(string xGatewayReference): void |
| `xMessage` | `?string` | Optional | - | getXMessage(): ?string | setXMessage(?string xMessage): void |
| `xReference` | `string` | Required | - | getXReference(): string | setXReference(string xReference): void |
| `xResult` | [`string (XResultEnum)`](../../doc/models/x-result-enum.md) | Required | - | getXResult(): string | setXResult(string xResult): void |
| `xSignature` | `string` | Required | - | getXSignature(): string | setXSignature(string xSignature): void |
| `xTest` | `string` | Required | - | getXTest(): string | setXTest(string xTest): void |
| `xTimestamp` | `string` | Required | - | getXTimestamp(): string | setXTimestamp(string xTimestamp): void |

## Example (as JSON)

```json
{
  "x_account_id": null,
  "x_amount": null,
  "x_currency": "USD",
  "x_gateway_reference": null,
  "x_reference": null,
  "x_result": null,
  "x_signature": null,
  "x_test": null,
  "x_timestamp": null
}
```

