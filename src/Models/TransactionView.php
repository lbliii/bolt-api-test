<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Models;

use stdClass;

class TransactionView implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $processor;

    /**
     * @var int|null
     */
    private $date;

    /**
     * @var string|null
     */
    private $reference;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var ConsumerSelfView|null
     */
    private $fromConsumer;

    /**
     * @var ConsumerSelfView|null
     */
    private $toConsumer;

    /**
     * @var CreditCardView|null
     */
    private $fromCreditCard;

    /**
     * @var CreditCardView|null
     */
    private $toCreditCard;

    /**
     * @var AmountView|null
     */
    private $amount;

    /**
     * @var CreditCardAuthorizationView|null
     */
    private $authorization;

    /**
     * @var CreditCardCaptureView|null
     */
    private $capture;

    /**
     * @var CreditCardCaptureView[]|null
     */
    private $captures;

    /**
     * @var CreditCardCreditView|null
     */
    private $credit;

    /**
     * @var MerchantDivisionSummaryView|null
     */
    private $merchantDivision;

    /**
     * @var MerchantView|null
     */
    private $merchant;

    /**
     * @var array<string,string>|null
     */
    private $properties;

    /**
     * @var string|null
     */
    private $indemnificationDecision;

    /**
     * @var string|null
     */
    private $indemnificationReason;

    /**
     * @var int|null
     */
    private $lastViewedUtc;

    /**
     * @var string|null
     */
    private $viewStatus;

    /**
     * @var string|null
     */
    private $last4;

    /**
     * @var RiskModelExternalResultView|null
     */
    private $riskInsights;

    /**
     * @var OrderDecisionDetailsView|null
     */
    private $orderDecision;

    /**
     * @var string|null
     */
    private $merchantOrderNumber;

    /**
     * @var TransactionSplitsView[]|null
     */
    private $splits;

    /**
     * @var ReviewTicketView|null
     */
    private $reviewTicket;

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Processor.
     */
    public function getProcessor(): ?string
    {
        return $this->processor;
    }

    /**
     * Sets Processor.
     *
     * @maps processor
     */
    public function setProcessor(?string $processor): void
    {
        $this->processor = $processor;
    }

    /**
     * Returns Date.
     */
    public function getDate(): ?int
    {
        return $this->date;
    }

    /**
     * Sets Date.
     *
     * @maps date
     */
    public function setDate(?int $date): void
    {
        $this->date = $date;
    }

    /**
     * Returns Reference.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Sets Reference.
     *
     * @maps reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns From Consumer.
     */
    public function getFromConsumer(): ?ConsumerSelfView
    {
        return $this->fromConsumer;
    }

    /**
     * Sets From Consumer.
     *
     * @maps from_consumer
     */
    public function setFromConsumer(?ConsumerSelfView $fromConsumer): void
    {
        $this->fromConsumer = $fromConsumer;
    }

    /**
     * Returns To Consumer.
     */
    public function getToConsumer(): ?ConsumerSelfView
    {
        return $this->toConsumer;
    }

    /**
     * Sets To Consumer.
     *
     * @maps to_consumer
     */
    public function setToConsumer(?ConsumerSelfView $toConsumer): void
    {
        $this->toConsumer = $toConsumer;
    }

    /**
     * Returns From Credit Card.
     *
     * The CreditCard object is used to to pay for guest-checkout transactions and save payment method
     * details to an account. Once saved, you can reference the associated `credit_card_id` for future
     * transactions.
     */
    public function getFromCreditCard(): ?CreditCardView
    {
        return $this->fromCreditCard;
    }

    /**
     * Sets From Credit Card.
     *
     * The CreditCard object is used to to pay for guest-checkout transactions and save payment method
     * details to an account. Once saved, you can reference the associated `credit_card_id` for future
     * transactions.
     *
     * @maps from_credit_card
     */
    public function setFromCreditCard(?CreditCardView $fromCreditCard): void
    {
        $this->fromCreditCard = $fromCreditCard;
    }

    /**
     * Returns To Credit Card.
     *
     * The CreditCard object is used to to pay for guest-checkout transactions and save payment method
     * details to an account. Once saved, you can reference the associated `credit_card_id` for future
     * transactions.
     */
    public function getToCreditCard(): ?CreditCardView
    {
        return $this->toCreditCard;
    }

    /**
     * Sets To Credit Card.
     *
     * The CreditCard object is used to to pay for guest-checkout transactions and save payment method
     * details to an account. Once saved, you can reference the associated `credit_card_id` for future
     * transactions.
     *
     * @maps to_credit_card
     */
    public function setToCreditCard(?CreditCardView $toCreditCard): void
    {
        $this->toCreditCard = $toCreditCard;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): ?AmountView
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     */
    public function setAmount(?AmountView $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Authorization.
     */
    public function getAuthorization(): ?CreditCardAuthorizationView
    {
        return $this->authorization;
    }

    /**
     * Sets Authorization.
     *
     * @maps authorization
     */
    public function setAuthorization(?CreditCardAuthorizationView $authorization): void
    {
        $this->authorization = $authorization;
    }

    /**
     * Returns Capture.
     */
    public function getCapture(): ?CreditCardCaptureView
    {
        return $this->capture;
    }

    /**
     * Sets Capture.
     *
     * @maps capture
     */
    public function setCapture(?CreditCardCaptureView $capture): void
    {
        $this->capture = $capture;
    }

    /**
     * Returns Captures.
     *
     * @return CreditCardCaptureView[]|null
     */
    public function getCaptures(): ?array
    {
        return $this->captures;
    }

    /**
     * Sets Captures.
     *
     * @maps captures
     *
     * @param CreditCardCaptureView[]|null $captures
     */
    public function setCaptures(?array $captures): void
    {
        $this->captures = $captures;
    }

    /**
     * Returns Credit.
     */
    public function getCredit(): ?CreditCardCreditView
    {
        return $this->credit;
    }

    /**
     * Sets Credit.
     *
     * @maps credit
     */
    public function setCredit(?CreditCardCreditView $credit): void
    {
        $this->credit = $credit;
    }

    /**
     * Returns Merchant Division.
     */
    public function getMerchantDivision(): ?MerchantDivisionSummaryView
    {
        return $this->merchantDivision;
    }

    /**
     * Sets Merchant Division.
     *
     * @maps merchant_division
     */
    public function setMerchantDivision(?MerchantDivisionSummaryView $merchantDivision): void
    {
        $this->merchantDivision = $merchantDivision;
    }

    /**
     * Returns Merchant.
     */
    public function getMerchant(): ?MerchantView
    {
        return $this->merchant;
    }

    /**
     * Sets Merchant.
     *
     * @maps merchant
     */
    public function setMerchant(?MerchantView $merchant): void
    {
        $this->merchant = $merchant;
    }

    /**
     * Returns Properties.
     *
     * @return array<string,string>|null
     */
    public function getProperties(): ?array
    {
        return $this->properties;
    }

    /**
     * Sets Properties.
     *
     * @maps properties
     *
     * @param array<string,string>|null $properties
     */
    public function setProperties(?array $properties): void
    {
        $this->properties = $properties;
    }

    /**
     * Returns Indemnification Decision.
     */
    public function getIndemnificationDecision(): ?string
    {
        return $this->indemnificationDecision;
    }

    /**
     * Sets Indemnification Decision.
     *
     * @maps indemnification_decision
     */
    public function setIndemnificationDecision(?string $indemnificationDecision): void
    {
        $this->indemnificationDecision = $indemnificationDecision;
    }

    /**
     * Returns Indemnification Reason.
     */
    public function getIndemnificationReason(): ?string
    {
        return $this->indemnificationReason;
    }

    /**
     * Sets Indemnification Reason.
     *
     * @maps indemnification_reason
     */
    public function setIndemnificationReason(?string $indemnificationReason): void
    {
        $this->indemnificationReason = $indemnificationReason;
    }

    /**
     * Returns Last Viewed Utc.
     */
    public function getLastViewedUtc(): ?int
    {
        return $this->lastViewedUtc;
    }

    /**
     * Sets Last Viewed Utc.
     *
     * @maps last_viewed_utc
     */
    public function setLastViewedUtc(?int $lastViewedUtc): void
    {
        $this->lastViewedUtc = $lastViewedUtc;
    }

    /**
     * Returns View Status.
     */
    public function getViewStatus(): ?string
    {
        return $this->viewStatus;
    }

    /**
     * Sets View Status.
     *
     * @maps view_status
     */
    public function setViewStatus(?string $viewStatus): void
    {
        $this->viewStatus = $viewStatus;
    }

    /**
     * Returns Last 4.
     *
     * The last 4 digits of the credit card number.
     */
    public function getLast4(): ?string
    {
        return $this->last4;
    }

    /**
     * Sets Last 4.
     *
     * The last 4 digits of the credit card number.
     *
     * @maps last4
     */
    public function setLast4(?string $last4): void
    {
        $this->last4 = $last4;
    }

    /**
     * Returns Risk Insights.
     */
    public function getRiskInsights(): ?RiskModelExternalResultView
    {
        return $this->riskInsights;
    }

    /**
     * Sets Risk Insights.
     *
     * @maps risk_insights
     */
    public function setRiskInsights(?RiskModelExternalResultView $riskInsights): void
    {
        $this->riskInsights = $riskInsights;
    }

    /**
     * Returns Order Decision.
     */
    public function getOrderDecision(): ?OrderDecisionDetailsView
    {
        return $this->orderDecision;
    }

    /**
     * Sets Order Decision.
     *
     * @maps order_decision
     */
    public function setOrderDecision(?OrderDecisionDetailsView $orderDecision): void
    {
        $this->orderDecision = $orderDecision;
    }

    /**
     * Returns Merchant Order Number.
     */
    public function getMerchantOrderNumber(): ?string
    {
        return $this->merchantOrderNumber;
    }

    /**
     * Sets Merchant Order Number.
     *
     * @maps merchant_order_number
     */
    public function setMerchantOrderNumber(?string $merchantOrderNumber): void
    {
        $this->merchantOrderNumber = $merchantOrderNumber;
    }

    /**
     * Returns Splits.
     *
     * @return TransactionSplitsView[]|null
     */
    public function getSplits(): ?array
    {
        return $this->splits;
    }

    /**
     * Sets Splits.
     *
     * @maps splits
     *
     * @param TransactionSplitsView[]|null $splits
     */
    public function setSplits(?array $splits): void
    {
        $this->splits = $splits;
    }

    /**
     * Returns Review Ticket.
     */
    public function getReviewTicket(): ?ReviewTicketView
    {
        return $this->reviewTicket;
    }

    /**
     * Sets Review Ticket.
     *
     * @maps review_ticket
     */
    public function setReviewTicket(?ReviewTicketView $reviewTicket): void
    {
        $this->reviewTicket = $reviewTicket;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->id)) {
            $json['id']                       = $this->id;
        }
        if (isset($this->type)) {
            $json['type']                     = $this->type;
        }
        if (isset($this->processor)) {
            $json['processor']                = $this->processor;
        }
        if (isset($this->date)) {
            $json['date']                     = $this->date;
        }
        if (isset($this->reference)) {
            $json['reference']                = $this->reference;
        }
        if (isset($this->status)) {
            $json['status']                   = $this->status;
        }
        if (isset($this->fromConsumer)) {
            $json['from_consumer']            = $this->fromConsumer;
        }
        if (isset($this->toConsumer)) {
            $json['to_consumer']              = $this->toConsumer;
        }
        if (isset($this->fromCreditCard)) {
            $json['from_credit_card']         = $this->fromCreditCard;
        }
        if (isset($this->toCreditCard)) {
            $json['to_credit_card']           = $this->toCreditCard;
        }
        if (isset($this->amount)) {
            $json['amount']                   = $this->amount;
        }
        if (isset($this->authorization)) {
            $json['authorization']            = $this->authorization;
        }
        if (isset($this->capture)) {
            $json['capture']                  = $this->capture;
        }
        if (isset($this->captures)) {
            $json['captures']                 = $this->captures;
        }
        if (isset($this->credit)) {
            $json['credit']                   = $this->credit;
        }
        if (isset($this->merchantDivision)) {
            $json['merchant_division']        = $this->merchantDivision;
        }
        if (isset($this->merchant)) {
            $json['merchant']                 = $this->merchant;
        }
        if (isset($this->properties)) {
            $json['properties']               = $this->properties;
        }
        if (isset($this->indemnificationDecision)) {
            $json['indemnification_decision'] = $this->indemnificationDecision;
        }
        if (isset($this->indemnificationReason)) {
            $json['indemnification_reason']   = $this->indemnificationReason;
        }
        if (isset($this->lastViewedUtc)) {
            $json['last_viewed_utc']          = $this->lastViewedUtc;
        }
        if (isset($this->viewStatus)) {
            $json['view_status']              = $this->viewStatus;
        }
        if (isset($this->last4)) {
            $json['last4']                    = $this->last4;
        }
        if (isset($this->riskInsights)) {
            $json['risk_insights']            = $this->riskInsights;
        }
        if (isset($this->orderDecision)) {
            $json['order_decision']           = $this->orderDecision;
        }
        if (isset($this->merchantOrderNumber)) {
            $json['merchant_order_number']    = $this->merchantOrderNumber;
        }
        if (isset($this->splits)) {
            $json['splits']                   = $this->splits;
        }
        if (isset($this->reviewTicket)) {
            $json['review_ticket']            = $this->reviewTicket;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
