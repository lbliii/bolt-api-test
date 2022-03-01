
# Credit Card View

The CreditCard object is used to to pay for guest-checkout transactions and save payment method details to an account. Once saved, you can reference the associated `credit_card_id` for future transactions.

## Structure

`CreditCardView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `last4` | `?string` | Optional | The last 4 digits of the credit card number.<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4` | getLast4(): ?string | setLast4(?string last4): void |
| `bin` | `?string` | Optional | The Bank Identification Number for the credit card; this is typically the first 4-6 digits of the credit card number.<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `6` | getBin(): ?string | setBin(?string bin): void |
| `expiration` | `?int` | Optional | The expiration date of the credit card. | getExpiration(): ?int | setExpiration(?int expiration): void |
| `network` | [`?string (NetworkEnum)`](../../doc/models/network-enum.md) | Optional | - | getNetwork(): ?string | setNetwork(?string network): void |
| `tokenType` | [`?string (TokenTypeEnum)`](../../doc/models/token-type-enum.md) | Optional | Used to define which payment processor generated the token for this credit card. | getTokenType(): ?string | setTokenType(?string tokenType): void |
| `priority` | `?string` | Optional | - | getPriority(): ?string | setPriority(?string priority): void |
| `displayNetwork` | `?string` | Optional | - | getDisplayNetwork(): ?string | setDisplayNetwork(?string displayNetwork): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `billingAddress` | [`?AddressView`](../../doc/models/address-view.md) | Optional | The address object returned in the response. | getBillingAddress(): ?AddressView | setBillingAddress(?AddressView billingAddress): void |

## Example (as JSON)

```json
{
  "id": null,
  "last4": null,
  "bin": null,
  "expiration": null,
  "network": null,
  "token_type": null,
  "priority": null,
  "display_network": null,
  "status": null,
  "billing_address": null
}
```

