
# Cart View

This is the cart object returned in a successful response.

## Structure

`CartView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `orderDescription` | `?string` | Optional | Used optionally to pass additional information like order numbers or other IDs as needed.<br>**Constraints**: *Maximum Length*: `1024` | getOrderDescription(): ?string | setOrderDescription(?string orderDescription): void |
| `orderReference` | `?string` | Optional | The Bolt reference ID for a given order. This ID can be associated with many transaction references. | getOrderReference(): ?string | setOrderReference(?string orderReference): void |
| `displayId` | `?string` | Optional | - | getDisplayId(): ?string | setDisplayId(?string displayId): void |
| `transactionReference` | `?string` | Optional | The 12 digit reference ID associated to a given transaction webhook for an order.<br>**Constraints**: *Minimum Length*: `12`, *Maximum Length*: `12` | getTransactionReference(): ?string | setTransactionReference(?string transactionReference): void |
| `cartUrl` | `?string` | Optional | Used to provide a link to the cart ID.<br>**Constraints**: *Maximum Length*: `8192` | getCartUrl(): ?string | setCartUrl(?string cartUrl): void |
| `merchantOrderUrl` | `?string` | Optional | - | getMerchantOrderUrl(): ?string | setMerchantOrderUrl(?string merchantOrderUrl): void |
| `currency` | [`?ICurrency`](../../doc/models/i-currency.md) | Optional | - | getCurrency(): ?ICurrency | setCurrency(?ICurrency currency): void |
| `subtotalAmount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getSubtotalAmount(): ?AmountView | setSubtotalAmount(?AmountView subtotalAmount): void |
| `totalAmount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getTotalAmount(): ?AmountView | setTotalAmount(?AmountView totalAmount): void |
| `taxAmount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getTaxAmount(): ?AmountView | setTaxAmount(?AmountView taxAmount): void |
| `shippingAmount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getShippingAmount(): ?AmountView | setShippingAmount(?AmountView shippingAmount): void |
| `discountAmount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getDiscountAmount(): ?AmountView | setDiscountAmount(?AmountView discountAmount): void |
| `billingAddress` | [`?AddressView`](../../doc/models/address-view.md) | Optional | The address object returned in the response. | getBillingAddress(): ?AddressView | setBillingAddress(?AddressView billingAddress): void |
| `items` | [`?(ICartItemView[])`](../../doc/models/i-cart-item-view.md) | Optional | - | getItems(): ?array | setItems(?array items): void |
| `pickups` | [`?(IStoreShipmentView[])`](../../doc/models/i-store-shipment-view.md) | Optional | - | getPickups(): ?array | setPickups(?array pickups): void |
| `shipments` | [`?(ICartShipmentView[])`](../../doc/models/i-cart-shipment-view.md) | Optional | - | getShipments(): ?array | setShipments(?array shipments): void |
| `discounts` | [`?(ICartDiscountView[])`](../../doc/models/i-cart-discount-view.md) | Optional | - | getDiscounts(): ?array | setDiscounts(?array discounts): void |
| `customizations` | [`?(CartItemCustomization[])`](../../doc/models/cart-item-customization.md) | Optional | - | getCustomizations(): ?array | setCustomizations(?array customizations): void |
| `deliveryOptions` | [`?IDeliveryOptions`](../../doc/models/i-delivery-options.md) | Optional | - | getDeliveryOptions(): ?IDeliveryOptions | setDeliveryOptions(?IDeliveryOptions deliveryOptions): void |
| `msrp` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getMsrp(): ?AmountView | setMsrp(?AmountView msrp): void |

## Example (as JSON)

```json
{
  "order_description": null,
  "order_reference": null,
  "display_id": null,
  "transaction_reference": null,
  "cart_url": null,
  "merchant_order_url": null,
  "currency": null,
  "subtotal_amount": null,
  "total_amount": null,
  "tax_amount": null,
  "shipping_amount": null,
  "discount_amount": null,
  "billing_address": null,
  "items": null,
  "pickups": null,
  "shipments": null,
  "discounts": null,
  "customizations": null,
  "delivery_options": null,
  "msrp": null
}
```

