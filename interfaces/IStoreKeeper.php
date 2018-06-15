<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:13
 */

namespace interfaces;

/**
 * Interface IStoreKeeper
 * @package interfaces
 */
interface IStoreKeeper
{
    /**
     * @param IWarehouse $warehouse
     * @return void
     */
    public function setWarehouse(IWarehouse $warehouse);

    /**
     * @param ICustomer $customer
     * @return void
     */
    public function setCustomer(ICustomer $customer);

    /**
     * Забирает товары со склада.
     * @return IProduct[]
     */
    public function pickup();

    /**
     * Проверяет счет-фактуру.
     * @return bool
     */
    public function checkInvoice(): bool;
}