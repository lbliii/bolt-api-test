
# I Delivery Options

## Structure

`IDeliveryOptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `inStorePickupOptions` | [`?(IStoreShipmentView[])`](../../doc/models/i-store-shipment-view.md) | Optional | - | getInStorePickupOptions(): ?array | setInStorePickupOptions(?array inStorePickupOptions): void |
| `shippingOptions` | [`?(ICartShipmentView[])`](../../doc/models/i-cart-shipment-view.md) | Optional | - | getShippingOptions(): ?array | setShippingOptions(?array shippingOptions): void |
| `shipToStoreOptions` | [`?(IStoreShipmentView[])`](../../doc/models/i-store-shipment-view.md) | Optional | - | getShipToStoreOptions(): ?array | setShipToStoreOptions(?array shipToStoreOptions): void |
| `dynamicContent` | [`?IOrderDynamicContent`](../../doc/models/i-order-dynamic-content.md) | Optional | - | getDynamicContent(): ?IOrderDynamicContent | setDynamicContent(?IOrderDynamicContent dynamicContent): void |

## Example (as JSON)

```json
{
  "inStorePickupOptions": null,
  "shippingOptions": null,
  "shipToStoreOptions": null,
  "dynamicContent": null
}
```

