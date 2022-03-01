
# User Identifier

The object containing key lookup IDs associated with the shopper's account, such as the unqiue email address and phone number.

## Structure

`UserIdentifier`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `email` | `?string` | Optional | The Shopper's email address that is used as a unique ID for the account. This email can be used to detect an account using the `/v1/account/exists` endpoint. | getEmail(): ?string | setEmail(?string email): void |
| `phone` | `?string` | Optional | The Shopper's email address that is used to help identify the account owner. This can be passed with the `UserIdentifier.email` to find and match accounts. | getPhone(): ?string | setPhone(?string phone): void |
| `emailId` | `?string` | Optional | The ID associated with the identifying email address for this account. | getEmailId(): ?string | setEmailId(?string emailId): void |
| `phoneId` | `?string` | Optional | The ID associated with the identifying phone number for this account. | getPhoneId(): ?string | setPhoneId(?string phoneId): void |
| `artifact` | `?string` | Optional | This field can be ignored. | getArtifact(): ?string | setArtifact(?string artifact): void |

## Example (as JSON)

```json
{
  "email": null,
  "phone": null,
  "email_id": null,
  "phone_id": null,
  "artifact": null
}
```

