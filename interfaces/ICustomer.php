<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:13
 */

namespace interfaces;

/**
 * Interface ICustomer
 * @package interfaces
 */
interface ICustomer
{
    /**
     * @param IInvoice $invoice
     * @return void
     */
    public function setInvoice(IInvoice $invoice);

    /**
     * @return IInvoice
     */
    public function getInvoice(): IInvoice;

}