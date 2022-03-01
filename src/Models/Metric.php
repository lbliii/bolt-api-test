<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Models;

use stdClass;

class Metric implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $value;

    /**
     * @var string|null
     */
    private $metricType;

    /**
     * @var int|null
     */
    private $timestamp;

    /**
     * @var array<string,string>|null
     */
    private $tags;

    /**
     * Returns Value.
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * Sets Value.
     *
     * @maps value
     */
    public function setValue(?int $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Metric Type.
     */
    public function getMetricType(): ?string
    {
        return $this->metricType;
    }

    /**
     * Sets Metric Type.
     *
     * @maps metric_type
     */
    public function setMetricType(?string $metricType): void
    {
        $this->metricType = $metricType;
    }

    /**
     * Returns Timestamp.
     */
    public function getTimestamp(): ?int
    {
        return $this->timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @maps timestamp
     */
    public function setTimestamp(?int $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Returns Tags.
     *
     * @return array<string,string>|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * Sets Tags.
     *
     * @maps tags
     *
     * @param array<string,string>|null $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
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
        if (isset($this->value)) {
            $json['value']       = $this->value;
        }
        if (isset($this->metricType)) {
            $json['metric_type'] = $this->metricType;
        }
        if (isset($this->timestamp)) {
            $json['timestamp']   = $this->timestamp;
        }
        if (isset($this->tags)) {
            $json['tags']        = $this->tags;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
