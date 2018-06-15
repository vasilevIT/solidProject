<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:40
 */

namespace classes;


use interfaces\ICustomer;
use interfaces\IInvoiceChecker;
use interfaces\ILoader;
use interfaces\IProduct;
use interfaces\IStoreKeeper;
use interfaces\IWarehouse;

/**
 * Class MachineStoreKeeper
 * @package classes
 */
class MachineStoreKeeper implements IStoreKeeper, IInvoiceChecker, ILoader
{
    /** @var  IWarehouse */
    private $warehouse;
    /** @var  ICustomer */
    private $customer;

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
     * Проверяет счет-фактуру. Она не должна быть пустой.
     * @return bool
     */
    public function checkInvoice(): bool
    {
        return $this->readQrCode();
    }

    /**
     * Считывает QR код с счета-фактуры
     * @return bool
     */
    public function readQrCode(): bool
    {
//        empty.
        return true;
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