<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:40
 */

namespace classes;


use interfaces\ICustomer;
use interfaces\IProduct;
use interfaces\IStoreKeeper;
use interfaces\IWarehouse;

/**
 * Class MachineStoreKeeper
 * @package classes
 */
class MachineStoreKeeper implements IStoreKeeper
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
        if (count($this->customer->getInvoice()->getProductsIds()) > 0) {
            return true;
        }
        return false;
    }


}