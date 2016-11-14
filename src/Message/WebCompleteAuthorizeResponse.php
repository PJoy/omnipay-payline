<?php

/*
 * WebMoney driver for the Omnipay PHP payment processing library
 *
 * @link      https://github.com/ck-developer/omnipay-payline
 * @package   omnipay-payline
 * @license   MIT
 * @copyright Copyright (c) 2016 Claude Khedhiri <claude@khedhiri.com>
 */

namespace Omnipay\Payline\Message;

/**
 * WebCaptureResponse.
 */
class WebCompleteAuthorizeResponse extends AbstractResponse
{
    public function getTransaction()
    {
        return $this->data->transaction;
    }

    public function getPayment()
    {
        return $this->data->payment;
    }

    public function getAuthorization()
    {
        return $this->data->authorization;
    }

    public function getPrivateData()
    {
        return (array) $this->data->privateDataList;
    }

    public function getAuthentication()
    {
        return $this->data->authentication3DSecure;
    }

    public function getTransactionId()
    {
        return $this->data->transaction->id;
    }
}
