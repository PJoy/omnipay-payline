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
class WebAuthorizeRequest extends AbstractRequest
{
    /**
     * @return bool
     */
    public function getMethod()
    {
        return 'doWebPayment';
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->getParameter('date');
    }

    /**
     * @param string $date
     *
     * @return $this
     */
    public function setDate($date)
    {
        if ($date instanceof \DateTime) {
            $date = $date->format('d/m/Y H:i');
        }

        return $this->setParameter('date', $date);
    }

    public function getData()
    {
        $data['payment'] = array(
            'amount' => $this->getAmountInteger(),
            'currency' => $this->getCurrencyNumeric(),
            'action' => 100,
            'mode' => 'CPT',
        );

        if ($this->getContractNumber()) {
            $data['payment']['contractNumber'] = $this->getContractNumber();
        }

        $data['order'] = array(
            'ref' => $this->getTransactionReference(),
            'amount' => $this->getAmountInteger(),
            'currency' => $this->getCurrencyNumeric(),
        );

        $data['order']['date'] = $this->getDate();

        $data['returnURL'] = $this->getReturnUrl();
        $data['cancelURL'] = $this->getCancelUrl();
        $data['notificationURL'] = $this->getNotifyUrl();

        return array_replace_recursive($this->getBaseData(), $data);
    }

    /**
     * @param \stdClass $data
     *
     * @return WebAuthorizeResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new WebAuthorizeResponse($this, $data);
    }
}
