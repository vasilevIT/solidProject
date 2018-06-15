<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:38
 */

namespace classes;


use interfaces\ICustomer;
use interfaces\IInvoice;

/**
 * Class Customer
 * @package classes
 */
class Customer implements ICustomer
{
    /** @var  IInvoice */
    private $invoice;
    /** @var  string */
    public $name;

    /**
     * @param IInvoice $invoice
     */
    public function setInvoice(IInvoice $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * @return IInvoice
     */
    public function getInvoice(): IInvoice
    {
        return $this->invoice;
    }

    /**
     * @inheritdoc
     */
    public function sign()
    {
        print("Sign completed");
    }

}