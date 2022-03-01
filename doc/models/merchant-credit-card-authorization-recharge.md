
# Merchant Credit Card Authorization Recharge

This request is used for authorizing an existing, saved card associated with the account.

## Structure

`MerchantCreditCardAuthorizationRecharge`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cart` | [`CartCreate`](../../doc/models/cart-create.md) | Required | - | getCart(): CartCreate | setCart(CartCreate cart): void |
| `consumerId` | `?string` | Optional | The unique ID associated with the shopper. Leave `null` for guest checkout payment authorizations. | getConsumerId(): ?string | setConsumerId(?string consumerId): void |
| `creditCardId` | `string` | Required | The unique ID associated to a saved credit card in the account's wallet. Leave `null` if inputting a new, unsaved card. | getCreditCardId(): string | setCreditCardId(string creditCardId): void |
| `source` | [`string (Source1Enum)`](../../doc/models/source-1-enum.md) | Required | - | getSource(): string | setSource(string source): void |
| `userIdentifier` | [`UserIdentifier`](../../doc/models/user-identifier.md) | Required | The object containing key lookup IDs associated with the shopper's account, such as the unqiue email address and phone number. | getUserIdentifier(): UserIdentifier | setUserIdentifier(UserIdentifier userIdentifier): void |
| `userIdentity` | [`UserIdentity`](../../doc/models/user-identity.md) | Required | The object containing the account owner's first and last name. | getUserIdentity(): UserIdentity | setUserIdentity(UserIdentity userIdentity): void |

## Example (as JSON)

```json
{
  "cart": {
    "total_amount": 900,
    "items": {
      "reference": "item_100",
      "name": "Bolt Swag Bag",
      "total_amount": 1000,
      "unit_price": 1000,
      "quantity": 1,
      "properties": null,
      "collections": null,
      "customizations": null
    },
    "shipments": null,
    "in_store_cart_shipments": null,
    "discounts": null,
    "discount_code": "SUMMER2024",
    "currency": "USD",
    "is_shopify_hosted_checkout": false,
    "metadata": {
      "key1": "value1",
      "key2": "value2"
    }
  },
  "credit_card_id": "SAeEcU1hpMobc",
  "source": null,
  "user_identifier": null,
  "user_identity": null
}
```

