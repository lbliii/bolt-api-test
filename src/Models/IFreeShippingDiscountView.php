<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Models;

use stdClass;

class IFreeShippingDiscountView implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $isFreeShipping;

    /**
     * @var int|null
     */
    private $maximumCostAllowed;

    /**
     * Returns Is Free Shipping.
     */
    public function getIsFreeShipping(): ?bool
    {
        return $this->isFreeShipping;
    }

    /**
     * Sets Is Free Shipping.
     *
     * @maps is_free_shipping
     */
    public function setIsFreeShipping(?bool $isFreeShipping): void
    {
        $this->isFreeShipping = $isFreeShipping;
    }

    /**
     * Returns Maximum Cost Allowed.
     */
    public function getMaximumCostAllowed(): ?int
    {
        return $this->maximumCostAllowed;
    }

    /**
     * Sets Maximum Cost Allowed.
     *
     * @maps maximum_cost_allowed
     */
    public function setMaximumCostAllowed(?int $maximumCostAllowed): void
    {
        $this->maximumCostAllowed = $maximumCostAllowed;
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
        if (isset($this->isFreeShipping)) {
            $json['is_free_shipping']     = $this->isFreeShipping;
        }
        if (isset($this->maximumCostAllowed)) {
            $json['maximum_cost_allowed'] = $this->maximumCostAllowed;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
