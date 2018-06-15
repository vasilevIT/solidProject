<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:53
 */

namespace interfaces;

/**
 * Interface ICalculator
 * @package interfaces
 */
interface ICalculator
{

    /**
     * Считает сумму заказанных товаров.
     * @param IProduct[] $products
     * @return float
     */
    public function calcSum($products): float;
}