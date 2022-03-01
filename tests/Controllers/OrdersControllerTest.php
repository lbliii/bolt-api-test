<?php
/*
 * BoltAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BoltAPILib\Tests;

use BoltAPILib\Exceptions\ApiException;
use BoltAPILib\Exceptions;
use BoltAPILib\ApiHelper;
use BoltAPILib\Models;
use PHPUnit\Framework\TestCase;

class OrdersControllerTest extends TestCase
{
    /**
     * @var \BoltAPILib\Controllers\OrdersController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected static $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$httpResponse = new HttpCallBackCatcher();
        self::$controller = ClientFactory::create(self::$httpResponse)->getOrdersController();
    }


    /**
     * Make a request to this endpoint to create a Bolt order, generate a Bolt order token, and initiate the checkout process. A Bolt order token is required for Bolt orders; see Non-Bolt orders for alternative use cases.
     */
    public function testTestCreateOrderToken()
    {
        // Parameters for the API call
        $body = null;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->createOrderToken($body);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = 'application/json' ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, self::$httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );
    }

    /**
     * This endpoint creates an Easypost tracker to get shipment status updates.
     */
    public function testTestTrackShipment()
    {
        // Parameters for the API call
        $body = null;

        // Set callback and perform API call
        try {
            self::$controller->trackShipment($body);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * This endpoint updates an order that has already been placed.
     */
    public function testTestMerchantOrderUpdate()
    {
        // Parameters for the API call
        $body = null;

        // Set callback and perform API call
        try {
            self::$controller->merchantOrderUpdate($body);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * This endpoint creates an order that does not use a Bolt order token.
     */
    public function testTestCreateNonBoltOrder()
    {
        // Parameters for the API call
        $body = null;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->createNonBoltOrder($body);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = 'application/json' ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, self::$httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );
    }

    /**
     * TBD
     */
    public function testTestShippingAndTax()
    {
        // Parameters for the API call
        $body = null;

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->shippingAndTax($body);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = 'application/json' ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, self::$httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );
    }
}
