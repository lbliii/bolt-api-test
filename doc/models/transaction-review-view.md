
# Transaction Review View

## Structure

`TransactionReviewView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `source` | `?string` | Optional | - | getSource(): ?string | setSource(?string source): void |
| `decision` | `?string` | Optional | - | getDecision(): ?string | setDecision(?string decision): void |
| `date` | `?int` | Optional | - | getDate(): ?int | setDate(?int date): void |
| `riskModelResult` | [`?RiskModelResultView`](../../doc/models/risk-model-result-view.md) | Optional | - | getRiskModelResult(): ?RiskModelResultView | setRiskModelResult(?RiskModelResultView riskModelResult): void |

## Example (as JSON)

```json
{
  "source": null,
  "decision": null,
  "date": null,
  "risk_model_result": null
}
```

