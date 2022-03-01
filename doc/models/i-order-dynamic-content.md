
# I Order Dynamic Content

## Structure

`IOrderDynamicContent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `shippingInfoNotice` | `?string` | Optional | - | getShippingInfoNotice(): ?string | setShippingInfoNotice(?string shippingInfoNotice): void |
| `orderNotice` | `?string` | Optional | - | getOrderNotice(): ?string | setOrderNotice(?string orderNotice): void |
| `paymentNotice` | `?string` | Optional | - | getPaymentNotice(): ?string | setPaymentNotice(?string paymentNotice): void |
| `shippingNotice` | `?string` | Optional | - | getShippingNotice(): ?string | setShippingNotice(?string shippingNotice): void |
| `customFields` | [`?(CustomFieldView[])`](../../doc/models/custom-field-view.md) | Optional | - | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `hideApm` | [`?(string[]) (HideApmEnum)`](../../doc/models/hide-apm-enum.md) | Optional | - | getHideApm(): ?array | setHideApm(?array hideApm): void |
| `giftOptionView` | [`?IGiftOptionView`](../../doc/models/i-gift-option-view.md) | Optional | - | getGiftOptionView(): ?IGiftOptionView | setGiftOptionView(?IGiftOptionView giftOptionView): void |

## Example (as JSON)

```json
{
  "shipping_info_notice": null,
  "order_notice": null,
  "payment_notice": null,
  "shipping_notice": null,
  "custom_fields": null,
  "hide_apm": null,
  "gift_option_view": null
}
```

