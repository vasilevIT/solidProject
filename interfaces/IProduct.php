<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:10
 */

namespace interfaces;

/**
 * Interface IProduct
 * @package interfaces
 */
interface IProduct
{

    public function setId(int $id);

    public function setName(string $name);

    public function setPrice(float $price);

    public function getId(): int;

    public function getName(): string;

    public function getPrice(): float;

}