<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 18:47
 */

namespace interfaces;

/**
 * Interface ILoader
 * @package interfaces
 */
interface ILoader
{
    /**
     * @param IProduct[] $products
     * @return void
     */
    public function addProducts($products);

}