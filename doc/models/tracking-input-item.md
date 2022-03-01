
# Tracking Input Item

An item that is part of a trackable shipment.

## Structure

`TrackingInputItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reference` | `string` | Required | The item's ID; used by Easypost. | getReference(): string | setReference(string reference): void |
| `options` | [`TrackingInputItemOption[]`](../../doc/models/tracking-input-item-option.md) | Required | Used to map [Easypost shipment option objects](../../https://www.easypost.com/docs/api#options) to the Easypost API. | getOptions(): array | setOptions(array options): void |

## Example (as JSON)

```json
{
  "reference": null,
  "options": {
    "name": "hold_for_pickup",
    "value": "true"
  }
}
```

