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
class WebAuthorizeResponse extends AbstractResponse
{
    public function isRedirect()
    {
        return true;
    }

    public function getRedirectUrl()
    {
        return $this->data->redirectURL;
    }
}
