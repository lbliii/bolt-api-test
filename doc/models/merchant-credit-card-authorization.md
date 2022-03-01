
# Merchant Credit Card Authorization

This request is used for authorizing a new, unsaved card.

## Structure

`MerchantCreditCardAuthorization`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `autoCapture` | `?bool` | Optional | - | getAutoCapture(): ?bool | setAutoCapture(?bool autoCapture): void |
| `cart` | [`CartCreate`](../../doc/models/cart-create.md) | Required | - | getCart(): CartCreate | setCart(CartCreate cart): void |
| `consumerId` | `?string` | Optional | The unique ID associated with the shopper. Leave `null` for guest checkout payment authorizations. | getConsumerId(): ?string | setConsumerId(?string consumerId): void |
| `creditCard` | [`CreditCard`](../../doc/models/credit-card.md) | Required | The CreditCard object is used to to pay for guest-checkout transactions and save payment method details to an account. Once saved, you can reference the associated `credit_card_id` for future transactions. | getCreditCard(): CreditCard | setCreditCard(CreditCard creditCard): void |
| `divisionId` | `string` | Required | The unique ID associated to the merchant's Bolt Account division; Merchants can have different divisions to suit multiple use cases (storefronts, pay-by-link, phone order processing). You can view and switch between these divisions from the Bolt Merchant Dashboard. | getDivisionId(): string | setDivisionId(string divisionId): void |
| `previousTransactionId` | `?string` | Optional | The unique ID associated with to the shopper's previous subscription-based transaction. Leave `null` for standard, non-subscription transactions. | getPreviousTransactionId(): ?string | setPreviousTransactionId(?string previousTransactionId): void |
| `processingInitiator` | [`?string (ProcessingInitiatorEnum)`](../../doc/models/processing-initiator-enum.md) | Optional | Determines who initiated the transaction (e.g. shopper, merchant) and how they did it (e.g. recurring subscription, on-file card). | getProcessingInitiator(): ?string | setProcessingInitiator(?string processingInitiator): void |
| `shippingAddress` | [`?Address`](../../doc/models/address.md) | Optional | The Address object is used for billing, shipping, and physical store address use cases. | getShippingAddress(): ?Address | setShippingAddress(?Address shippingAddress): void |
| `source` | [`string (Source1Enum)`](../../doc/models/source-1-enum.md) | Required | - | getSource(): string | setSource(string source): void |
| `userIdentifier` | [`UserIdentifier`](../../doc/models/user-identifier.md) | Required | The object containing key lookup IDs associated with the shopper's account, such as the unqiue email address and phone number. | getUserIdentifier(): UserIdentifier | setUserIdentifier(UserIdentifier userIdentifier): void |
| `userIdentity` | [`UserIdentity`](../../doc/models/user-identity.md) | Required | The object containing the account owner's first and last name. | getUserIdentity(): UserIdentity | setUserIdentity(UserIdentity userIdentity): void |
| `createBoltAccount` | `bool` | Required | If `true`, the guest shopper is provided a Bolt Account using their email address as its unique ID; if `false`, no information is saved at checkout. | getCreateBoltAccount(): bool | setCreateBoltAccount(bool createBoltAccount): void |

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
  "credit_card": {
    "token": "a1B2c3D4e5F6G7H8i9J0k1L2m3N4o5P6Q7r8S9t0",
    "last4": "1234",
    "bin": null,
    "number": null,
    "expiration": "12/12/2024",
    "postal_code": "10044"
  },
  "division_id": "4ab56ad7865ada4ad32",
  "source": null,
  "user_identifier": null,
  "user_identity": null,
  "create_bolt_account": null
}
```

