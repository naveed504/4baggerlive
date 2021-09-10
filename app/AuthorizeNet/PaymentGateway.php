<?php

namespace App\AuthorizeNet;

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

class PaymentGateway
{
    /**
     * @property net\authorize\api\contract\v1\MerchantAuthenticationType
     */

    protected $merchantAuthentication;

    /**
     * @property string card
     */

    protected $card;

    /**
     * @property net\authorize\api\contract\v1\CreditCardType
     */

    protected $cardType;

    /**
     * @property net\authorize\api\contract\v1\PaymentType
     */

    protected $paymentType;

    /**
     * @property net\authorize\api\contract\v1\CreateTransactionRequest
     */

    protected $transactionRequest;

    /**
     * @property net\authorize\api\contract\v1\TransactionRequestType
     */

    protected $transactionRequestType;

    /**
     * @property string refID
     */

    protected $refId;

    /**
     * @property Collection request data
     */
    protected $input;

    /**
     * @property year expiry date year
     */
    protected $year;

    /**
     * @property string expiry date month name
     */
    protected $nmonth;

    /**
     * @property Object Authorize net controller
     */
    protected $controller;

    /**
     * Initializing class object
     */
    public function __construct()
    {
        $this->merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $this->merchantAuthentication->setName(config('app.merchant_id'));
        $this->merchantAuthentication->setTransactionKey(config('app.merchant_key'));
        $this->cardType = new AnetAPI\CreditCardType();
        $this->paymentType = new AnetAPI\PaymentType();
        $this->transactionRequestType = new AnetAPI\TransactionRequestType();
        $this->transactionRequest = new AnetAPI\CreateTransactionRequest();
    }

    public function setPaymentData($request)
    {
        $this->input = $request;
        return $this;
    }

    /**
     * Set Nonce to track request validity
     */
    public function setNonce()
    {
        $time = strtotime($this->input['exp_date']);
        $month = date("F", $time);
        $this->nmonth = date('m', strtotime($month));
        $this->year = date("Y", $time);
        return $this;
    }

    /**
     * Set Reference ID
     */
    public function setRefId()
    {
        $this->setNonce();
        $this->refId = 'ref' . time();
        return $this;
    }

    /**
     * Creating payment data for a credit card
     */
    public function paymentDataForCreditCard()
    {
        $this->cardType->setCardNumber(preg_replace('/\s+/', '', $this->input['card_number']));
        $this->cardType->setExpirationDate($this->year . "-" . $this->nmonth);
        $this->cardType->setCardCode($this->input['cvc_number']);
        return $this;
    }

    /**
     * Setting payment type
     */
    public function paymentType()
    {
        $this->paymentDataForCreditCard();
        $this->paymentType->setCreditCard($this->cardType);
        return $this;
    }

    /**
     * Creating a transaction request type
     */
    public function transactionRequestType()
    {
        $this->transactionRequestType->setTransactionType("authCaptureTransaction");
        $this->transactionRequestType->setAmount($this->input['amount']);
        $this->transactionRequestType->setPayment($this->paymentType);
        return $this;
    }

    /**
     * Assemble to complete transaction request
     */
    public function transactionRequest()
    {
        $this->transactionRequestType();
        $this->transactionRequest->setMerchantAuthentication($this->merchantAuthentication);
        $this->transactionRequest->setRefId($this->refId);
        $this->transactionRequest->setTransactionRequest($this->transactionRequestType);
        return $this;
    }

    /**
     * get the controller on Authorize.net
     */
    public function getController()
    {
        $this->controller = new AnetController\CreateTransactionController($this->transactionRequest);
        return $this;
    }

    /**
     * Set the controller on Authorize.net and make it ready for payments
     */
    public function call()
    {
        $this->getController();
        $response = $this->controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
        return $response;
    }
}
