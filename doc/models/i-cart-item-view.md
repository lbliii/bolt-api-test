
# I Cart Item View

## Structure

`ICartItemView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reference` | `?string` | Optional | - | getReference(): ?string | setReference(?string reference): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `options` | `?string` | Optional | - | getOptions(): ?string | setOptions(?string options): void |
| `totalAmount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getTotalAmount(): ?AmountView | setTotalAmount(?AmountView totalAmount): void |
| `unitPrice` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getUnitPrice(): ?AmountView | setUnitPrice(?AmountView unitPrice): void |
| `taxAmount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getTaxAmount(): ?AmountView | setTaxAmount(?AmountView taxAmount): void |
| `quantity` | `?int` | Optional | - | getQuantity(): ?int | setQuantity(?int quantity): void |
| `uom` | `?string` | Optional | Used to define the unit of measure used to describe the product.<br>**Constraints**: *Maximum Length*: `1024` | getUom(): ?string | setUom(?string uom): void |
| `upc` | `?string` | Optional | Used to define the 12-digit Universal Product Code (a barcode) associated with the item worldwide.<br>**Constraints**: *Maximum Length*: `1024` | getUpc(): ?string | setUpc(?string upc): void |
| `sku` | `?string` | Optional | Used to define an alpha-numberic Stock Keeping Unit associated with the item as it is mapped to your internal product catalogue.<br>**Constraints**: *Maximum Length*: `1024` | getSku(): ?string | setSku(?string sku): void |
| `isbn` | `?string` | Optional | Used to define the International Standard Book Number associated with the book.<br>**Constraints**: *Maximum Length*: `1024` | getIsbn(): ?string | setIsbn(?string isbn): void |
| `brand` | `?string` | Optional | - | getBrand(): ?string | setBrand(?string brand): void |
| `manufacturer` | `?string` | Optional | Used to define the organization that manufactured the item.<br>**Constraints**: *Maximum Length*: `1024` | getManufacturer(): ?string | setManufacturer(?string manufacturer): void |
| `category` | `?string` | Optional | Used to define a product category associated with the item.<br>**Constraints**: *Maximum Length*: `1024` | getCategory(): ?string | setCategory(?string category): void |
| `collections` | `?(string[])` | Optional | - | getCollections(): ?array | setCollections(?array collections): void |
| `properties` | [`?(CartItemProperty[])`](../../doc/models/cart-item-property.md) | Optional | - | getProperties(): ?array | setProperties(?array properties): void |
| `tags` | `?string` | Optional | Used to define a comma-separated list of tags associated with the item. | getTags(): ?string | setTags(?string tags): void |
| `color` | `?string` | Optional | Used to define the color of the item. | getColor(): ?string | setColor(?string color): void |
| `size` | `?string` | Optional | Used to define the size of the item. | getSize(): ?string | setSize(?string size): void |
| `weight` | [`?IWeight`](../../doc/models/i-weight.md) | Optional | - | getWeight(): ?IWeight | setWeight(?IWeight weight): void |
| `imageUrl` | `?string` | Optional | Used to provide a link to the image associated with the item. | getImageUrl(): ?string | setImageUrl(?string imageUrl): void |
| `detailsUrl` | `?string` | Optional | Used to provide a link to the item's product page. | getDetailsUrl(): ?string | setDetailsUrl(?string detailsUrl): void |
| `type` | [`?string (Type2Enum)`](../../doc/models/type-2-enum.md) | Optional | - | getType(): ?string | setType(?string type): void |
| `shopifyProductReference` | `?float` | Optional | - | getShopifyProductReference(): ?float | setShopifyProductReference(?float shopifyProductReference): void |
| `shopifyProductVariantReference` | `?int` | Optional | - | getShopifyProductVariantReference(): ?int | setShopifyProductVariantReference(?int shopifyProductVariantReference): void |
| `taxable` | `?bool` | Optional | - | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `taxCode` | `?string` | Optional | - | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `itemGroup` | `?string` | Optional | - | getItemGroup(): ?string | setItemGroup(?string itemGroup): void |
| `source` | [`?string (SourceEnum)`](../../doc/models/source-enum.md) | Optional | - | getSource(): ?string | setSource(?string source): void |
| `shipmentType` | [`?string (ShipmentTypeEnum)`](../../doc/models/shipment-type-enum.md) | Optional | - | getShipmentType(): ?string | setShipmentType(?string shipmentType): void |
| `customizations` | [`?(CartItemCustomization[])`](../../doc/models/cart-item-customization.md) | Optional | - | getCustomizations(): ?array | setCustomizations(?array customizations): void |

## Example (as JSON)

```json
{
  "reference": null,
  "name": null,
  "description": null,
  "options": null,
  "total_amount": null,
  "unit_price": null,
  "tax_amount": null,
  "quantity": null,
  "uom": null,
  "upc": null,
  "sku": null,
  "isbn": null,
  "brand": null,
  "manufacturer": null,
  "category": null,
  "collections": null,
  "properties": null,
  "tags": null,
  "color": null,
  "size": null,
  "weight": null,
  "image_url": null,
  "details_url": null,
  "type": null,
  "shopify_product_reference": null,
  "shopify_product_variant_reference": null,
  "taxable": null,
  "tax_code": null,
  "item_group": null,
  "source": null,
  "shipment_type": null,
  "customizations": null
}
```

