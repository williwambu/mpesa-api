<?php

namespace Api\CheckOut;

class ResultMsg
{

    /**
     * @var string $MSISDN
     */
    protected $MSISDN = null;

    /**
     * @var string $AMOUNT
     */
    protected $AMOUNT = null;

    /**
     * @var string $MPESA_TRX_DATE
     */
    protected $MPESA_TRX_DATE = null;

    /**
     * @var string $MPESA_TRX_ID
     */
    protected $MPESA_TRX_ID = null;

    /**
     * @var string $TRX_STATUS
     */
    protected $TRX_STATUS = null;

    /**
     * @var string $RETURN_CODE
     */
    protected $RETURN_CODE = null;

    /**
     * @var string $DESCRIPTION
     */
    protected $DESCRIPTION = null;

    /**
     * @var string $MERCHANT_TRANSACTION_ID
     */
    protected $MERCHANT_TRANSACTION_ID = null;

    /**
     * @var string $ENC_PARAMS
     */
    protected $ENC_PARAMS = null;

    /**
     * @var string $TRX_ID
     */
    protected $TRX_ID = null;

    /**
     * @param string $MSISDN
     * @param string $AMOUNT
     * @param string $MPESA_TRX_DATE
     * @param string $MPESA_TRX_ID
     * @param string $TRX_STATUS
     * @param string $RETURN_CODE
     * @param string $DESCRIPTION
     * @param string $MERCHANT_TRANSACTION_ID
     * @param string $ENC_PARAMS
     * @param string $TRX_ID
     */
    public function __construct($MSISDN, $AMOUNT, $MPESA_TRX_DATE, $MPESA_TRX_ID, $TRX_STATUS, $RETURN_CODE, $DESCRIPTION, $MERCHANT_TRANSACTION_ID, $ENC_PARAMS, $TRX_ID)
    {
      $this->MSISDN = $MSISDN;
      $this->AMOUNT = $AMOUNT;
      $this->MPESA_TRX_DATE = $MPESA_TRX_DATE;
      $this->MPESA_TRX_ID = $MPESA_TRX_ID;
      $this->TRX_STATUS = $TRX_STATUS;
      $this->RETURN_CODE = $RETURN_CODE;
      $this->DESCRIPTION = $DESCRIPTION;
      $this->MERCHANT_TRANSACTION_ID = $MERCHANT_TRANSACTION_ID;
      $this->ENC_PARAMS = $ENC_PARAMS;
      $this->TRX_ID = $TRX_ID;
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
     * @return ResultMsg
     */
    public function setMSISDN($MSISDN)
    {
      $this->MSISDN = $MSISDN;
      return $this;
    }

    /**
     * @return string
     */
    public function getAMOUNT()
    {
      return $this->AMOUNT;
    }

    /**
     * @param string $AMOUNT
     * @return ResultMsg
     */
    public function setAMOUNT($AMOUNT)
    {
      $this->AMOUNT = $AMOUNT;
      return $this;
    }

    /**
     * @return string
     */
    public function getMPESA_TRX_DATE()
    {
      return $this->MPESA_TRX_DATE;
    }

    /**
     * @param string $MPESA_TRX_DATE
     * @return ResultMsg
     */
    public function setMPESA_TRX_DATE($MPESA_TRX_DATE)
    {
      $this->MPESA_TRX_DATE = $MPESA_TRX_DATE;
      return $this;
    }

    /**
     * @return string
     */
    public function getMPESA_TRX_ID()
    {
      return $this->MPESA_TRX_ID;
    }

    /**
     * @param string $MPESA_TRX_ID
     * @return ResultMsg
     */
    public function setMPESA_TRX_ID($MPESA_TRX_ID)
    {
      $this->MPESA_TRX_ID = $MPESA_TRX_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTRX_STATUS()
    {
      return $this->TRX_STATUS;
    }

    /**
     * @param string $TRX_STATUS
     * @return ResultMsg
     */
    public function setTRX_STATUS($TRX_STATUS)
    {
      $this->TRX_STATUS = $TRX_STATUS;
      return $this;
    }

    /**
     * @return string
     */
    public function getRETURN_CODE()
    {
      return $this->RETURN_CODE;
    }

    /**
     * @param string $RETURN_CODE
     * @return ResultMsg
     */
    public function setRETURN_CODE($RETURN_CODE)
    {
      $this->RETURN_CODE = $RETURN_CODE;
      return $this;
    }

    /**
     * @return string
     */
    public function getDESCRIPTION()
    {
      return $this->DESCRIPTION;
    }

    /**
     * @param string $DESCRIPTION
     * @return ResultMsg
     */
    public function setDESCRIPTION($DESCRIPTION)
    {
      $this->DESCRIPTION = $DESCRIPTION;
      return $this;
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
     * @return ResultMsg
     */
    public function setMERCHANT_TRANSACTION_ID($MERCHANT_TRANSACTION_ID)
    {
      $this->MERCHANT_TRANSACTION_ID = $MERCHANT_TRANSACTION_ID;
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
     * @return ResultMsg
     */
    public function setENC_PARAMS($ENC_PARAMS)
    {
      $this->ENC_PARAMS = $ENC_PARAMS;
      return $this;
    }

    /**
     * @return string
     */
    public function getTRX_ID()
    {
      return $this->TRX_ID;
    }

    /**
     * @param string $TRX_ID
     * @return ResultMsg
     */
    public function setTRX_ID($TRX_ID)
    {
      $this->TRX_ID = $TRX_ID;
      return $this;
    }

}
