<?php

declare(strict_types=1);

/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Models;

use stdClass;

/**
 * This is the cart object returned in a successful response.
 */
class CartView implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $orderDescription;

    /**
     * @var string|null
     */
    private $orderReference;

    /**
     * @var string|null
     */
    private $displayId;

    /**
     * @var string|null
     */
    private $transactionReference;

    /**
     * @var string|null
     */
    private $cartUrl;

    /**
     * @var string|null
     */
    private $merchantOrderUrl;

    /**
     * @var ICurrency|null
     */
    private $currency;

    /**
     * @var AmountView|null
     */
    private $subtotalAmount;

    /**
     * @var AmountView|null
     */
    private $totalAmount;

    /**
     * @var AmountView|null
     */
    private $taxAmount;

    /**
     * @var AmountView|null
     */
    private $shippingAmount;

    /**
     * @var AmountView|null
     */
    private $discountAmount;

    /**
     * @var AddressView|null
     */
    private $billingAddress;

    /**
     * @var ICartItemView[]|null
     */
    private $items;

    /**
     * @var IStoreShipmentView[]|null
     */
    private $pickups;

    /**
     * @var ICartShipmentView[]|null
     */
    private $shipments;

    /**
     * @var ICartDiscountView[]|null
     */
    private $discounts;

    /**
     * @var CartItemCustomization[]|null
     */
    private $customizations;

    /**
     * @var IDeliveryOptions|null
     */
    private $deliveryOptions;

    /**
     * @var AmountView|null
     */
    private $msrp;

    /**
     * Returns Order Description.
     *
     * Used optionally to pass additional information like order numbers or other IDs as needed.
     */
    public function getOrderDescription(): ?string
    {
        return $this->orderDescription;
    }

    /**
     * Sets Order Description.
     *
     * Used optionally to pass additional information like order numbers or other IDs as needed.
     *
     * @maps order_description
     */
    public function setOrderDescription(?string $orderDescription): void
    {
        $this->orderDescription = $orderDescription;
    }

    /**
     * Returns Order Reference.
     *
     * The Bolt reference ID for a given order. This ID can be associated with many transaction references.
     */
    public function getOrderReference(): ?string
    {
        return $this->orderReference;
    }

    /**
     * Sets Order Reference.
     *
     * The Bolt reference ID for a given order. This ID can be associated with many transaction references.
     *
     * @maps order_reference
     */
    public function setOrderReference(?string $orderReference): void
    {
        $this->orderReference = $orderReference;
    }

    /**
     * Returns Display Id.
     */
    public function getDisplayId(): ?string
    {
        return $this->displayId;
    }

    /**
     * Sets Display Id.
     *
     * @maps display_id
     */
    public function setDisplayId(?string $displayId): void
    {
        $this->displayId = $displayId;
    }

    /**
     * Returns Transaction Reference.
     *
     * The 12 digit reference ID associated to a given transaction webhook for an order.
     */
    public function getTransactionReference(): ?string
    {
        return $this->transactionReference;
    }

    /**
     * Sets Transaction Reference.
     *
     * The 12 digit reference ID associated to a given transaction webhook for an order.
     *
     * @maps transaction_reference
     */
    public function setTransactionReference(?string $transactionReference): void
    {
        $this->transactionReference = $transactionReference;
    }

    /**
     * Returns Cart Url.
     *
     * Used to provide a link to the cart ID.
     */
    public function getCartUrl(): ?string
    {
        return $this->cartUrl;
    }

    /**
     * Sets Cart Url.
     *
     * Used to provide a link to the cart ID.
     *
     * @maps cart_url
     */
    public function setCartUrl(?string $cartUrl): void
    {
        $this->cartUrl = $cartUrl;
    }

    /**
     * Returns Merchant Order Url.
     */
    public function getMerchantOrderUrl(): ?string
    {
        return $this->merchantOrderUrl;
    }

    /**
     * Sets Merchant Order Url.
     *
     * @maps merchant_order_url
     */
    public function setMerchantOrderUrl(?string $merchantOrderUrl): void
    {
        $this->merchantOrderUrl = $merchantOrderUrl;
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?ICurrency
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?ICurrency $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Subtotal Amount.
     */
    public function getSubtotalAmount(): ?AmountView
    {
        return $this->subtotalAmount;
    }

    /**
     * Sets Subtotal Amount.
     *
     * @maps subtotal_amount
     */
    public function setSubtotalAmount(?AmountView $subtotalAmount): void
    {
        $this->subtotalAmount = $subtotalAmount;
    }

    /**
     * Returns Total Amount.
     */
    public function getTotalAmount(): ?AmountView
    {
        return $this->totalAmount;
    }

    /**
     * Sets Total Amount.
     *
     * @maps total_amount
     */
    public function setTotalAmount(?AmountView $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * Returns Tax Amount.
     */
    public function getTaxAmount(): ?AmountView
    {
        return $this->taxAmount;
    }

    /**
     * Sets Tax Amount.
     *
     * @maps tax_amount
     */
    public function setTaxAmount(?AmountView $taxAmount): void
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * Returns Shipping Amount.
     */
    public function getShippingAmount(): ?AmountView
    {
        return $this->shippingAmount;
    }

    /**
     * Sets Shipping Amount.
     *
     * @maps shipping_amount
     */
    public function setShippingAmount(?AmountView $shippingAmount): void
    {
        $this->shippingAmount = $shippingAmount;
    }

    /**
     * Returns Discount Amount.
     */
    public function getDiscountAmount(): ?AmountView
    {
        return $this->discountAmount;
    }

    /**
     * Sets Discount Amount.
     *
     * @maps discount_amount
     */
    public function setDiscountAmount(?AmountView $discountAmount): void
    {
        $this->discountAmount = $discountAmount;
    }

    /**
     * Returns Billing Address.
     *
     * The address object returned in the response.
     */
    public function getBillingAddress(): ?AddressView
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     *
     * The address object returned in the response.
     *
     * @maps billing_address
     */
    public function setBillingAddress(?AddressView $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Items.
     *
     * @return ICartItemView[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * Sets Items.
     *
     * @maps items
     *
     * @param ICartItemView[]|null $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }

    /**
     * Returns Pickups.
     *
     * @return IStoreShipmentView[]|null
     */
    public function getPickups(): ?array
    {
        return $this->pickups;
    }

    /**
     * Sets Pickups.
     *
     * @maps pickups
     *
     * @param IStoreShipmentView[]|null $pickups
     */
    public function setPickups(?array $pickups): void
    {
        $this->pickups = $pickups;
    }

    /**
     * Returns Shipments.
     *
     * @return ICartShipmentView[]|null
     */
    public function getShipments(): ?array
    {
        return $this->shipments;
    }

    /**
     * Sets Shipments.
     *
     * @maps shipments
     *
     * @param ICartShipmentView[]|null $shipments
     */
    public function setShipments(?array $shipments): void
    {
        $this->shipments = $shipments;
    }

    /**
     * Returns Discounts.
     *
     * @return ICartDiscountView[]|null
     */
    public function getDiscounts(): ?array
    {
        return $this->discounts;
    }

    /**
     * Sets Discounts.
     *
     * @maps discounts
     *
     * @param ICartDiscountView[]|null $discounts
     */
    public function setDiscounts(?array $discounts): void
    {
        $this->discounts = $discounts;
    }

    /**
     * Returns Customizations.
     *
     * @return CartItemCustomization[]|null
     */
    public function getCustomizations(): ?array
    {
        return $this->customizations;
    }

    /**
     * Sets Customizations.
     *
     * @maps customizations
     *
     * @param CartItemCustomization[]|null $customizations
     */
    public function setCustomizations(?array $customizations): void
    {
        $this->customizations = $customizations;
    }

    /**
     * Returns Delivery Options.
     */
    public function getDeliveryOptions(): ?IDeliveryOptions
    {
        return $this->deliveryOptions;
    }

    /**
     * Sets Delivery Options.
     *
     * @maps delivery_options
     */
    public function setDeliveryOptions(?IDeliveryOptions $deliveryOptions): void
    {
        $this->deliveryOptions = $deliveryOptions;
    }

    /**
     * Returns Msrp.
     */
    public function getMsrp(): ?AmountView
    {
        return $this->msrp;
    }

    /**
     * Sets Msrp.
     *
     * @maps msrp
     */
    public function setMsrp(?AmountView $msrp): void
    {
        $this->msrp = $msrp;
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
        if (isset($this->orderDescription)) {
            $json['order_description']     = $this->orderDescription;
        }
        if (isset($this->orderReference)) {
            $json['order_reference']       = $this->orderReference;
        }
        if (isset($this->displayId)) {
            $json['display_id']            = $this->displayId;
        }
        if (isset($this->transactionReference)) {
            $json['transaction_reference'] = $this->transactionReference;
        }
        if (isset($this->cartUrl)) {
            $json['cart_url']              = $this->cartUrl;
        }
        if (isset($this->merchantOrderUrl)) {
            $json['merchant_order_url']    = $this->merchantOrderUrl;
        }
        if (isset($this->currency)) {
            $json['currency']              = $this->currency;
        }
        if (isset($this->subtotalAmount)) {
            $json['subtotal_amount']       = $this->subtotalAmount;
        }
        if (isset($this->totalAmount)) {
            $json['total_amount']          = $this->totalAmount;
        }
        if (isset($this->taxAmount)) {
            $json['tax_amount']            = $this->taxAmount;
        }
        if (isset($this->shippingAmount)) {
            $json['shipping_amount']       = $this->shippingAmount;
        }
        if (isset($this->discountAmount)) {
            $json['discount_amount']       = $this->discountAmount;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']       = $this->billingAddress;
        }
        if (isset($this->items)) {
            $json['items']                 = $this->items;
        }
        if (isset($this->pickups)) {
            $json['pickups']               = $this->pickups;
        }
        if (isset($this->shipments)) {
            $json['shipments']             = $this->shipments;
        }
        if (isset($this->discounts)) {
            $json['discounts']             = $this->discounts;
        }
        if (isset($this->customizations)) {
            $json['customizations']        = $this->customizations;
        }
        if (isset($this->deliveryOptions)) {
            $json['delivery_options']      = $this->deliveryOptions;
        }
        if (isset($this->msrp)) {
            $json['msrp']                  = $this->msrp;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
