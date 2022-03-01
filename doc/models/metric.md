
# Metric

## Structure

`Metric`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `value` | `?int` | Optional | - | getValue(): ?int | setValue(?int value): void |
| `metricType` | `?string` | Optional | - | getMetricType(): ?string | setMetricType(?string metricType): void |
| `timestamp` | `?int` | Optional | - | getTimestamp(): ?int | setTimestamp(?int timestamp): void |
| `tags` | `?array<string,string>` | Optional | - | getTags(): ?array | setTags(?array tags): void |

## Example (as JSON)

```json
{
  "value": null,
  "metric_type": null,
  "timestamp": null,
  "tags": null
}
```

