<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 18:20
 */

namespace classes;

/**
 * Class SaleProduct
 * @package classes
 */
class SaleProduct extends Product
{
    /**
     * SaleProduct constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setName('Товар со скидкой.');
        $this->setPrice(120);
    }


}