<?php

/*
 * WebMoney driver for the Omnipay PHP payment processing library
 *
 * @link      https://github.com/ck-developer/omnipay-payline
 * @package   omnipay-payline
 * @license   MIT
 * @copyright Copyright (c) 2016 Claude Khedhiri <claude@khedhiri.com>
 */

namespace Omnipay\Payline;

class WebGateway extends AbstractGateway
{
    public function getName()
    {
        return 'Payline Web';
    }

    /**
     * @return Message\WebAuthorizeRequest
     */
    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Payline\Message\WebAuthorizeRequest', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Omnipay\Payline\Message\WebCaptureRequest
     */
    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Payline\Message\WebCaptureRequest', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Omnipay\Payline\Message\WebCaptureRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Payline\Message\WebCaptureRequest', $parameters);
    }

    public function completeAuthorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Payline\Message\WebCompleteAuthorizeRequest', $parameters);
    }

    public function getEndpoint()
    {
        return ($this->getTestMode() ? $this->testEndpoint : $this->liveEndpoint) . '/WebPaymentAPI.wsdl';
    }
}
