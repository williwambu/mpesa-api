<?php
namespace Api\CheckOut;

class CheckOutHeader
{

    /**
     * @var string $MERCHANT_ID
     */
    protected $MERCHANT_ID = null;

    /**
     * @var string $PASSWORD
     */
    protected $PASSWORD = null;

    /**
     * @var string $TIMESTAMP
     */
    protected $TIMESTAMP = null;

    /**
     * @param string $MERCHANT_ID
     * @param string $PASSWORD
     * @param string $TIMESTAMP
     */
    public function __construct($MERCHANT_ID, $PASSWORD, $TIMESTAMP)
    {
      $this->MERCHANT_ID = $MERCHANT_ID;
      $this->PASSWORD = $PASSWORD;
      $this->TIMESTAMP = $TIMESTAMP;
    }

    /**
     * @return string
     */
    public function getMERCHANT_ID()
    {
      return $this->MERCHANT_ID;
    }

    /**
     * @param string $MERCHANT_ID
     * @return CheckOutHeader
     */
    public function setMERCHANT_ID($MERCHANT_ID)
    {
      $this->MERCHANT_ID = $MERCHANT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPASSWORD()
    {
      return $this->PASSWORD;
    }

    /**
     * @param string $PASSWORD
     * @return CheckOutHeader
     */
    public function setPASSWORD($PASSWORD)
    {
      $this->PASSWORD = $PASSWORD;
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
     * @return CheckOutHeader
     */
    public function setTIMESTAMP($TIMESTAMP)
    {
      $this->TIMESTAMP = $TIMESTAMP;
      return $this;
    }

}
