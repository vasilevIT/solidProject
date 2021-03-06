<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:12
 */

namespace interfaces;

/**
 * Interface IInvoice
 * @package interfaces
 */
interface IInvoice
{
    /**
     * @param integer[] $ids
     * @return void
     */
    public function setProductsIds($ids);

    /**
     * @return integer[]
     */
    public function getProductsIds();

}