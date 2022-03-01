
# Custom Field View

## Structure

`CustomFieldView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `externalId` | `?string` | Optional | - | getExternalId(): ?string | setExternalId(?string externalId): void |
| `publicId` | `?string` | Optional | - | getPublicId(): ?string | setPublicId(?string publicId): void |
| `label` | `?string` | Optional | - | getLabel(): ?string | setLabel(?string label): void |
| `checkoutStep` | [`?string (CheckoutStepEnum)`](../../doc/models/checkout-step-enum.md) | Optional | - | getCheckoutStep(): ?string | setCheckoutStep(?string checkoutStep): void |
| `fieldSetup` | `?string` | Optional | - | getFieldSetup(): ?string | setFieldSetup(?string fieldSetup): void |
| `position` | `?int` | Optional | - | getPosition(): ?int | setPosition(?int position): void |
| `required` | `?bool` | Optional | - | getRequired(): ?bool | setRequired(?bool required): void |
| `dynamic` | `?bool` | Optional | - | getDynamic(): ?bool | setDynamic(?bool dynamic): void |
| `subscribeToNewsletter` | `?bool` | Optional | - | getSubscribeToNewsletter(): ?bool | setSubscribeToNewsletter(?bool subscribeToNewsletter): void |

## Example (as JSON)

```json
{
  "external_id": null,
  "public_id": null,
  "label": null,
  "checkout_step": null,
  "field_setup": null,
  "position": null,
  "required": null,
  "dynamic": null,
  "subscribeToNewsletter": null
}
```

