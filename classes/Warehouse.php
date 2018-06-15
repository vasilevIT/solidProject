<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:18
 */

namespace classes;


use interfaces\IProduct;
use interfaces\IWarehouse;

/**
 * Class Warehouse
 * @package classes
 */
class Warehouse implements IWarehouse
{
    /** @var  IProduct[] */
    private $products;

    /**
     * Warehouse constructor.
     */
    public function __construct()
    {
        $this->products = [];
    }


    /**
     * @return IProduct[]
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param int $id
     * @return IProduct
     */
    public function getProduct(int $id): IProduct
    {
        foreach ($this->products as $product) {
            if ($product->getId() == $id) {
                var_dump("warehouse");
                return $product;
            }
        }
        return null;
    }

    /**
     * @param IProduct[] $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }

    /**
     * @param IProduct $product
     */
    public function setProduct(IProduct $product)
    {
        $this->products[] = $product;
    }


}