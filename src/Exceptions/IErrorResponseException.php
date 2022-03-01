<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Exceptions;

class IErrorResponseException extends \BoltAPILib\Exceptions\ApiException
{
    /**
     * @var \BoltAPILib\Models\Result|null
     */
    private $result;

    /**
     * @var \BoltAPILib\Models\IError[]|null
     */
    private $errors;

    /**
     * Returns Result.
     */
    public function getResult(): ?\BoltAPILib\Models\Result
    {
        return $this->result;
    }

    /**
     * Sets Result.
     *
     * @maps result
     */
    public function setResult(?\BoltAPILib\Models\Result $result): void
    {
        $this->result = $result;
    }

    /**
     * Returns Errors.
     *
     * @return \BoltAPILib\Models\IError[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps errors
     *
     * @param \BoltAPILib\Models\IError[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }
}
