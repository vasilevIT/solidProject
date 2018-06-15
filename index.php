<?php
/**
 * Created by PhpStorm.
 * User: Anton Vasiliev <bysslaev@gmail.com>
 * Date: 15/06/2018
 * Time: 16:25
 */

use classes\Calculator;
use classes\Company;
use classes\HumanStoreKeeper;
use classes\IndividualCustomer;
use classes\Product;
use classes\SmartInvoice;
use classes\Warehouse;

require_once 'autoload.php';

/** Создаем клиентов. */
$individualCustomer = new IndividualCustomer();
$company = new Company();
/** Создаем склад */
$warehouse = new Warehouse();
/** Создаем кладовщика-человека. */
$humanStoreKeeper = new HumanStoreKeeper();
$humanStoreKeeper->setCustomer($individualCustomer);
$humanStoreKeeper->setWarehouse($warehouse);

/** Инициализируем склад. */
$product = new Product();
$product->setName("Первый продукт");
$product->setPrice(100);
$humanStoreKeeper->addProducts([$product]);
$product = new Product();
$product->setId(2);
$product->setPrice(200);
$product->setName("Второй продукт");
$humanStoreKeeper->addProducts([$product]);
$product = new Product();
$product->setId(3);
$product->setPrice(300);
$product->setName("Третий продукт");
$humanStoreKeeper->addProducts([$product]);
$product = new \classes\SpecialProduct();
$humanStoreKeeper->addProducts([$product]);
$product = new \classes\SpecialProduct();
$humanStoreKeeper->addProducts([$product]);
$product = new \classes\SaleProduct();
$humanStoreKeeper->addProducts([$product]);

/** Выводим список товаров на складе. */
print_r($warehouse);


/** Формируем накладную на второй и третий продукты. */
$invoice = new SmartInvoice();
$invoice->setProductsIds([2, 3]);

/** Отдаем накладную клиенту. */
$individualCustomer->setInvoice($invoice);
/** Забираем продукты со склада. */
$products = $humanStoreKeeper->pickup();

echo "Забрали продукты со склада:" . PHP_EOL;
print_r($products);

$calculator = new Calculator();
echo "Общая стоимость товаров: " . $calculator->calcSum($products) . PHP_EOL;