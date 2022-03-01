<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Models;

use stdClass;

class IWeight implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $weight;

    /**
     * @var int|null
     */
    private $height;

    /**
     * @var int|null
     */
    private $depth;

    /**
     * @var string|null
     */
    private $unit;

    /**
     * Returns Weight.
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * Sets Weight.
     *
     * @maps weight
     */
    public function setWeight(?int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * Returns Height.
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * Sets Height.
     *
     * @maps height
     */
    public function setHeight(?int $height): void
    {
        $this->height = $height;
    }

    /**
     * Returns Depth.
     */
    public function getDepth(): ?int
    {
        return $this->depth;
    }

    /**
     * Sets Depth.
     *
     * @maps depth
     */
    public function setDepth(?int $depth): void
    {
        $this->depth = $depth;
    }

    /**
     * Returns Unit.
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * Sets Unit.
     *
     * @maps unit
     */
    public function setUnit(?string $unit): void
    {
        $this->unit = $unit;
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
        if (isset($this->weight)) {
            $json['weight'] = $this->weight;
        }
        if (isset($this->height)) {
            $json['height'] = $this->height;
        }
        if (isset($this->depth)) {
            $json['depth']  = $this->depth;
        }
        if (isset($this->unit)) {
            $json['unit']   = $this->unit;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
