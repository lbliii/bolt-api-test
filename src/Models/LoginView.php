<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Models;

use stdClass;

class LoginView implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $methods;

    /**
     * @var string[]|null
     */
    private $actions;

    /**
     * Returns Methods.
     *
     * @return string[]|null
     */
    public function getMethods(): ?array
    {
        return $this->methods;
    }

    /**
     * Sets Methods.
     *
     * @maps methods
     *
     * @param string[]|null $methods
     */
    public function setMethods(?array $methods): void
    {
        $this->methods = $methods;
    }

    /**
     * Returns Actions.
     *
     * @return string[]|null
     */
    public function getActions(): ?array
    {
        return $this->actions;
    }

    /**
     * Sets Actions.
     *
     * @maps actions
     *
     * @param string[]|null $actions
     */
    public function setActions(?array $actions): void
    {
        $this->actions = $actions;
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
        if (isset($this->methods)) {
            $json['methods'] = $this->methods;
        }
        if (isset($this->actions)) {
            $json['actions'] = $this->actions;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
