
# Cart Item

## Structure

`CartItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reference` | `string` | Required | **Constraints**: *Maximum Length*: `1024` | getReference(): string | setReference(string reference): void |
| `name` | `string` | Required | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1024` | getName(): string | setName(string name): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `options` | `?string` | Optional | **Constraints**: *Maximum Length*: `1024` | getOptions(): ?string | setOptions(?string options): void |
| `totalAmount` | `int` | Required | The total amount, in cents, of the item including its taxes if applicable. | getTotalAmount(): int | setTotalAmount(int totalAmount): void |
| `unitPrice` | `int` | Required | The price of one unit of the item; for example, the price of one pack of socks. | getUnitPrice(): int | setUnitPrice(int unitPrice): void |
| `taxAmount` | `?int` | Optional | The tax amount for the item; this value should scale with the quantity of units selected. | getTaxAmount(): ?int | setTaxAmount(?int taxAmount): void |
| `quantity` | `int` | Required | **Constraints**: `<= 15000` | getQuantity(): int | setQuantity(int quantity): void |
| `uom` | `?string` | Optional | Used to define the unit of measure used to describe the item.<br>**Constraints**: *Maximum Length*: `1024` | getUom(): ?string | setUom(?string uom): void |
| `upc` | `?string` | Optional | Used to define the 12-digit Universal Product Code (a barcode) associated with the item worldwide.<br>**Constraints**: *Maximum Length*: `1024` | getUpc(): ?string | setUpc(?string upc): void |
| `sku` | `?string` | Optional | Used to define the alpha-numberic Stock Keeping Unit associated with the item as it is mapped to your internal product catalogue.<br>**Constraints**: *Maximum Length*: `1024` | getSku(): ?string | setSku(?string sku): void |
| `isbn` | `?string` | Optional | Used to define the International Standard Book Number associated with the book.<br>**Constraints**: *Maximum Length*: `1024` | getIsbn(): ?string | setIsbn(?string isbn): void |
| `brand` | `?string` | Optional | **Constraints**: *Maximum Length*: `1024` | getBrand(): ?string | setBrand(?string brand): void |
| `manufacturer` | `?string` | Optional | Used to define the organization that manufactured the item.<br>**Constraints**: *Maximum Length*: `1024` | getManufacturer(): ?string | setManufacturer(?string manufacturer): void |
| `category` | `?string` | Optional | Used to define a product category associated with the item.<br>**Constraints**: *Maximum Length*: `1024` | getCategory(): ?string | setCategory(?string category): void |
| `tags` | `?string` | Optional | Used to define a comma-separated list of tags associated with the item.<br>**Constraints**: *Maximum Length*: `1024` | getTags(): ?string | setTags(?string tags): void |
| `properties` | [`CartItemProperty[]`](../../doc/models/cart-item-property.md) | Required | - | getProperties(): array | setProperties(array properties): void |
| `color` | `?string` | Optional | Used to define the color of the item.<br>**Constraints**: *Maximum Length*: `1024` | getColor(): ?string | setColor(?string color): void |
| `size` | `?string` | Optional | Used to define the size of the item.<br>**Constraints**: *Maximum Length*: `1024` | getSize(): ?string | setSize(?string size): void |
| `weight` | `?int` | Optional | **Constraints**: `<= 10000` | getWeight(): ?int | setWeight(?int weight): void |
| `weightUnit` | `?string` | Optional | **Constraints**: *Maximum Length*: `1024` | getWeightUnit(): ?string | setWeightUnit(?string weightUnit): void |
| `imageUrl` | `?string` | Optional | Used to provide a link to the image associated with the item.<br>**Constraints**: *Maximum Length*: `8192` | getImageUrl(): ?string | setImageUrl(?string imageUrl): void |
| `detailsUrl` | `?string` | Optional | Used to provide a link to the item's product page.<br>**Constraints**: *Maximum Length*: `8192` | getDetailsUrl(): ?string | setDetailsUrl(?string detailsUrl): void |
| `externalInputs` | [`?CartItemExternalInputs`](../../doc/models/cart-item-external-inputs.md) | Optional | - | getExternalInputs(): ?CartItemExternalInputs | setExternalInputs(?CartItemExternalInputs externalInputs): void |
| `taxable` | `?bool` | Optional | - | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `taxCode` | `?string` | Optional | **Constraints**: *Maximum Length*: `32` | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `type` | [`?string (Type2Enum)`](../../doc/models/type-2-enum.md) | Optional | - | getType(): ?string | setType(?string type): void |
| `collections` | `string[]` | Required | - | getCollections(): array | setCollections(array collections): void |
| `subscription` | [`?Subscription`](../../doc/models/subscription.md) | Optional | - | getSubscription(): ?Subscription | setSubscription(?Subscription subscription): void |
| `source` | `?string` | Optional | - | getSource(): ?string | setSource(?string source): void |
| `itemGroup` | `?string` | Optional | - | getItemGroup(): ?string | setItemGroup(?string itemGroup): void |
| `shipmentType` | [`?string (ShipmentTypeEnum)`](../../doc/models/shipment-type-enum.md) | Optional | - | getShipmentType(): ?string | setShipmentType(?string shipmentType): void |
| `customizations` | [`CartItemCustomization[]`](../../doc/models/cart-item-customization.md) | Required | - | getCustomizations(): array | setCustomizations(array customizations): void |
| `msrp` | `?int` | Optional | - | getMsrp(): ?int | setMsrp(?int msrp): void |

## Example (as JSON)

```json
{
  "reference": "item_100",
  "name": "Bolt Swag Bag",
  "total_amount": 1000,
  "unit_price": 1000,
  "quantity": 1,
  "properties": null,
  "collections": null,
  "customizations": null
}
```

