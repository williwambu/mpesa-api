<?php
namespace Api\CheckOut;
class processCheckOutRequest
{

    /**
     * @var string $MERCHANT_TRANSACTION_ID
     */
    protected $MERCHANT_TRANSACTION_ID = null;

    /**
     * @var string $REFERENCE_ID
     */
    protected $REFERENCE_ID = null;

    /**
     * @var float $AMOUNT
     */
    protected $AMOUNT = null;

    /**
     * @var string $MSISDN
     */
    protected $MSISDN = null;

    /**
     * @var string $ENC_PARAMS
     */
    protected $ENC_PARAMS = null;

    /**
     * @var string $CALL_BACK_URL
     */
    protected $CALL_BACK_URL = null;

    /**
     * @var string $CALL_BACK_METHOD
     */
    protected $CALL_BACK_METHOD = null;

    /**
     * @var string $TIMESTAMP
     */
    protected $TIMESTAMP = null;

    /**
     * @param string $MERCHANT_TRANSACTION_ID
     * @param string $REFERENCE_ID
     * @param float $AMOUNT
     * @param string $MSISDN
     * @param string $ENC_PARAMS
     * @param string $CALL_BACK_URL
     * @param string $CALL_BACK_METHOD
     * @param string $TIMESTAMP
     */
    public function __construct($MERCHANT_TRANSACTION_ID, $REFERENCE_ID, $AMOUNT, $MSISDN, $ENC_PARAMS, $CALL_BACK_URL, $CALL_BACK_METHOD, $TIMESTAMP)
    {
      $this->MERCHANT_TRANSACTION_ID = $MERCHANT_TRANSACTION_ID;
      $this->REFERENCE_ID = $REFERENCE_ID;
      $this->AMOUNT = $AMOUNT;
      $this->MSISDN = $MSISDN;
      $this->ENC_PARAMS = $ENC_PARAMS;
      $this->CALL_BACK_URL = $CALL_BACK_URL;
      $this->CALL_BACK_METHOD = $CALL_BACK_METHOD;
      $this->TIMESTAMP = $TIMESTAMP;
    }

    /**
     * @return string
     */
    public function getMERCHANT_TRANSACTION_ID()
    {
      return $this->MERCHANT_TRANSACTION_ID;
    }

    /**
     * @param string $MERCHANT_TRANSACTION_ID
     * @return processCheckOutRequest
     */
    public function setMERCHANT_TRANSACTION_ID($MERCHANT_TRANSACTION_ID)
    {
      $this->MERCHANT_TRANSACTION_ID = $MERCHANT_TRANSACTION_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getREFERENCE_ID()
    {
      return $this->REFERENCE_ID;
    }

    /**
     * @param string $REFERENCE_ID
     * @return processCheckOutRequest
     */
    public function setREFERENCE_ID($REFERENCE_ID)
    {
      $this->REFERENCE_ID = $REFERENCE_ID;
      return $this;
    }

    /**
     * @return float
     */
    public function getAMOUNT()
    {
      return $this->AMOUNT;
    }

    /**
     * @param float $AMOUNT
     * @return processCheckOutRequest
     */
    public function setAMOUNT($AMOUNT)
    {
      $this->AMOUNT = $AMOUNT;
      return $this;
    }

    /**
     * @return string
     */
    public function getMSISDN()
    {
      return $this->MSISDN;
    }

    /**
     * @param string $MSISDN
     * @return processCheckOutRequest
     */
    public function setMSISDN($MSISDN)
    {
      $this->MSISDN = $MSISDN;
      return $this;
    }

    /**
     * @return string
     */
    public function getENC_PARAMS()
    {
      return $this->ENC_PARAMS;
    }

    /**
     * @param string $ENC_PARAMS
     * @return processCheckOutRequest
     */
    public function setENC_PARAMS($ENC_PARAMS)
    {
      $this->ENC_PARAMS = $ENC_PARAMS;
      return $this;
    }

    /**
     * @return string
     */
    public function getCALL_BACK_URL()
    {
      return $this->CALL_BACK_URL;
    }

    /**
     * @param string $CALL_BACK_URL
     * @return processCheckOutRequest
     */
    public function setCALL_BACK_URL($CALL_BACK_URL)
    {
      $this->CALL_BACK_URL = $CALL_BACK_URL;
      return $this;
    }

    /**
     * @return string
     */
    public function getCALL_BACK_METHOD()
    {
      return $this->CALL_BACK_METHOD;
    }

    /**
     * @param string $CALL_BACK_METHOD
     * @return processCheckOutRequest
     */
    public function setCALL_BACK_METHOD($CALL_BACK_METHOD)
    {
      $this->CALL_BACK_METHOD = $CALL_BACK_METHOD;
      return $this;
    }

    /**
     * @return string
     */
    public function getTIMESTAMP()
    {
      return $this->TIMESTAMP;
    }

    /**
     * @param string $TIMESTAMP
     * @return processCheckOutRequest
     */
    public function setTIMESTAMP($TIMESTAMP)
    {
      $this->TIMESTAMP = $TIMESTAMP;
      return $this;
    }

}
