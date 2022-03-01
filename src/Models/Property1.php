<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Models;

use stdClass;

class Property1 implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $nameId;

    /**
     * @var int|null
     */
    private $valueId;

    /**
     * Returns Name Id.
     */
    public function getNameId(): ?int
    {
        return $this->nameId;
    }

    /**
     * Sets Name Id.
     *
     * @maps name_id
     */
    public function setNameId(?int $nameId): void
    {
        $this->nameId = $nameId;
    }

    /**
     * Returns Value Id.
     */
    public function getValueId(): ?int
    {
        return $this->valueId;
    }

    /**
     * Sets Value Id.
     *
     * @maps value_id
     */
    public function setValueId(?int $valueId): void
    {
        $this->valueId = $valueId;
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
        if (isset($this->nameId)) {
            $json['name_id']  = $this->nameId;
        }
        if (isset($this->valueId)) {
            $json['value_id'] = $this->valueId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
