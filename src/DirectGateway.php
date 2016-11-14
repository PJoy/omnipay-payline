<?php
/**
 * Created by PhpStorm.
 * User: pierreportejoie
 * Date: 14/11/2016
 * Time: 09:27
 */

namespace Omnipay\Payline;


class DirectGateway extends AbstractGateway
{
    public function getName()
    {
        return 'Payline Direct';
    }

    /**
     * @param array $parameters
     *
     * @return \Omnipay\Payline\Message\DirectCaptureRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Payline\Message\DirectCaptureRequest', $parameters);
    }

    public function getEndpoint()
    {
        return ($this->getTestMode() ? $this->testEndpoint : $this->liveEndpoint) . '/DirectPaymentAPI.wsdl';
    }

    /**
     * Shunt proxy.
     */

    /**
     * @return \SoapClient
     */
    public function getDefaultHttpClient()
    {
        $shunt = true;
        $header = array(
            'Content-Type' => 'text/xml; charset=utf-8',
            'login' => $this->getMerchantId(),
            'password' => $this->getAccessKey(),
            'style' => defined(SOAP_DOCUMENT) ? SOAP_DOCUMENT : 2,
            'use' => defined(SOAP_LITERAL) ? SOAP_LITERAL : 2,
            'connection_timeout' => 5,
        );

        if ($this->getProxyHost() && !$shunt) {
            $header['proxy_host'] = $this->getProxyHost();
            $header['proxy_port'] = $this->getProxyPort();
            $header['proxy_login'] = $this->getProxyLogin();
            $header['proxy_password'] = $this->getProxyPassword();
        }

        //$tmp = new \SoapClient($this->getEndPoint(), $header);
        //dump($tmp->__getFunctions());die;
        return new \SoapClient($this->getEndPoint(), $header);
    }


}