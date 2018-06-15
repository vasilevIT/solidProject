<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:40
 */

namespace classes;


/**
 * Class MachineStoreKeeper
 * @package classes
 */
class MachineStoreKeeper extends StoreKeeper
{

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


}