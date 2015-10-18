<?php
namespace Api\CheckOut;

class transactionConfirmResponse
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
     * @var string $MERCHANT_TRANSACTION_ID
     */
    protected $MERCHANT_TRANSACTION_ID = null;

    /**
     * @var string $TRX_ID
     */
    protected $TRX_ID = null;

    /**
     * @param string $RETURN_CODE
     * @param string $DESCRIPTION
     * @param string $MERCHANT_TRANSACTION_ID
     * @param string $TRX_ID
     */
    public function __construct($RETURN_CODE, $DESCRIPTION, $MERCHANT_TRANSACTION_ID, $TRX_ID)
    {
      $this->RETURN_CODE = $RETURN_CODE;
      $this->DESCRIPTION = $DESCRIPTION;
      $this->MERCHANT_TRANSACTION_ID = $MERCHANT_TRANSACTION_ID;
      $this->TRX_ID = $TRX_ID;
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
     * @return transactionConfirmResponse
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
     * @return transactionConfirmResponse
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
     * @return transactionConfirmResponse
     */
    public function setMERCHANT_TRANSACTION_ID($MERCHANT_TRANSACTION_ID)
    {
      $this->MERCHANT_TRANSACTION_ID = $MERCHANT_TRANSACTION_ID;
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
     * @return transactionConfirmResponse
     */
    public function setTRX_ID($TRX_ID)
    {
      $this->TRX_ID = $TRX_ID;
      return $this;
    }

}
