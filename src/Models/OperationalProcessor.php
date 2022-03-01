<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Models;

use stdClass;

class OperationalProcessor implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $processor;

    /**
     * @var string|null
     */
    private $status;

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
        if (isset($this->processor)) {
            $json['processor'] = $this->processor;
        }
        if (isset($this->status)) {
            $json['status']    = $this->status;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
