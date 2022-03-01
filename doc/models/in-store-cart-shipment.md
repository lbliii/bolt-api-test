
# In Store Cart Shipment

## Structure

`InStoreCartShipment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cartShipment` | [`?CartShipment`](../../doc/models/cart-shipment.md) | Optional | - | getCartShipment(): ?CartShipment | setCartShipment(?CartShipment cartShipment): void |
| `inStorePickupAddress` | [`?Address`](../../doc/models/address.md) | Optional | The Address object is used for billing, shipping, and physical store address use cases. | getInStorePickupAddress(): ?Address | setInStorePickupAddress(?Address inStorePickupAddress): void |
| `distance` | `?float` | Optional | - | getDistance(): ?float | setDistance(?float distance): void |
| `distanceUnit` | [`?string (DistanceUnitEnum)`](../../doc/models/distance-unit-enum.md) | Optional | - | getDistanceUnit(): ?string | setDistanceUnit(?string distanceUnit): void |
| `storeName` | `?string` | Optional | The local store's name where the item can be picked up. | getStoreName(): ?string | setStoreName(?string storeName): void |
| `pickupWindowOpen` | `?int` | Optional | - | getPickupWindowOpen(): ?int | setPickupWindowOpen(?int pickupWindowOpen): void |
| `pickupWindowClose` | `?int` | Optional | - | getPickupWindowClose(): ?int | setPickupWindowClose(?int pickupWindowClose): void |

## Example (as JSON)

```json
{
  "cart_shipment": null,
  "in_store_pickup_address": null,
  "distance": null,
  "distance_unit": null,
  "store_name": null,
  "pickup_window_open": null,
  "pickup_window_close": null
}
```

