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

use Omnipay\Common\Message\RedirectResponseInterface;


/**
 * AbstractResponse.
 */
class DirectAuthorizeResponse extends AbstractResponse implements RedirectResponseInterface
{
    public function isRedirect()
    {
        //dump($this);die;
        if ($this->isSuccessful()) return true;
        else {
            //echo 'L\'opération s\'est mal passée';
            //dump($this->data->result->longMessage);die;
        }
    }

    public function getRedirectMethod()
    {
        return 'GET';
    }

    public function getRedirectData()
    {
        return null;
    }

    public function getRedirectUrl()
    {
        return $this->getRequest()->getParameters()['returnUrl'];
    }
}
