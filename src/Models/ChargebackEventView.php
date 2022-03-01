<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Models;

use stdClass;

class ChargebackEventView implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $content;

    /**
     * @var float|null
     */
    private $time;

    /**
     * Returns Content.
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Sets Content.
     *
     * @maps content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * Returns Time.
     */
    public function getTime(): ?float
    {
        return $this->time;
    }

    /**
     * Sets Time.
     *
     * @maps time
     */
    public function setTime(?float $time): void
    {
        $this->time = $time;
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
        if (isset($this->content)) {
            $json['content'] = $this->content;
        }
        if (isset($this->time)) {
            $json['time']    = $this->time;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
