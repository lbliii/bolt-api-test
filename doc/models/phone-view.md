
# Phone View

## Structure

`PhoneView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `number` | `?string` | Optional | - | getNumber(): ?string | setNumber(?string number): void |
| `countryCode` | `?string` | Optional | Used for the 2-digit ISO 3166-1 alpha 2 country code associated with this address. | getCountryCode(): ?string | setCountryCode(?string countryCode): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `priority` | [`?string (PriorityEnum)`](../../doc/models/priority-enum.md) | Optional | - | getPriority(): ?string | setPriority(?string priority): void |

## Example (as JSON)

```json
{
  "id": null,
  "number": null,
  "country_code": null,
  "status": null,
  "priority": null
}
```

