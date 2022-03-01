<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Models;

use stdClass;

class MerchantCreditCardReview implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $transactionId;

    /**
     * @var string|null
     */
    private $transactionReference;

    /**
     * @var string
     */
    private $decision;

    /**
     * @param string $decision
     */
    public function __construct(string $decision)
    {
        $this->decision = $decision;
    }

    /**
     * Returns Transaction Id.
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     *
     * @maps transaction_id
     */
    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns Transaction Reference.
     *
     * The 12 digit reference ID associated to a given transaction webhook for an order.
     */
    public function getTransactionReference(): ?string
    {
        return $this->transactionReference;
    }

    /**
     * Sets Transaction Reference.
     *
     * The 12 digit reference ID associated to a given transaction webhook for an order.
     *
     * @maps transaction_reference
     */
    public function setTransactionReference(?string $transactionReference): void
    {
        $this->transactionReference = $transactionReference;
    }

    /**
     * Returns Decision.
     */
    public function getDecision(): string
    {
        return $this->decision;
    }

    /**
     * Sets Decision.
     *
     * @required
     * @maps decision
     */
    public function setDecision(string $decision): void
    {
        $this->decision = $decision;
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
        if (isset($this->transactionId)) {
            $json['transaction_id']        = $this->transactionId;
        }
        if (isset($this->transactionReference)) {
            $json['transaction_reference'] = $this->transactionReference;
        }
        $json['decision']                  = $this->decision;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
