<?php
/**
 * Credits plugin for Craft CMS
 *
 * https://craftcms.com/docs/plugins/variables
 * --snip--
 *
 * @author    Branksz
 * @copyright Copyright (c) 2019 Branksz
 * @link      github.com/Leppo
 * @package   Credits
 * @since     1.0.0
 */

namespace Craft;

class CreditsVariable
{
    public function calcCredits($credits){
        $credits = $credits*0.8;

        if($credits > 100){
            $credits = 100;
        }

        return round($credits);
    }

    public function createOrder()
    {
        $order = new Commerce_OrderModel();

        $order->isCompleted = true;
        $order->totalPrice = 1337;
        $order->totalPaid = 1337;
        $order->orderStatusId = 1;

        $order->dateCreated = new DateTime('NOW');
        $order->dateOrdered = new DateTime('NOW');
        $order->datePaid = new DateTime('NOW');

        $order->lastIp = craft()->request->getIpAddress();
        $order->orderLocale = craft()->language;

        // Right now, orders are all stored in the default currency
        $order->currency = 'EUR';

        // if (defined('COMMERCE_PAYMENT_CURRENCY'))
        // {
        //     $currency = StringHelper::toUpperCase(COMMERCE_PAYMENT_CURRENCY);
        //     if (in_array($currency, $currencies))
        //     {
        //         $order->paymentCurrency = $currency;
        //     }
        // }

        // // If payment currency is not set or not available anymore, default to the primary currency
        // if (!in_array($order->paymentCurrency, $currencies))
        // {
        //     $order->paymentCurrency = craft()->commerce_paymentCurrencies->getPrimaryPaymentCurrencyIso();
        // }

        // Does a plugin want to set a default shipping address
        if(!$order->shippingAddressId) {
            $defaultShippingAddress = craft()->plugins->callFirst('commerce_defaultCartShippingAddress', [$order]);
            if ($defaultShippingAddress) {
                $order->setShippingAddress($defaultShippingAddress);
            }
        }

        if (!$order->billingAddressId) {
            $defaultBillingAddress = craft()->plugins->callFirst('commerce_defaultCartBillingAddress', [$order]);
            if ($defaultBillingAddress) {
                $order->setBillingAddress($defaultBillingAddress);
            }
        }

        if ($autoSetAddresses = craft()->config->get('autoSetNewCartAddresses', 'commerce') && $customer = craft()->commerce_customers->getCustomerById($order->customerId))
        {
            if (
                !$order->shippingAddressId &&
                ($lastShippingAddressId = $customer->lastUsedShippingAddressId) &&
                ($address = craft()->commerce_addresses->getAddressById($lastShippingAddressId))
            ) {
                $order->setShippingAddress($address);
            }

            if (
                !$order->billingAddressId &&
                ($lastBillingAddressId = $customer->lastUsedBillingAddressId) &&
                ($address = craft()->commerce_addresses->getAddressById($lastBillingAddressId))
            ) {
                $order->setBillingAddress($address);
            }
        }

        // Update the cart if the customer has changed and recalculate the cart.
        $order->customerId = 1;

        $order->billingAddressId = null;
        $order->shippingAddressId = null;
        return craft()->commerce_orders->saveOrder($order);

        // return $order;
    }
}