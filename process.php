<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 10/18/15
 * Time: 1:43 PM
 */


$app_config = require("Api/CheckOut/config.php");
include 'Api/CheckOut/Lnmo_checkout_Service.php';
include 'Api/CheckOut/processCheckOutRequest.php';
include 'Api/CheckOut/processCheckOutResponse.php';

//capture the payment details and prepare a call to SAG(Service Agent Gateway)



        $checkoutService = new \Api\CheckOut\Lnmo_checkout_Service();

       // $checkOutHeader = new \Api\CheckOut\CheckOutHeader($app_config["MERCHANT_ID"],"","");

        $processcheckOutReq = new \Api\CheckOut\processCheckOutRequest($app_config["MERCHANT_ID"],"",30020," "," ",$app_config["CALLBACK_URL"],$app_config["CALLBACK_METHOD"]," ");

        $response = new \Api\CheckOut\processCheckOutResponse("","","","","");
        $response = $checkoutService -> processCheckOut($processcheckOutReq);


//invoke the processCheckOut

//the SAG validates the response and sends a response

//merchant receives the processCheckOutResponse

//the merchant should display the CUST_MSG to the customer after which he invokes confirmPaymentRequest

    // --> the system will push a USSD menu to customer to request the user to enter Bonga pin and any other validation info

//the transaction is processed on mpesa and a callback is exexuted

