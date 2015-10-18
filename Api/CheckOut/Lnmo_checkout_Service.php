<?php
namespace Api\CheckOut;
class Lnmo_checkout_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'CheckOutHeader' => '\\CheckOutHeader',
      'processCheckOutRequest' => '\\processCheckOutRequest',
      'transactionStatusRequest' => '\\transactionStatusRequest',
      'processCheckOutResponse' => '\\processCheckOutResponse',
      'transactionStatusResponse' => '\\transactionStatusResponse',
      'transactionConfirmRequest' => '\\transactionConfirmRequest',
      'transactionConfirmResponse' => '\\transactionConfirmResponse',
      'ResultMsg' => '\\ResultMsg',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = "https://safaricom.co.ke/mpesa_online/lnmo_checkout_server.php?wsdl")
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param processCheckOutRequest $body
     * @return processCheckOutResponsex
     */
    public function processCheckOut(processCheckOutRequest $body)
    {
      parent::__setLocation("https://safaricom.co.ke/mpesa_online/lnmo_checkout_server.php");

      return $this->__soapCall('processCheckOut', array($body));
    }

    /**
     * @param transactionStatusRequest $body
     * @return transactionStatusResponse
     */
    public function transactionStatusQuery(transactionStatusRequest $body)
    {
      return $this->__soapCall('transactionStatusQuery', array($body));
    }

    /**
     * @param transactionConfirmRequest $parameters
     * @return transactionConfirmResponse
     */
    public function confirmTransaction(transactionConfirmRequest $parameters)
    {
      return $this->__soapCall('confirmTransaction', array($parameters));
    }

    /**
     * @param ResultMsg $ResultMsg
     * @return string
     */
    public function LNMOResult(ResultMsg $ResultMsg)
    {
      return $this->__soapCall('LNMOResult', array($ResultMsg));
    }

}
