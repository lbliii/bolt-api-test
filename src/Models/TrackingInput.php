<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Models;

use stdClass;

class TrackingInput implements \JsonSerializable
{
    /**
     * @var string
     */
    private $transactionReference;

    /**
     * @var TrackingInputItem[]
     */
    private $items;

    /**
     * @var string
     */
    private $trackingNumber;

    /**
     * @var string
     */
    private $carrier;

    /**
     * @var bool
     */
    private $isNonBoltOrder;

    /**
     * @param string $transactionReference
     * @param TrackingInputItem[] $items
     * @param string $trackingNumber
     * @param string $carrier
     * @param bool $isNonBoltOrder
     */
    public function __construct(
        string $transactionReference,
        array $items,
        string $trackingNumber,
        string $carrier,
        bool $isNonBoltOrder
    ) {
        $this->transactionReference = $transactionReference;
        $this->items = $items;
        $this->trackingNumber = $trackingNumber;
        $this->carrier = $carrier;
        $this->isNonBoltOrder = $isNonBoltOrder;
    }

    /**
     * Returns Transaction Reference.
     *
     * The 12 digit reference ID associated to a given transaction webhook for an order.
     */
    public function getTransactionReference(): string
    {
        return $this->transactionReference;
    }

    /**
     * Sets Transaction Reference.
     *
     * The 12 digit reference ID associated to a given transaction webhook for an order.
     *
     * @required
     * @maps transaction_reference
     */
    public function setTransactionReference(string $transactionReference): void
    {
        $this->transactionReference = $transactionReference;
    }

    /**
     * Returns Items.
     *
     * @return TrackingInputItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Sets Items.
     *
     * @required
     * @maps items
     *
     * @param TrackingInputItem[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * Returns Tracking Number.
     *
     * Used as the Easypost `tracking_code`.
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    /**
     * Sets Tracking Number.
     *
     * Used as the Easypost `tracking_code`.
     *
     * @required
     * @maps tracking_number
     */
    public function setTrackingNumber(string $trackingNumber): void
    {
        $this->trackingNumber = $trackingNumber;
    }

    /**
     * Returns Carrier.
     *
     * The carrier used to deliver the shipment.
     */
    public function getCarrier(): string
    {
        return $this->carrier;
    }

    /**
     * Sets Carrier.
     *
     * The carrier used to deliver the shipment.
     *
     * @required
     * @maps carrier
     */
    public function setCarrier(string $carrier): void
    {
        $this->carrier = $carrier;
    }

    /**
     * Returns Is Non Bolt Order.
     *
     * Used to determine whether the order is a Bolt order or non-Bolt order.
     */
    public function getIsNonBoltOrder(): bool
    {
        return $this->isNonBoltOrder;
    }

    /**
     * Sets Is Non Bolt Order.
     *
     * Used to determine whether the order is a Bolt order or non-Bolt order.
     *
     * @required
     * @maps is_non_bolt_order
     */
    public function setIsNonBoltOrder(bool $isNonBoltOrder): void
    {
        $this->isNonBoltOrder = $isNonBoltOrder;
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
        $json['transaction_reference'] = $this->transactionReference;
        $json['items']                 = $this->items;
        $json['tracking_number']       = $this->trackingNumber;
        $json['carrier']               = $this->carrier;
        $json['is_non_bolt_order']     = $this->isNonBoltOrder;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
