<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:35
 */

namespace classes;


use interfaces\IInvoice;

/**
 * Class SmartInvoice
 * @package classes
 */
class SmartInvoice implements IInvoice
{
    /** @var  integer[] */
    private $product_ids;

    /** @var  string */
    public $qr_code;

    /**
     * SmartInvoice constructor.
     */
    public function __construct()
    {
        $this->qr_code = "Hello world!";
    }


    /**
     * @param integer[] $ids
     */
    public function setProductsIds($ids)
    {
        $this->product_ids = $ids;
    }

    /**
     * @return integer[]
     */
    public function getProductsIds()
    {
        return $this->product_ids;
    }

}