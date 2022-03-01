<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Models;

use stdClass;

class ICurrency implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $currencySymbol;

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Currency Symbol.
     */
    public function getCurrencySymbol(): ?string
    {
        return $this->currencySymbol;
    }

    /**
     * Sets Currency Symbol.
     *
     * @maps currency_symbol
     */
    public function setCurrencySymbol(?string $currencySymbol): void
    {
        $this->currencySymbol = $currencySymbol;
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
        if (isset($this->currency)) {
            $json['currency']        = $this->currency;
        }
        if (isset($this->currencySymbol)) {
            $json['currency_symbol'] = $this->currencySymbol;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
