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
class WebCaptureRequest extends WebAuthorizeRequest
{
    public function getData()
    {
        $data = parent::getData();
        $data['payment']['action'] = 101;

        return array_replace_recursive($this->getBaseData(), $data);
    }

    /**
     * @param \stdClass $data
     *
     * @return WebAuthorizeResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new WebCaptureResponse($this, $data);
    }
}
