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

    public function createOrder($productPrice, $productId, $user)
    {
        $prod = new Commerce_ProductModel();
        $prod->defaultVariant->id = $productId;
        $prod->typeId = 2;
        craft()->db->createCommand()->update('commerce_variants',
            ['stock' => new \CDbExpression('stock - :qty', [':qty' => $productPrice])],
            'id = :variantId',
            [':variantId' => $productId]);

        // Update the stock
        $prod->defaultVariant->stock = craft()->db->createCommand()
            ->select('stock')
            ->from('commerce_variants')
            ->where('id = :variantId', [':variantId' => $productId])
            ->queryScalar();

        // return true;

        $userModel = craft()->users->getUserById($user->id);
        $userModel->getContent()->credits = $userModel->getContent()->credits + $productPrice;
        $userModel->admin = true;
        craft()->users->saveUser($userModel);

        $order = new Commerce_OrderModel();

        $order->isCompleted = true;
        $order->totalPrice = $productPrice;
        $order->itemTotal = $productPrice;
        $order->totalPaid = $productPrice;
        $order->orderStatusId = 1;

        $order->dateCreated = new DateTime('NOW');
        $order->dateOrdered = new DateTime('NOW');
        $order->datePaid = new DateTime('NOW');

        $order->number = $this->generateRandomString(32);

        $order->lastIp = craft()->request->getIpAddress();
        $order->orderLocale = craft()->language;

        $order->currency = 'EUR';

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

        $order->customerId = 1;

        $order->billingAddressId = null;
        $order->shippingAddressId = null;
        return craft()->commerce_orders->saveOrder($order);

        return $order;
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}