
# User Identity

The object containing the account owner's first and last name.

## Structure

`UserIdentity`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | The given name of the person associated with this record. | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The surname of the person associated with this record. | getLastName(): ?string | setLastName(?string lastName): void |

## Example (as JSON)

```json
{
  "first_name": null,
  "last_name": null
}
```

