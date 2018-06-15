<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 17:17
 */

namespace classes;

use interfaces\IProduct;

/**
 * Class Product
 * @package classes
 */
class Product implements IProduct
{
    /** @var  integer */
    public $id;
    /** @var  string */
    private $name;
    /** @var  float */
    private $price;

    /**
     * Product constructor.
     */
    public function __construct()
    {
        $this->id = rand(1, 999);
        $this->name = "Test product " . $this->id;
        $this->price = rand(0, 1500);
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

}