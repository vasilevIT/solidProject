<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 18:58
 */

namespace classes;


use interfaces\ICustomer;
use interfaces\IProduct;
use interfaces\IStoreKeeper;
use interfaces\IInvoiceChecker;
use interfaces\IWarehouse;

/**
 * Class StoreKeeper
 * @package classes
 */
abstract class StoreKeeper implements IStoreKeeper, IInvoiceChecker
{

    /** @var  IWarehouse */
    protected $warehouse;
    /** @var  ICustomer */
    protected $customer;

    /**
     * @param IWarehouse $warehouse
     */
    public function setWarehouse(IWarehouse $warehouse)
    {
        $this->warehouse = $warehouse;
    }

    /**
     * @param ICustomer $customer
     */
    public function setCustomer(ICustomer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return IProduct[]
     */
    public function pickup()
    {
        $ids = $this->customer->getInvoice()->getProductsIds();
        $products = [];
        foreach ($ids as $id) {
            $products[] = $this->warehouse->getProduct($id);
        }
        return $products;
    }

    /**
     * Добавляет новые товары на склад.
     * @param IProduct[] $products
     */
    public function addProducts($products)
    {
        $products = array_merge($this->warehouse->getProducts(), $products);
        $this->warehouse->setProducts($products);
    }
}