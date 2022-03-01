
# I Cart Shipment View

## Structure

`ICartShipmentView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `estimatedDeliveryDate` | `?\DateTime` | Optional | - | getEstimatedDeliveryDate(): ?\DateTime | setEstimatedDeliveryDate(?\DateTime estimatedDeliveryDate): void |
| `carrier` | `?string` | Optional | The carrier used to deliver the shipment.<br>**Constraints**: *Maximum Length*: `1024` | getCarrier(): ?string | setCarrier(?string carrier): void |
| `cost` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getCost(): ?AmountView | setCost(?AmountView cost): void |
| `mDefault` | `?bool` | Optional | - | getMDefault(): ?bool | setMDefault(?bool mDefault): void |
| `expedited` | `?bool` | Optional | Used to determine whether a shipment has been expedited or not. | getExpedited(): ?bool | setExpedited(?bool expedited): void |
| `packageDimension` | [`?PackageDimension`](../../doc/models/package-dimension.md) | Optional | - | getPackageDimension(): ?PackageDimension | setPackageDimension(?PackageDimension packageDimension): void |
| `packageType` | `?string` | Optional | - | getPackageType(): ?string | setPackageType(?string packageType): void |
| `packageWeight` | [`?IWeight`](../../doc/models/i-weight.md) | Optional | - | getPackageWeight(): ?IWeight | setPackageWeight(?IWeight packageWeight): void |
| `reference` | `?string` | Optional | - | getReference(): ?string | setReference(?string reference): void |
| `shippingAddress` | [`?AddressView`](../../doc/models/address-view.md) | Optional | The address object returned in the response. | getShippingAddress(): ?AddressView | setShippingAddress(?AddressView shippingAddress): void |
| `shippingMethod` | `?string` | Optional | - | getShippingMethod(): ?string | setShippingMethod(?string shippingMethod): void |
| `signature` | `?string` | Optional | - | getSignature(): ?string | setSignature(?string signature): void |
| `taxAmount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getTaxAmount(): ?AmountView | setTaxAmount(?AmountView taxAmount): void |
| `totalWeight` | [`?IWeight`](../../doc/models/i-weight.md) | Optional | - | getTotalWeight(): ?IWeight | setTotalWeight(?IWeight totalWeight): void |
| `index` | `?int` | Optional | - | getIndex(): ?int | setIndex(?int index): void |
| `isStaticShippingOption` | `?bool` | Optional | - | getIsStaticShippingOption(): ?bool | setIsStaticShippingOption(?bool isStaticShippingOption): void |
| `discountedByMembership` | `?bool` | Optional | - | getDiscountedByMembership(): ?bool | setDiscountedByMembership(?bool discountedByMembership): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `description` | [`?(IDescriptionPart[])`](../../doc/models/i-description-part.md) | Optional | - | getDescription(): ?array | setDescription(?array description): void |
| `descriptionTooltips` | [`?(IDescriptionTooltip[])`](../../doc/models/i-description-tooltip.md) | Optional | - | getDescriptionTooltips(): ?array | setDescriptionTooltips(?array descriptionTooltips): void |

## Example (as JSON)

```json
{
  "estimated_delivery_date": null,
  "carrier": null,
  "cost": null,
  "default": null,
  "expedited": null,
  "package_dimension": null,
  "package_type": null,
  "package_weight": null,
  "reference": null,
  "shipping_address": null,
  "shipping_method": null,
  "signature": null,
  "tax_amount": null,
  "total_weight": null,
  "index": null,
  "is_static_shipping_option": null,
  "discounted_by_membership": null,
  "type": null,
  "description": null,
  "description_tooltips": null
}
```

