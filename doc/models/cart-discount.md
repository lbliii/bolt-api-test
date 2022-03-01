
# Cart Discount

## Structure

`CartDiscount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?float` | Optional | - | getAmount(): ?float | setAmount(?float amount): void |
| `code` | `?string` | Optional | **Constraints**: *Maximum Length*: `1024` | getCode(): ?string | setCode(?string code): void |
| `reference` | `?string` | Optional | Used to define the reference ID associated with the discount available.<br>**Constraints**: *Maximum Length*: `1024` | getReference(): ?string | setReference(?string reference): void |
| `description` | `?string` | Optional | Used to define the discount offering.<br>**Constraints**: *Maximum Length*: `1024` | getDescription(): ?string | setDescription(?string description): void |
| `detailsUrl` | `?string` | Optional | Used to provide a link to additional details, such as a landing page, associated with the discount offering.<br>**Constraints**: *Maximum Length*: `8192` | getDetailsUrl(): ?string | setDetailsUrl(?string detailsUrl): void |
| `discountCategory` | [`?string (DiscountCategoryEnum)`](../../doc/models/discount-category-enum.md) | Optional | - | getDiscountCategory(): ?string | setDiscountCategory(?string discountCategory): void |
| `type` | [`?int (Type5Enum)`](../../doc/models/type-5-enum.md) | Optional | Used to define the type of discount applied to the cart, such as a percentage, dynamic, or flat discount. | getType(): ?int | setType(?int type): void |

## Example (as JSON)

```json
{
  "amount": null,
  "code": null,
  "reference": null,
  "description": null,
  "details_url": null,
  "discount_category": null,
  "type": null
}
```

