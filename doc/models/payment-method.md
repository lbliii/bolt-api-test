
# Payment Method

## Structure

`PaymentMethod`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentMethodProvider` | [`?string (PaymentMethodProviderEnum)`](../../doc/models/payment-method-provider-enum.md) | Optional | - | getPaymentMethodProvider(): ?string | setPaymentMethodProvider(?string paymentMethodProvider): void |
| `paymentMethodData` | [`?AllianceDataInfo`](../../doc/models/alliance-data-info.md) | Optional | - | getPaymentMethodData(): ?AllianceDataInfo | setPaymentMethodData(?AllianceDataInfo paymentMethodData): void |

## Example (as JSON)

```json
{
  "payment_method_provider": null,
  "payment_method_data": {
    "call_id": "call_id7"
  }
}
```

