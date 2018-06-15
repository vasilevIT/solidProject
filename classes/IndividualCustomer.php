<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 18:04
 */

namespace classes;

/**
 * Class IndividualCustomer
 * @package classes
 */
class IndividualCustomer extends Customer
{
    /**
     * IndividualCustomer constructor.
     */
    public function __construct()
    {
        $this->name = "Частное лицо";
    }

    public function sign()
    {
        print("Подпись частного лица");
    }


}