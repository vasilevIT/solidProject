<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 18:04
 */

namespace classes;

/**
 * Class Company
 * @package classes
 */
class Company extends Customer
{
    /**
     * Company constructor.
     */
    public function __construct()
    {
        $this->name = "Юридическое лицо";
    }

    /**
     * @inheritdoc
     */
    public function sign()
    {
        print("Печать компании");
    }

}