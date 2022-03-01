<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Models;

use stdClass;

class TransactionCredit implements \JsonSerializable
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
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var bool
     */
    private $skipHookNotification;

    /**
     * @param int $amount
     * @param string $currency
     * @param bool $skipHookNotification
     */
    public function __construct(int $amount, string $currency, bool $skipHookNotification)
    {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->skipHookNotification = $skipHookNotification;
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
     * Returns Amount.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @required
     * @maps amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @required
     * @maps currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Skip Hook Notification.
     *
     * Set to `true` to skip receiving a webhook notification from Bolt that is triggered by this update to
     * the transaction.
     */
    public function getSkipHookNotification(): bool
    {
        return $this->skipHookNotification;
    }

    /**
     * Sets Skip Hook Notification.
     *
     * Set to `true` to skip receiving a webhook notification from Bolt that is triggered by this update to
     * the transaction.
     *
     * @required
     * @maps skip_hook_notification
     */
    public function setSkipHookNotification(bool $skipHookNotification): void
    {
        $this->skipHookNotification = $skipHookNotification;
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
        $json['amount']                    = $this->amount;
        $json['currency']                  = $this->currency;
        $json['skip_hook_notification']    = $this->skipHookNotification;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
