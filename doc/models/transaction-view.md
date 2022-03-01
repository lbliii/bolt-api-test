
# Transaction View

## Structure

`TransactionView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `processor` | [`?string (ProcessorEnum)`](../../doc/models/processor-enum.md) | Optional | - | getProcessor(): ?string | setProcessor(?string processor): void |
| `date` | `?int` | Optional | - | getDate(): ?int | setDate(?int date): void |
| `reference` | `?string` | Optional | - | getReference(): ?string | setReference(?string reference): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `fromConsumer` | [`?ConsumerSelfView`](../../doc/models/consumer-self-view.md) | Optional | - | getFromConsumer(): ?ConsumerSelfView | setFromConsumer(?ConsumerSelfView fromConsumer): void |
| `toConsumer` | [`?ConsumerSelfView`](../../doc/models/consumer-self-view.md) | Optional | - | getToConsumer(): ?ConsumerSelfView | setToConsumer(?ConsumerSelfView toConsumer): void |
| `fromCreditCard` | [`?CreditCardView`](../../doc/models/credit-card-view.md) | Optional | The CreditCard object is used to to pay for guest-checkout transactions and save payment method details to an account. Once saved, you can reference the associated `credit_card_id` for future transactions. | getFromCreditCard(): ?CreditCardView | setFromCreditCard(?CreditCardView fromCreditCard): void |
| `toCreditCard` | [`?CreditCardView`](../../doc/models/credit-card-view.md) | Optional | The CreditCard object is used to to pay for guest-checkout transactions and save payment method details to an account. Once saved, you can reference the associated `credit_card_id` for future transactions. | getToCreditCard(): ?CreditCardView | setToCreditCard(?CreditCardView toCreditCard): void |
| `amount` | [`?AmountView`](../../doc/models/amount-view.md) | Optional | - | getAmount(): ?AmountView | setAmount(?AmountView amount): void |
| `authorization` | [`?CreditCardAuthorizationView`](../../doc/models/credit-card-authorization-view.md) | Optional | - | getAuthorization(): ?CreditCardAuthorizationView | setAuthorization(?CreditCardAuthorizationView authorization): void |
| `capture` | [`?CreditCardCaptureView`](../../doc/models/credit-card-capture-view.md) | Optional | - | getCapture(): ?CreditCardCaptureView | setCapture(?CreditCardCaptureView capture): void |
| `captures` | [`?(CreditCardCaptureView[])`](../../doc/models/credit-card-capture-view.md) | Optional | - | getCaptures(): ?array | setCaptures(?array captures): void |
| `credit` | [`?CreditCardCreditView`](../../doc/models/credit-card-credit-view.md) | Optional | - | getCredit(): ?CreditCardCreditView | setCredit(?CreditCardCreditView credit): void |
| `merchantDivision` | [`?MerchantDivisionSummaryView`](../../doc/models/merchant-division-summary-view.md) | Optional | - | getMerchantDivision(): ?MerchantDivisionSummaryView | setMerchantDivision(?MerchantDivisionSummaryView merchantDivision): void |
| `merchant` | [`?MerchantView`](../../doc/models/merchant-view.md) | Optional | - | getMerchant(): ?MerchantView | setMerchant(?MerchantView merchant): void |
| `properties` | `?array<string,string>` | Optional | - | getProperties(): ?array | setProperties(?array properties): void |
| `indemnificationDecision` | [`?string (IndemnificationDecisionEnum)`](../../doc/models/indemnification-decision-enum.md) | Optional | - | getIndemnificationDecision(): ?string | setIndemnificationDecision(?string indemnificationDecision): void |
| `indemnificationReason` | [`?string (IndemnificationReasonEnum)`](../../doc/models/indemnification-reason-enum.md) | Optional | - | getIndemnificationReason(): ?string | setIndemnificationReason(?string indemnificationReason): void |
| `lastViewedUtc` | `?int` | Optional | - | getLastViewedUtc(): ?int | setLastViewedUtc(?int lastViewedUtc): void |
| `viewStatus` | [`?string (ViewStatusEnum)`](../../doc/models/view-status-enum.md) | Optional | - | getViewStatus(): ?string | setViewStatus(?string viewStatus): void |
| `last4` | `?string` | Optional | The last 4 digits of the credit card number.<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4` | getLast4(): ?string | setLast4(?string last4): void |
| `riskInsights` | [`?RiskModelExternalResultView`](../../doc/models/risk-model-external-result-view.md) | Optional | - | getRiskInsights(): ?RiskModelExternalResultView | setRiskInsights(?RiskModelExternalResultView riskInsights): void |
| `orderDecision` | [`?OrderDecisionDetailsView`](../../doc/models/order-decision-details-view.md) | Optional | - | getOrderDecision(): ?OrderDecisionDetailsView | setOrderDecision(?OrderDecisionDetailsView orderDecision): void |
| `merchantOrderNumber` | `?string` | Optional | - | getMerchantOrderNumber(): ?string | setMerchantOrderNumber(?string merchantOrderNumber): void |
| `splits` | [`?(TransactionSplitsView[])`](../../doc/models/transaction-splits-view.md) | Optional | - | getSplits(): ?array | setSplits(?array splits): void |
| `reviewTicket` | [`?ReviewTicketView`](../../doc/models/review-ticket-view.md) | Optional | - | getReviewTicket(): ?ReviewTicketView | setReviewTicket(?ReviewTicketView reviewTicket): void |

## Example (as JSON)

```json
{
  "id": null,
  "type": null,
  "processor": null,
  "date": null,
  "reference": null,
  "status": null,
  "from_consumer": null,
  "to_consumer": null,
  "from_credit_card": null,
  "to_credit_card": null,
  "amount": null,
  "authorization": null,
  "capture": null,
  "captures": null,
  "credit": null,
  "merchant_division": null,
  "merchant": null,
  "properties": null,
  "indemnification_decision": null,
  "indemnification_reason": null,
  "last_viewed_utc": null,
  "view_status": null,
  "last4": null,
  "risk_insights": null,
  "order_decision": null,
  "merchant_order_number": null,
  "splits": null,
  "review_ticket": null
}
```

