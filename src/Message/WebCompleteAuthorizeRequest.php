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
 * Authorize Request.
 *
 * @method WebAuthorizeResponse send()
 */
class WebCompleteAuthorizeRequest extends AbstractRequest
{
    /**
     * @return bool
     */
    public function getMethod()
    {
        return 'getWebPaymentDetails';
    }

    public function getData()
    {
        $data = array();

        $data['token'] = $this->httpRequest->get('token', $this->getToken());

        return $data;
    }

    /**
     * @param \stdClass $data
     *
     * @return WebAuthorizeResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new WebCompleteAuthorizeResponse($this, $data);
    }
}
