
# Credit Card

The CreditCard object is used to to pay for guest-checkout transactions and save payment method details to an account. Once saved, you can reference the associated `credit_card_id` for future transactions.

## Structure

`CreditCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `string` | Required | The Bolt token associated to the credit card. | getToken(): string | setToken(string token): void |
| `last4` | `string` | Required | The last 4 digits of the credit card number.<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4` | getLast4(): string | setLast4(string last4): void |
| `bin` | `string` | Required | The Bank Identification Number for the credit card; this is typically the first 4-6 digits of the credit card number.<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `6` | getBin(): string | setBin(string bin): void |
| `number` | `string` | Required | Used to provide ApplePay DPAN or private label credit card PAN when applicable. | getNumber(): string | setNumber(string number): void |
| `expiration` | `string` | Required | The expiration date of the credit card. | getExpiration(): string | setExpiration(string expiration): void |
| `postalCode` | `string` | Required | Used for the postal or zip code associated with the credit card.<br>**Constraints**: *Maximum Length*: `32` | getPostalCode(): string | setPostalCode(string postalCode): void |
| `billingAddressId` | `?string` | Optional | The unique Bolt ID associated with the billing address. | getBillingAddressId(): ?string | setBillingAddressId(?string billingAddressId): void |
| `billingAddress` | [`?Address`](../../doc/models/address.md) | Optional | The Address object is used for billing, shipping, and physical store address use cases. | getBillingAddress(): ?Address | setBillingAddress(?Address billingAddress): void |
| `save` | `?bool` | Optional | Used to determine whether the address is used once or saved to the shopper's account address book; defaults to `true` if not provided. | getSave(): ?bool | setSave(?bool save): void |
| `tokenType` | [`?string (TokenTypeEnum)`](../../doc/models/token-type-enum.md) | Optional | Used to define which payment processor generated the token for this credit card. | getTokenType(): ?string | setTokenType(?string tokenType): void |
| `network` | `?string` | Optional | - | getNetwork(): ?string | setNetwork(?string network): void |
| `cryptogram` | `?string` | Optional | - | getCryptogram(): ?string | setCryptogram(?string cryptogram): void |
| `eci` | `?string` | Optional | - | getEci(): ?string | setEci(?string eci): void |

## Example (as JSON)

```json
{
  "token": "a1B2c3D4e5F6G7H8i9J0k1L2m3N4o5P6Q7r8S9t0",
  "last4": "1234",
  "bin": null,
  "number": null,
  "expiration": "12/12/2024",
  "postal_code": "10044"
}
```

