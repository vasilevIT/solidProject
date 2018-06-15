<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:47
 */

namespace classes;


/**
 * Class HumanStoreKeeper
 * @package classes
 */
class HumanStoreKeeper extends StoreKeeper
{

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