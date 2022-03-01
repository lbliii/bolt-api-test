
# Cart Shipment

## Structure

`CartShipment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `shippingAddressId` | `?string` | Optional | The unique Bolt ID associated with the shopper's shipping address. Shoppers can save many shipping addresses to their account.  Must be `null` if this address has never been saved to a Bolt account. | getShippingAddressId(): ?string | setShippingAddressId(?string shippingAddressId): void |
| `shippingAddress` | [`?Address`](../../doc/models/address.md) | Optional | The Address object is used for billing, shipping, and physical store address use cases. | getShippingAddress(): ?Address | setShippingAddress(?Address shippingAddress): void |
| `totalWeight` | `?int` | Optional | Used to define the total weight of the shipment and all of its items.<br>**Constraints**: `<= 10000` | getTotalWeight(): ?int | setTotalWeight(?int totalWeight): void |
| `totalWeightUnit` | `?string` | Optional | Used to define the unit used to measure the weight of the shipment.<br>**Constraints**: *Maximum Length*: `1024` | getTotalWeightUnit(): ?string | setTotalWeightUnit(?string totalWeightUnit): void |
| `shippingMethod` | [`?string (ShippingMethodEnum)`](../../doc/models/shipping-method-enum.md) | Optional | Used to determine how the shipment is delivered. | getShippingMethod(): ?string | setShippingMethod(?string shippingMethod): void |
| `carrier` | `?string` | Optional | Used to define the carrier delivering the shipment.<br>**Constraints**: *Maximum Length*: `1024` | getCarrier(): ?string | setCarrier(?string carrier): void |
| `reference` | `?string` | Optional | **Constraints**: *Maximum Length*: `1024` | getReference(): ?string | setReference(?string reference): void |
| `signature` | `?string` | Optional | **Constraints**: *Maximum Length*: `1024` | getSignature(): ?string | setSignature(?string signature): void |
| `service` | `?string` | Optional | **Constraints**: *Maximum Length*: `1024` | getService(): ?string | setService(?string service): void |
| `expedited` | `?bool` | Optional | - | getExpedited(): ?bool | setExpedited(?bool expedited): void |
| `cost` | `?int` | Optional | - | getCost(): ?int | setCost(?int cost): void |
| `taxAmount` | `?int` | Optional | The tax amount for the associated shipping method. | getTaxAmount(): ?int | setTaxAmount(?int taxAmount): void |
| `packageType` | `?string` | Optional | **Constraints**: *Maximum Length*: `1024` | getPackageType(): ?string | setPackageType(?string packageType): void |
| `packageWidth` | `?int` | Optional | **Constraints**: `<= 10000` | getPackageWidth(): ?int | setPackageWidth(?int packageWidth): void |
| `packageHeight` | `?int` | Optional | **Constraints**: `<= 10000` | getPackageHeight(): ?int | setPackageHeight(?int packageHeight): void |
| `packageDepth` | `?int` | Optional | **Constraints**: `<= 10000` | getPackageDepth(): ?int | setPackageDepth(?int packageDepth): void |
| `packageDimensionUnit` | `?string` | Optional | **Constraints**: *Maximum Length*: `1024` | getPackageDimensionUnit(): ?string | setPackageDimensionUnit(?string packageDimensionUnit): void |
| `packageWeight` | `?int` | Optional | **Constraints**: `<= 10000` | getPackageWeight(): ?int | setPackageWeight(?int packageWeight): void |
| `packageWeightUnit` | `?string` | Optional | Used to define the unit of measure for the shipment's weight.<br>**Constraints**: *Maximum Length*: `1024` | getPackageWeightUnit(): ?string | setPackageWeightUnit(?string packageWeightUnit): void |
| `taxCode` | `?string` | Optional | **Constraints**: *Maximum Length*: `32` | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `estimatedDeliveryDate` | `?\DateTime` | Optional | - | getEstimatedDeliveryDate(): ?\DateTime | setEstimatedDeliveryDate(?\DateTime estimatedDeliveryDate): void |
| `type` | [`?string (Type4Enum)`](../../doc/models/type-4-enum.md) | Optional | **Constraints**: *Maximum Length*: `1024` | getType(): ?string | setType(?string type): void |
| `discountedByMembership` | `?bool` | Optional | - | getDiscountedByMembership(): ?bool | setDiscountedByMembership(?bool discountedByMembership): void |

## Example (as JSON)

```json
{
  "shipping_address_id": null,
  "shipping_address": null,
  "total_weight": null,
  "total_weight_unit": null,
  "shipping_method": null,
  "carrier": null,
  "reference": null,
  "signature": null,
  "service": null,
  "expedited": null,
  "cost": null,
  "tax_amount": null,
  "package_type": null,
  "package_width": null,
  "package_height": null,
  "package_depth": null,
  "package_dimension_unit": null,
  "package_weight": null,
  "package_weight_unit": null,
  "tax_code": null,
  "estimated_delivery_date": null,
  "type": null,
  "discounted_by_membership": null
}
```

