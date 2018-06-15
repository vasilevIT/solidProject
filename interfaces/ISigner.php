<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 18:34
 */

namespace interfaces;

/**
 * Interface ISigner
 * @package interfaces
 */
interface ISigner
{
    /**
     * Подписывает накладную.
     */
    public function sign();

}