<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 18:14
 */

namespace classes;

/**
 * Class SpecialProduct
 * @package classes
 */
class SpecialProduct extends Product
{
    /**
     * SpecialProduct constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setName("Специальный продукт.");
        $this->setPrice(999.99);
    }

}