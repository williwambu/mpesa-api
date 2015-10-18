<?php


 function autoload_e8745139395b51d2cdff32ad50f7a0c0($class)
{
    $classes = array(
        'Lnmo_checkout_Service' => __DIR__ .'/Lnmo_checkout_Service.php',
        'CheckOutHeader' => __DIR__ .'/CheckOutHeader.php',
        'processCheckOutRequest' => __DIR__ .'/processCheckOutRequest.php',
        'transactionStatusRequest' => __DIR__ .'/transactionStatusRequest.php',
        'processCheckOutResponse' => __DIR__ .'/processCheckOutResponse.php',
        'transactionStatusResponse' => __DIR__ .'/transactionStatusResponse.php',
        'transactionConfirmRequest' => __DIR__ .'/transactionConfirmRequest.php',
        'transactionConfirmResponse' => __DIR__ .'/transactionConfirmResponse.php',
        'ResultMsg' => __DIR__ .'/ResultMsg.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e8745139395b51d2cdff32ad50f7a0c0');

// Do nothing. The rest is just leftovers from the code generation.
{
}
