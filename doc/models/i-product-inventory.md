
# I Product Inventory

## Structure

`IProductInventory`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `current` | [`?IProduct`](../../doc/models/i-product.md) | Optional | - | getCurrent(): ?IProduct | setCurrent(?IProduct current): void |
| `parent` | [`?IProduct`](../../doc/models/i-product.md) | Optional | - | getParent(): ?IProduct | setParent(?IProduct parent): void |
| `properties` | [`?(IProduct[])`](../../doc/models/i-product.md) | Optional | - | getProperties(): ?array | setProperties(?array properties): void |
| `variants` | [`?(IProduct[])`](../../doc/models/i-product.md) | Optional | - | getVariants(): ?array | setVariants(?array variants): void |
| `nextCursor` | `?string` | Optional | - | getNextCursor(): ?string | setNextCursor(?string nextCursor): void |

## Example (as JSON)

```json
{
  "Current": null,
  "Parent": null,
  "Properties": null,
  "Variants": null,
  "NextCursor": null
}
```

