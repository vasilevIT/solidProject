<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:11
 */

namespace interfaces;

/**
 * Interface IWarehouse
 * @package interfaces
 */
interface IWarehouse
{

    /**
     * @return IProduct[]
     */
    public function getProducts();

    /**
     * @param int $id
     * @return IProduct
     */
    public function getProduct(int $id): IProduct;

    /**
     * @param IProduct[] $products
     * @return void
     */
    public function setProducts($products);

    /**
     * @param IProduct $product
     * @return void
     */
    public function setProduct(IProduct $product);
}