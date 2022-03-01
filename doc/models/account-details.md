
# Account Details

## Structure

`AccountDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `profile` | [`?ProfileView`](../../doc/models/profile-view.md) | Optional | The shopper's account profile. | getProfile(): ?ProfileView | setProfile(?ProfileView profile): void |
| `addresses` | [`?(AddressView[])`](../../doc/models/address-view.md) | Optional | A list of all addresses associated to the shopper's account. | getAddresses(): ?array | setAddresses(?array addresses): void |
| `paymentMethods` | [`?(PaymentMethodView[])`](../../doc/models/payment-method-view.md) | Optional | A list of all payment methods associated to the shopper's account. | getPaymentMethods(): ?array | setPaymentMethods(?array paymentMethods): void |
| `hasBoltAccount` | `?bool` | Optional | Used to determine whether an existing Bolt account exists with this shopper's account details. | getHasBoltAccount(): ?bool | setHasBoltAccount(?bool hasBoltAccount): void |

## Example (as JSON)

```json
{
  "profile": null,
  "addresses": null,
  "payment_methods": null,
  "has_bolt_account": null
}
```

