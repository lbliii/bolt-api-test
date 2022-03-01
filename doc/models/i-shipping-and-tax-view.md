
# I Shipping and Tax View

## Structure

`IShippingAndTaxView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dynamicContent` | [`?IOrderDynamicContent`](../../doc/models/i-order-dynamic-content.md) | Optional | - | getDynamicContent(): ?IOrderDynamicContent | setDynamicContent(?IOrderDynamicContent dynamicContent): void |
| `inStorePickupOptions` | [`?(IStoreShipmentView[])`](../../doc/models/i-store-shipment-view.md) | Optional | - | getInStorePickupOptions(): ?array | setInStorePickupOptions(?array inStorePickupOptions): void |
| `shippingOptions` | [`?(ICartShipmentView[])`](../../doc/models/i-cart-shipment-view.md) | Optional | - | getShippingOptions(): ?array | setShippingOptions(?array shippingOptions): void |
| `shipToStoreOptions` | [`?(IStoreShipmentView[])`](../../doc/models/i-store-shipment-view.md) | Optional | - | getShipToStoreOptions(): ?array | setShipToStoreOptions(?array shipToStoreOptions): void |
| `subTotalTax` | [`?ITaxView`](../../doc/models/i-tax-view.md) | Optional | - | getSubTotalTax(): ?ITaxView | setSubTotalTax(?ITaxView subTotalTax): void |

## Example (as JSON)

```json
{
  "dynamic_content": null,
  "in_store_pickup_options": null,
  "shipping_options": null,
  "ship_to_store_options": null,
  "sub_total_tax": null
}
```

