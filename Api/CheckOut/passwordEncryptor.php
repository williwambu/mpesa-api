<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 10/18/15
 * Time: 1:51 PM
 */

namespace Api\CheckOut;

require "config.php";

class passwordEncryptor
{

    /**
     * @var string $MERCHANT_ID
     */
    protected $MERCHANT_ID = null;

    /**
     * @var string $PASSKEY
     */
    protected $PASSKEY = null;

    /**
     * @var string $TIMESTAMP
     */
    protected $TIMESTAMP = null;


    public function __constructor($MERCHANT_ID, $PASSKEY, $TIMESTAMP)
    {
        $this->MERCHANT_ID = $MERCHANT_ID;
        $this->$PASSKEY = $PASSKEY;
        $this->TIMESTAMP = $TIMESTAMP;
    }


    /**
     * @return string
     */
    public function password()
    {
        $hash = hash("sha256",$this -> MERCHANT_ID, $this ->PASSKEY, $this -> TIMESTAMP );
        $password = base64_encode($hash);

        return $password;
    }

} 