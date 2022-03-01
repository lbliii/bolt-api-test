
# I Product

## Structure

`IProduct`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `boltID` | `?string` | Optional | - | getBoltID(): ?string | setBoltID(?string boltID): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `availability` | [`?string (AvailabilityEnum)`](../../doc/models/availability-enum.md) | Optional | - | getAvailability(): ?string | setAvailability(?string availability): void |
| `availabilityCount` | `?int` | Optional | - | getAvailabilityCount(): ?int | setAvailabilityCount(?int availabilityCount): void |
| `prices` | [`?(Price[])`](../../doc/models/price.md) | Optional | - | getPrices(): ?array | setPrices(?array prices): void |
| `multimedia` | [`?Multimedia`](../../doc/models/multimedia.md) | Optional | - | getMultimedia(): ?Multimedia | setMultimedia(?Multimedia multimedia): void |

## Example (as JSON)

```json
{
  "BoltID": null,
  "Name": null,
  "Description": null,
  "Availability": null,
  "AvailabilityCount": null,
  "Prices": null,
  "Multimedia": null
}
```

