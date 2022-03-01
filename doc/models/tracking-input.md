
# Tracking Input

## Structure

`TrackingInput`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionReference` | `string` | Required | The 12 digit reference ID associated to a given transaction webhook for an order.<br>**Constraints**: *Minimum Length*: `12`, *Maximum Length*: `12` | getTransactionReference(): string | setTransactionReference(string transactionReference): void |
| `items` | [`TrackingInputItem[]`](../../doc/models/tracking-input-item.md) | Required | - | getItems(): array | setItems(array items): void |
| `trackingNumber` | `string` | Required | Used as the Easypost `tracking_code`. | getTrackingNumber(): string | setTrackingNumber(string trackingNumber): void |
| `carrier` | `string` | Required | The carrier used to deliver the shipment.<br>**Constraints**: *Maximum Length*: `1024` | getCarrier(): string | setCarrier(string carrier): void |
| `isNonBoltOrder` | `bool` | Required | Used to determine whether the order is a Bolt order or non-Bolt order. | getIsNonBoltOrder(): bool | setIsNonBoltOrder(bool isNonBoltOrder): void |

## Example (as JSON)

```json
{
  "transaction_reference": null,
  "items": {
    "reference": null,
    "options": {
      "name": "hold_for_pickup",
      "value": "true"
    }
  },
  "tracking_number": "EZ2000000002",
  "carrier": "USPS",
  "is_non_bolt_order": false
}
```

