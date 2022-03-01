
# Payment Method View

## Structure

`PaymentMethodView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The ID of the payment method associated with the Shopper's account. | getId(): ?string | setId(?string id): void |
| `type` | [`?string (TypeEnum)`](../../doc/models/type-enum.md) | Optional | Currently only `card` is supported; blank `type` properties default to `card` value. | getType(): ?string | setType(?string type): void |
| `last4` | `?string` | Optional | The last 4 digits of the credit card number.<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4` | getLast4(): ?string | setLast4(?string last4): void |
| `billingAddress` | [`?AddressView`](../../doc/models/address-view.md) | Optional | The address object returned in the response. | getBillingAddress(): ?AddressView | setBillingAddress(?AddressView billingAddress): void |

## Example (as JSON)

```json
{
  "id": null,
  "type": null,
  "last4": null,
  "billing_address": null
}
```

