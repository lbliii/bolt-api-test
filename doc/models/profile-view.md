
# Profile View

The shopper's account profile.

## Structure

`ProfileView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The given and surname of the person associated with this address. | getName(): ?string | setName(?string name): void |
| `firstName` | `?string` | Optional | The given name of the person associated with this record. | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The surname of the person associated with this record. | getLastName(): ?string | setLastName(?string lastName): void |
| `email` | `?string` | Optional | - | getEmail(): ?string | setEmail(?string email): void |
| `phone` | `?string` | Optional | - | getPhone(): ?string | setPhone(?string phone): void |

## Example (as JSON)

```json
{
  "name": null,
  "first_name": null,
  "last_name": null,
  "email": null,
  "phone": null
}
```

