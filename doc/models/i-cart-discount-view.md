
# I Cart Discount View

## Structure

`ICartDiscountView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getAmount(): ?AmountView | setAmount(?AmountView amount): void |
| `reference` | `?string` | Optional | Used to define the reference ID associated with the discount available. | getReference(): ?string | setReference(?string reference): void |
| `description` | `?string` | Optional | Used to define the discount offering.<br>**Constraints**: *Maximum Length*: `1024` | getDescription(): ?string | setDescription(?string description): void |
| `detailsUrl` | `?string` | Optional | Used to provide a link to additional details, such as a landing page, associated with the discount offering. | getDetailsUrl(): ?string | setDetailsUrl(?string detailsUrl): void |
| `freeShipping` | [`?IFreeShippingDiscountView`](../../doc/models/i-free-shipping-discount-view.md) | Optional | - | getFreeShipping(): ?IFreeShippingDiscountView | setFreeShipping(?IFreeShippingDiscountView freeShipping): void |
| `discountCategory` | [`?string (DiscountCategory1Enum)`](../../doc/models/discount-category-1-enum.md) | Optional | - | getDiscountCategory(): ?string | setDiscountCategory(?string discountCategory): void |

## Example (as JSON)

```json
{
  "amount": null,
  "reference": null,
  "description": null,
  "details_url": null,
  "free_shipping": null,
  "discount_category": null
}
```

