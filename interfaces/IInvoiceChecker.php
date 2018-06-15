<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 18:42
 */

namespace interfaces;

/**
 * Interface InvoiceChecker
 * @package interfaces
 */
interface IInvoiceChecker
{
    /**
     * Проверяет счет-фактуру.
     * @return bool
     */
    public function checkInvoice(): bool;

}