
# Tracking Input Item Option

## Structure

`TrackingInputItemOption`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Used to map an input option to the Easypost API. | getName(): string | setName(string name): void |
| `value` | `string` | Required | Used to define the Easypost option's value. | getValue(): string | setValue(string value): void |

## Example (as JSON)

```json
{
  "name": "hold_for_pickup",
  "value": "true"
}
```

