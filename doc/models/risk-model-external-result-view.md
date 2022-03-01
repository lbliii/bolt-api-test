
# Risk Model External Result View

## Structure

`RiskModelExternalResultView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `available` | `?bool` | Optional | - | getAvailable(): ?bool | setAvailable(?bool available): void |
| `fraudProbability` | `?int` | Optional | - | getFraudProbability(): ?int | setFraudProbability(?int fraudProbability): void |
| `decisionFactors` | `?(string[])` | Optional | Used to list a total of up to 5 decision factors used by the risk model to determine the risk analysis result. | getDecisionFactors(): ?array | setDecisionFactors(?array decisionFactors): void |
| `paymentInstrumentFactors` | `?array<string,string>` | Optional | - | getPaymentInstrumentFactors(): ?array | setPaymentInstrumentFactors(?array paymentInstrumentFactors): void |

## Example (as JSON)

```json
{
  "available": null,
  "fraud_probability": null,
  "decision_factors": null,
  "payment_instrument_factors": null
}
```

