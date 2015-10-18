<?php
namespace Api\CheckOut;
class transactionStatusRequest
{

    /**
     * @var string $TRX_ID
     */
    protected $TRX_ID = null;

    /**
     * @var string $MERCHANT_TRANSACTION_ID
     */
    protected $MERCHANT_TRANSACTION_ID = null;

    /**
     * @param string $TRX_ID
     * @param string $MERCHANT_TRANSACTION_ID
     */
    public function __construct($TRX_ID, $MERCHANT_TRANSACTION_ID)
    {
      $this->TRX_ID = $TRX_ID;
      $this->MERCHANT_TRANSACTION_ID = $MERCHANT_TRANSACTION_ID;
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
     * @return transactionStatusRequest
     */
    public function setTRX_ID($TRX_ID)
    {
      $this->TRX_ID = $TRX_ID;
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
     * @return transactionStatusRequest
     */
    public function setMERCHANT_TRANSACTION_ID($MERCHANT_TRANSACTION_ID)
    {
      $this->MERCHANT_TRANSACTION_ID = $MERCHANT_TRANSACTION_ID;
      return $this;
    }

}
