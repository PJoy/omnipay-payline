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
 * AbstractResponse.
 */
abstract class AbstractResponse extends \Omnipay\Common\Message\AbstractResponse
{
    public function isSuccessful()
    {
        return $this->getCode() === '00000';
    }

    public function getCode()
    {
        return $this->data->result->code;
    }

    public function getMessage()
    {
        return $this->data->result->shortMessage;
    }

    public function getLongMessage()
    {
        return $this->data->result->longMessage;
    }

    public function getToken()
    {
        return $this->data->token;
    }
}
