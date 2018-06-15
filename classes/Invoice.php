<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:32
 */

namespace classes;


use interfaces\IInvoice;

/**
 * Class Invoice
 * @package classes
 */
class Invoice implements IInvoice
{
    /** @var  integer[] */
    private $product_ids;

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