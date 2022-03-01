
# Consumer Self View

## Structure

`ConsumerSelfView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `firstName` | `?string` | Optional | The given name of the person associated with this record. | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The surname of the person associated with this record. | getLastName(): ?string | setLastName(?string lastName): void |
| `authentication` | [`?LoginView`](../../doc/models/login-view.md) | Optional | - | getAuthentication(): ?LoginView | setAuthentication(?LoginView authentication): void |
| `phones` | [`?(PhoneView[])`](../../doc/models/phone-view.md) | Optional | - | getPhones(): ?array | setPhones(?array phones): void |
| `emails` | [`?(EmailView[])`](../../doc/models/email-view.md) | Optional | - | getEmails(): ?array | setEmails(?array emails): void |
| `emailVerified` | `?bool` | Optional | - | getEmailVerified(): ?bool | setEmailVerified(?bool emailVerified): void |
| `hasHadAssociatedAddress` | `?bool` | Optional | - | getHasHadAssociatedAddress(): ?bool | setHasHadAssociatedAddress(?bool hasHadAssociatedAddress): void |
| `platformAccountStatus` | [`?string (PlatformAccountStatusEnum)`](../../doc/models/platform-account-status-enum.md) | Optional | - | getPlatformAccountStatus(): ?string | setPlatformAccountStatus(?string platformAccountStatus): void |

## Example (as JSON)

```json
{
  "id": null,
  "first_name": null,
  "last_name": null,
  "authentication": null,
  "phones": null,
  "emails": null,
  "email_verified": null,
  "has_had_associated_address": null,
  "platform_account_status": null
}
```

