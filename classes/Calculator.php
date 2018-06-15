<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:56
 */

namespace classes;


use interfaces\ICalculator;
use interfaces\IProduct;

/**
 * Class Calculator
 * @package classes
 */
class Calculator implements ICalculator
{
    /**
     * @param IProduct[] $products
     * @return float
     */
    public function calcSum($products): float
    {
        $sum = 0;
        foreach ($products as $product) {
            $sum += $product->getPrice();
        }
        return $sum;
    }

}