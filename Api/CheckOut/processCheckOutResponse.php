<?php

namespace Api\CheckOut;

class processCheckOutResponse
{

    /**
     * @var string $RETURN_CODE
     */
    protected $RETURN_CODE = null;

    /**
     * @var string $DESCRIPTION
     */
    protected $DESCRIPTION = null;

    /**
     * @var string $TRX_ID
     */
    protected $TRX_ID = null;

    /**
     * @var string $ENC_PARAMS
     */
    protected $ENC_PARAMS = null;

    /**
     * @var string $CUST_MSG
     */
    protected $CUST_MSG = null;

    /**
     * @param string $RETURN_CODE
     * @param string $DESCRIPTION
     * @param string $TRX_ID
     * @param string $ENC_PARAMS
     * @param string $CUST_MSG
     */
    public function __construct($RETURN_CODE, $DESCRIPTION, $TRX_ID, $ENC_PARAMS, $CUST_MSG)
    {
      $this->RETURN_CODE = $RETURN_CODE;
      $this->DESCRIPTION = $DESCRIPTION;
      $this->TRX_ID = $TRX_ID;
      $this->ENC_PARAMS = $ENC_PARAMS;
      $this->CUST_MSG = $CUST_MSG;
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
     * @return processCheckOutResponse
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
     * @return processCheckOutResponse
     */
    public function setDESCRIPTION($DESCRIPTION)
    {
      $this->DESCRIPTION = $DESCRIPTION;
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
     * @return processCheckOutResponse
     */
    public function setTRX_ID($TRX_ID)
    {
      $this->TRX_ID = $TRX_ID;
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
     * @return processCheckOutResponse
     */
    public function setENC_PARAMS($ENC_PARAMS)
    {
      $this->ENC_PARAMS = $ENC_PARAMS;
      return $this;
    }

    /**
     * @return string
     */
    public function getCUST_MSG()
    {
      return $this->CUST_MSG;
    }

    /**
     * @param string $CUST_MSG
     * @return processCheckOutResponse
     */
    public function setCUST_MSG($CUST_MSG)
    {
      $this->CUST_MSG = $CUST_MSG;
      return $this;
    }

}
